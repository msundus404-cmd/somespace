<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

    <div class="container">
        <h1>Welcome to Our Website</h1>
        <p>This is the home page. Everyone can see this content.</p>
        
        <?php if(!isLoggedIn()): ?>
            <div class="auth-buttons">
                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn">sign_up</a>
            </div>
        <?php else: ?>
            <p>Welcome back, <?php echo $_SESSION['username']; ?>!</p>
            <div class="protected-links">
                <h3>Protected Pages (Logged in users only):</h3>
                <a href="about.php" class="btn">About Us</a>
                <a href="services.php" class="btn">Our Services</a>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>