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
<title>Add Product | Floor to Door</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/admin.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <section class="page active" id="page-add-product">

    <div class="page-header">
      <h2>Add Product</h2>
      <p>Fill in the details below to add a new product to Floor to Door.</p>
    </div>

    <div class="auth-wrap admin-wrap">
      <form class="auth-form active">

        <label for="product-name">Product Name</label>
        <input type="text" id="product-name" name="product-name">

        <label for="product-description">Description</label>
        <textarea id="product-description" name="product-description" rows="4"></textarea>

        <label for="product-category">Category</label>
        <select id="product-category" name="product-category">
          <option value="">Select a category</option>
          <option value="Fashion">Fashion</option>
          <option value="Wellness">Wellness</option>
          <option value="Fragrance">Fragrance</option>
          <option value="Home">Home</option>
        </select>

        <label for="product-price">Price</label>
        <input type="number" id="product-price" name="product-price" step="0.01">

        <label for="product-stock">Stock Quantity</label>
        <input type="number" id="product-stock" name="product-stock">

        <label for="product-seller">Seller</label>
        <select id="product-seller" name="product-seller">
          <option value="">Select a seller</option>
        </select>

        <label for="product-image">Product Image</label>
        <input type="file" id="product-image" name="product-image">

        <button type="submit" class="auth-submit">Add Product</button>
      </form>
    </div>

  </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
