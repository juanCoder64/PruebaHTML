<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["username"])) {
    header("Location: index.html"); // Redirect to the login page if not authenticated
    exit();
}

// Display the dashboard content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>This is the university dashboard.</p>
    
    <!-- Add more dashboard content here -->

    <p><a href="logout.php">Logout</a></p>
</body>
</html>

