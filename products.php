<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Floor to Door | Products</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>

  <!-- ============ PRODUCTS PAGE ============ -->
  <section class="page active" id="page-products">
    <div class="page-header">
      <h2>All products</h2>
      <p>Swipe through the photos on each card and check the details before you add it to your basket.</p>
    </div>

    <!-- search bar - just sits here for now, doesn't actually search anything yet -->
    <form class="search-row" onsubmit="return false;">
      <span class="search-icon">🔍</span>
      <input type="text" id="searchInput" placeholder="Search products...">
    </form>

    <!-- ============ NEAR-EXPIRY DEALS ============ -->
    <div class="deals-section">
      <h2>Almost expired, still good</h2>
      <p>These are past their best-before date but still safe to use, so sellers have dropped the price. Each card shows how long ago that date passed.</p>
      <div class="deals-row" id="dealsRow"></div>
    </div>

    <!-- filled in by renderFilters() -->
    <div class="filter-row" id="filterRow"></div>

    <!-- filled in by renderProducts() -->
    <div class="product-grid" id="productGrid"></div>
  </section>

</main>

<?php include 'footer.php'; ?>

<script src = "js/products.js"></script>

</body>
</html>
