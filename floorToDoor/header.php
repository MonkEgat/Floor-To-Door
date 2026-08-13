<?php
// Start the session only if it hasn't already been started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Determine the current page
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">

    <!-- Logo -->
    <div class="brand">
        <a href="index.php" style="display:flex;align-items:center;text-decoration:none;color:inherit;">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                <rect x="4" y="4" width="9" height="22" rx="2" fill="#FFA630"/>
                <rect x="17" y="4" width="9" height="22" rx="2" fill="#FF5D5D"/>
            </svg>

            <span class="brand-name">Floor to Door</span>
        </a>
    </div>

    <!-- Cart -->
    <button class="cart-btn" aria-label="Cart">
        <svg width="22" height="22" viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round">

            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>

        </svg>

        <span class="cart-badge" id="cartBadge">0</span>
    </button>

    <!-- Menu Button FOR MOBILE DEVICES-->
    <button class="nav-toggle"
            onclick="toggleMobileNav()"
            aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Navigation Links -->
    <div class="nav-links" id="navLinks">

        <a href="products.php"
           class="nav-link <?php echo ($currentPage == 'products.php') ? 'active' : ''; ?>">
            Products
        </a>

        <a href="about.php"
           class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
            About Us
        </a>

        <a href="contact.php"
           class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
            Contact Us
        </a>


        <a href="signin.php"
            class="nav-link <?php echo ($currentPage == 'signin.php') ? 'active' : ''; ?>">
            Sign In
        </a>

        <!-- NOTE to SELF: Implement after implementing config and login page, etc
        <?php if(isset($_SESSION["loggedin"])): ?>

            <a href="logout.php" class="nav-link">
                Logout
            </a>

        <?php else: ?>

            <a href="signin.php"
               class="nav-link <?php echo ($currentPage == 'signin.php') ? 'active' : ''; ?>">
                Sign In
            </a>

        <?php endif; ?>
        -->

    </div>

</nav>