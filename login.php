<?php
// ============================================================
//  TEMPORARY TEST LOGIN — hardcoded, no database.
//  Only the "Sign In" tab actually does anything: type an email
//  starting with "admin" (e.g. admin@test.com) to log in as an
//  admin, anything else logs you in as a customer. No password
//  is actually checked. The "Create Account" tab is still just
//  the old front-end demo — swap this whole file for the real
//  login.php (DB + password_verify + CSRF) before going live.
// ============================================================

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$signinError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form'] ?? '') === 'signin') {
    $email = trim($_POST['email'] ?? '');

    if ($email === '') {
        $signinError = 'Enter an email.';
    } else {
        $_SESSION['loggedin'] = true;
        //$_SESSION['username'] = $email;
        $_SESSION['username'] = explode('@', $email)[0];
        $_SESSION['type']     = (stripos($email, 'admin') === 0) ? 'admin' : 'customer'; //any email with 'admin' in it lets you login as admin

        header('Location: index.php');
        exit();
    }
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

      <form class="auth-form active" id="formSignin" method="POST" action="login.php">
        <input type="hidden" name="form" value="signin">

        <label for="siEmail">Email</label>
        <input id="siEmail" name="email" type="email" placeholder="try admin@test.com" required>
        <label for="siPassword">Password</label>
        <input id="siPassword" name="password" type="password" placeholder="anything works for now" required>
        <button type="submit" class="auth-submit">Sign in</button>

        <?php if ($signinError): ?>
          <p class="form-msg show" style="color: var(--coral);"><?php echo htmlspecialchars($signinError); ?></p>
        <?php else: ?>
          <p class="form-msg" id="signinMsg">Test mode — email starting with "admin" logs you in as admin, anything else is a customer. Password isn't checked yet.</p>
        <?php endif; ?>
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

<script src="js/login.js"></script>


</body>
</html>