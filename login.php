<?php
// ============================================================
//  login.php — view only. All auth logic lives in api.php,
//  called via XMLHttpRequest from js/login.js and js/register.js.
//  Session cookie handles identity — no PHP form-handling here.
// ============================================================

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Floor to Door | Sign In</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>

  <!-- ============ SIGN IN PAGE ============ -->
  <section class="page active" id="page-signin">
    <div class="auth-wrap">
      <!-- tabs just toggle which form below is visible, see switchAuth() -->
      <div class="auth-tabs">
        <button type="button" class="auth-tab active" id="tabSignin" onclick="switchAuth('signin')">Sign In</button>
        <button type="button" class="auth-tab" id="tabRegister" onclick="switchAuth('register')">Create Account</button>
      </div>

      <form class="auth-form active" id="login-form">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>
        <button type="submit" class="auth-submit">Sign in</button>

        <p class="form-msg" id="message"></p>
      </form>

      <form class="auth-form" id="register-form">
        <p class="auth-note">Creating an account lets you track your orders, save your delivery addresses, and get notified when items in your basket go on a near-expiry deal.</p>

        <label for="rName">Full name</label>
        <input id="rName" name="name" type="text" placeholder="e.g. Richard Sanchez" required>
        <label for="rEmail">Email</label>
        <input id="rEmail" name="email" type="email" placeholder="you@example.com" required>
        <label for="rPhone">Phone number (optional)</label>
        <input id="rPhone" name="phonenum" type="tel" placeholder="e.g. 082 123 4567">
        <label for="rPassword">Password</label>
        <input id="rPassword" name="password" type="password" placeholder="Create a password" required>
        <button type="submit" class="auth-submit">Create account</button>

        <p class="form-msg" id="registerMsg"></p>
      </form>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>

<script src="js/authTabs.js"></script>
<script src="js/login.js"></script>
<script src="js/register.js"></script>

</body>
</html>