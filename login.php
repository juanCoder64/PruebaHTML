<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password (in a real-world scenario, you would do more validation)
    if ($username === "example_user" && $password === "example_password") {
        // Authentication successful
        session_start();
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Redirect to the dashboard page
        exit();
    } else {
        // Authentication failed
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
</head>
<body>
    <h2>Login Result</h2>

    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
    
    <p><a href="index.html">Go back to login</a></p>
</body>
</html>

