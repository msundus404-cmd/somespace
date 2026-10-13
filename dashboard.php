<?php include_once 'config.php'; 
if (!isLoggedIn()) {
    redirect('login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome to your dashboard, <?php echo $_SESSION['username']; ?>!</p>
        <p>This is a protected page that only logged-in users can see.</p>
    </div>
</body>
</html>