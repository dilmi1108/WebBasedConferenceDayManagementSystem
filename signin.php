<?php
// Initialize variables
$name = $email = "";
$error_message = "";

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['Email']);
    
    // Example: Simple validation (you can replace this with actual authentication logic)
    if (empty($name) || empty($email)) {
        $error_message = "Please fill in both fields.";
    } else {
        // Successful sign-in (you can add real authentication logic here)
        // For now, just a success message
        header("Location: dashboard.php"); // Redirect to a dashboard or another page upon successful sign-in
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Sign In - Conference Management</title>
</head>
<body>
    <header class="navbar">
        <!-- You can add a navbar here if needed -->
    </header>

    <section class="sign-in-section">
        <div class="form-container">
            <h1>Sign In</h1>
            <form action="signin.php" method="POST">
                <label for="name">User Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" value="<?php echo $name; ?>" required>
                
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email" placeholder="Enter your Email" value="<?php echo $email; ?>" required>
                
                <button type="submit" class="sign-in-button">Sign In</button>
                <p>Don't have an account? <a href="register.php">Register here</a>.</p>
            </form>
            
            <?php
            // Display error message if any
            if ($error_message) {
                echo "<p style='color: red;'>$error_message</p>";
            }
            ?>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Conference Management System</p>
    </footer>

    <script src="signin.js"></script>
</body>
</html>
