<?php 
require_once 'config.php';
if (!isLoggedIn()) {
    redirect('login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container">
        <h1>Our Services</h1>
        <p>This is the services page. Only logged-in users can see this content.</p>
        
        <div class="services-list">
            <div class="service-item">
                <h3>Web Development</h3>
                <p>Custom website development and design services.</p>
            </div>
            <div class="service-item">
                <h3>PHP Programming</h3>
                <p>Backend development with PHP and MySQL.</p>
            </div>
            <div class="service-item">
                <h3>Database Design</h3>
                <p>MySQL database design and optimization.</p>
            </div>
        </div>
    </div>
</body>
</html>