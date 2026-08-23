<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Floor to Door | Contact Us</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>

  <!-- ============ CONTACT US PAGE ============ -->
  <section class="page active" id="page-contact">
    <div class="page-header">
      <h2>Get in touch</h2>
      <p>Questions about an order, a partnership, or just want to say hi — we read everything.</p>
    </div>

    <div class="contact-wrap">
      <!-- this is a demo form, it doesn't send anywhere, see main.js -->
      <form class="contact-form" id="contactForm">
        <label for="cName">Full name</label>
        <input id="cName" type="text" placeholder="e.g. Thabo Nkosi" required>

        <label for="cEmail">Email address</label>
        <input id="cEmail" type="email" placeholder="you@example.com" required>

        <label for="cSubject">Subject</label>
        <input id="cSubject" type="text" placeholder="What's this about?" required>

        <label for="cMessage">Message</label>
        <textarea id="cMessage" placeholder="Tell us more..." required></textarea>

        <button type="submit" class="btn-primary" style="margin-top:20px;">Send message</button>
        <p class="form-msg" id="contactMsg">Thanks — your message has been noted. We'll reply soon.</p>
      </form>

      <div class="contact-info">
        <h3>Head office</h3>
        <p>Sandton, Johannesburg, South Africa</p>

        <h3 style="margin-top:26px;">Reach us</h3>
        <p>support@floortodoor.co.za</p>
        <p>+27 11 555 0192</p>

        <h3 style="margin-top:26px;">Hours</h3>
        <p>Mon – Sat, 07:00 – 21:00</p>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>

<script src="js/contact.js"></script>


</body>
</html>
