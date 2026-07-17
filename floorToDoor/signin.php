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
        <button class="auth-tab active" id="tabSignin" onclick="switchAuth('signin')">Sign In</button>
        <button class="auth-tab" id="tabRegister" onclick="switchAuth('register')">Create Account</button>
      </div>

      <form class="auth-form active" id="formSignin">
        <label for="siEmail">Email</label>
        <input id="siEmail" type="email" placeholder="you@example.com" required>
        <label for="siPassword">Password</label>
        <input id="siPassword" type="password" placeholder="••••••••" required>
        <button type="submit" class="auth-submit">Sign in</button>
        <p class="form-msg" id="signinMsg">This is a demo — no account has actually been created.</p>
      </form>

      <form class="auth-form" id="formRegister">
        <p class="auth-note">Creating an account lets you track your orders, save your delivery addresses, and get notified when items in your basket go on a near-expiry deal.</p>

        <label for="rName">Full name</label>
        <input id="rName" type="text" placeholder="e.g. Lerato Dube" required>
        <label for="rEmail">Email</label>
        <input id="rEmail" type="email" placeholder="you@example.com" required>
        <label for="rPassword">Password</label>
        <input id="rPassword" type="password" placeholder="Create a password" required>
        <button type="submit" class="auth-submit">Create account</button>
        <p class="form-msg" id="registerMsg">This is a demo — no account has actually been created.</p>
      </form>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>

<script src="js/signin.js"></script>


</body>
</html>
