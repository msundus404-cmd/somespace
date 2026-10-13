<?php include_once 'config.php'; ?>
<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-logo">MyWebsite</a>
        <div class="nav-menu">
            <a href="index.php" class="nav-link">Home</a>
            <?php if(isLoggedIn()): ?>
                <a href="about.php" class="nav-link">About</a>
                <a href="services.php" class="nav-link">Services</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <a href="dashboard.php" class="nav-link">Dashboard</a>
                <a href="logout.php" class="nav-link logout">Logout (<?php echo $_SESSION['username']; ?>)</a>
            <?php else: ?>
                <a href="login.php" class="nav-link">Login</a>
                <a href="register.php" class="nav-link">sign_up</a>
            <?php endif; ?>
        </div>
    </div>
</nav>