<?php
// ============================================================
//  api.php — central JSON dispatcher for Floor to Door.
//  Auth model: PHP session (no API keys — the session cookie
//  is the proof of identity, checked via $_SESSION).
//  Currently handles: Register, Login, Logout, CheckSession.
//  Future case additions: GetProducts, AddToCart, PlaceOrder, etc.
// ============================================================

ini_set('display_errors', 0);
error_reporting(0);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once('config.php'); // must provide $conn (mysqli)

header("Content-Type: application/json");

class API
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function handleIncomingRequest()
    {
        $raw = file_get_contents("php://input");
        $data = json_decode($raw, true);

        if ($data === null || !isset($data["type"])) {
            $this->sendResponse("error", "invalid or missing request type", 400);
            return;
        }

        switch ($data["type"]) {
            case "Register":
                $this->register($data);
                break;
            case "Login":
                $this->login($data);
                break;
            case "Logout":
                $this->logout();
                break;
            case "CheckSession":
                $this->checkSession();
                break;
            default:
                $this->sendResponse("error", "unknown request type", 400);
        }
    }

    private function validateName($name)
    {
    if (strlen($name) < 2) return "Full name must be at least 2 characters.";
    if (!preg_match('/^[a-zA-Z\s\'-]+$/', $name)) return "Full name can only contain letters, spaces, hyphens, and apostrophes.";
    return null;
    }

    private function validatePassword($password)
    {
    if (strlen($password) < 8) return "Password must be at least 8 characters.";
    if (!preg_match('/[A-Z]/', $password)) return "Password needs at least one uppercase letter.";
    if (!preg_match('/[a-z]/', $password)) return "Password needs at least one lowercase letter.";
    if (!preg_match('/[0-9]/', $password)) return "Password needs at least one digit.";
    if (!preg_match('/[!@#$%^&*(){}\[\]<>?\/|\-+]/', $password)) return "Password needs at least one symbol.";
    return null;
    }

    private function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return "Enter a valid email address.";
        return null;
    }

    private function validatePhone($phone)
    {
    if ($phone === '') return null; // optional field

    $cleaned = str_replace([' ', '-'], '', $phone);
    if (!preg_match('/^(0[1-9][0-9]{8}|\+27[1-9][0-9]{8})$/', $cleaned)) {
        return "Enter a valid phone number, e.g. 082 123 4567.";
    }
    return null;
    }

    private function register($data)
{
    $name = trim($data["name"] ?? '');
    $email = trim($data["email"] ?? '');
    $password = trim($data["password"] ?? '');
    $phonenum = trim($data["phonenum"] ?? '');

    if ($name === '' || $email === '' || $password === '') {
        $this->sendResponse("error", "All fields are required.", 400);
        return;
    }

    if (($err = $this->validateName($name)) !== null) {
        $this->sendResponse("error", $err, 400);
        return;
    }

    if (($err = $this->validateEmail($email)) !== null) {
        $this->sendResponse("error", $err, 400);
        return;
    }

    if (($err = $this->validatePassword($password)) !== null) {
        $this->sendResponse("error", $err, 400);
        return;
    }


    if (($err = $this->validatePhone($phonenum)) !== null) {
    $this->sendResponse("error", $err, 400);
    return;
    }

    $stmt = $this->conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $this->sendResponse("error", "That email is already registered.", 409);
        $stmt->close();
        return;
    }
    $stmt->close();

    $salt = bin2hex(random_bytes(16));
    $hashedPassword = $salt . ":" . hash("sha512", $salt . $password);

    // type hardcoded 'customer' directly in SQL — never bound from user
    // input, so this endpoint can never create an admin account.
    if ($phonenum !== '') {
        $stmt = $this->conn->prepare(
            "INSERT INTO users (full_name, password, email, phonenum, type) VALUES (?, ?, ?, ?, 'customer')"
        );
        $stmt->bind_param("ssss", $name, $hashedPassword, $email, $phonenum);
    } else {
        $stmt = $this->conn->prepare(
            "INSERT INTO users (full_name, password, email, type) VALUES (?, ?, ?, 'customer')"
        );
        $stmt->bind_param("sss", $name, $hashedPassword, $email);
    }

    if (!$stmt->execute()) {
        $this->sendResponse("error", "Registration failed. Please try again.", 500);
        $stmt->close();
        return;
    }

    $userId = $stmt->insert_id;
    $stmt->close();

    $stmt = $this->conn->prepare("SELECT profile_pic FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $newUser = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    session_regenerate_id(true);

    $_SESSION['loggedin']    = true;
    $_SESSION['user_id']     = $userId;
    $_SESSION['fullName']    = $name; // session key kept as 'fullName' so header.php/profile.php don't need changes; holds the full name value now
    $_SESSION['type']        = 'customer';
    $_SESSION['profile_pic'] = $newUser['profile_pic'];

    $this->sendResponse("success", ["fullName" => $name, "type" => "customer"], 200);
}

private function login($data)
{
    $email = trim($data["email"] ?? '');
    $password = trim($data["password"] ?? '');

    if ($email === '' || $password === '') {
        $this->sendResponse("error", "Enter your email and password.", 400);
        return;
    }

    $stmt = $this->conn->prepare("SELECT id, full_name, password, type, profile_pic FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $this->sendResponse("error", "Incorrect email or password.", 401);
        $stmt->close();
        return;
    }

    $user = $result->fetch_assoc();
    $stmt->close();

    $parts = explode(":", $user['password']);
    if (count($parts) !== 2) {
        $this->sendResponse("error", "Incorrect email or password.", 401);
        return;
    }

    [$salt, $storedHash] = $parts;
    $incomingHash = hash("sha512", $salt . $password);

    if (!hash_equals($storedHash, $incomingHash)) {
        $this->sendResponse("error", "Incorrect email or password.", 401);
        return;
    }

    session_regenerate_id(true);

    $_SESSION['loggedin']    = true;
    $_SESSION['user_id']     = $user['id'];
    $_SESSION['fullName']    = $user['full_name'];
    $_SESSION['type']        = $user['type'];
    $_SESSION['profile_pic'] = $user['profile_pic'];

    $this->sendResponse("success", ["fullName" => $user['full_name'], "type" => $user['type']], 200);
}

    private function logout()
    {
        $_SESSION = [];
        session_destroy();
        $this->sendResponse("success", "logged out", 200);
    }

    private function checkSession()
    {
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            $this->sendResponse("success", [
                "fullName" => $_SESSION["fullName"],
                "type" => $_SESSION["type"]
            ], 200);
        } else {
            $this->sendResponse("error", "not logged in", 401);
        }
    }

    private function sendResponse($status, $data, $httpCode)
    {
        http_response_code($httpCode);
        echo json_encode([
            "status" => $status,
            "timestamp" => round(microtime(true) * 1000),
            "data" => $data
        ]);
    }
}

$api = new API();
$api->handleIncomingRequest();