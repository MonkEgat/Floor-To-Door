<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Floor to Door | Everything, delivered</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>

  <!-- ============ HOME PAGE ============ -->
  <section class="page active" id="page-home">
    <div class="hero">
      <div class="hero-text">
        <span class="eyebrow">Delivered across South Africa</span>
        <h1>From our <span>floor</span> to your door, today.</h1>
        <p>Fashion, wellness and fragrance — all from local sellers, packed with care and dropped right at your doorstep.</p>
        <div class="cta-row">
          <a class="btn-primary" href="products.php">Browse products</a>
          <a class="btn-ghost" href="about.php">Our story</a>
        </div>
      </div>
      <div class="hero-arch">
        <img src="https://picsum.photos/seed/f2d-hero/700/900" alt="Assortment of items ready for delivery">
      </div>
    </div>

    <div class="category-strip">
      <h2>Shop by category</h2>
      <div class="pill-row">
        <a class="pill" href="products.php?category=Fashion">👕 Fashion</a>
        <a class="pill" href="products.php?category=Wellness">💊 Wellness</a>
        <a class="pill" href="products.php?category=Fragrance">🌸 Fragrance</a>
        <a class="pill" href="products.php?category=Home">🏠 Home</a>
      </div>
    </div>

    <!-- simple 3 step explainer, this one actually is a sequence so numbering it makes sense -->
    <div class="steps">
      <div class="step">
        <div class="step-num">1</div>
        <h3>You order</h3>
        <p>Pick anything from fashion to perfume in one simple checkout.</p>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <h3>We pack it</h3>
        <p>Local partners prepare your order carefully, the same day.</p>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <h3>It lands at your door</h3>
        <p>Track it live until it's on your doorstep, no surprises.</p>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>
