<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Only logged-in users should see a profile page
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Floor to Door | Profile</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/profile.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <section class="page active" id="page-profile">
    <div class="profile-header">
      <h1>Hi <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
      <button type="button" class="btn-ghost" id="editProfileBtn">Edit Profile</button>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>