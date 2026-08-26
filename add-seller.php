<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Guard: only admins can view this page, regardless of whether the
// nav link was hidden. Never rely on a hidden link alone for access control.
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin'] || ($_SESSION['type'] ?? '') !== 'admin') {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Seller | Floor to Door</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/admin.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <section class="page active" id="page-add-seller">

    <div class="page-header">
      <h2>Add Seller</h2>
      <p>Fill in the details below to register a new seller on Floor to Door.</p>
    </div>

    <div class="auth-wrap admin-wrap">
      <form class="auth-form active">

        <label for="seller-name">Business Name</label>
        <input type="text" id="seller-name" name="seller-name">

       <!-- <label for="seller-username">Username</label>
        <input type="text" id="seller-username" name="seller-username">

        <label for="seller-email">Email</label>
        <input type="email" id="seller-email" name="seller-email">

        <label for="seller-phone">Phone Number</label>
        <input type="tel" id="seller-phone" name="seller-phone">

        <label for="seller-password">Temporary Password</label>
        <input type="password" id="seller-password" name="seller-password">

      -->


        <button type="submit" class="auth-submit">Add Seller</button>

      </form>
    </div>

  </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
