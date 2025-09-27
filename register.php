<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $university = htmlspecialchars($_POST['university']);
    $category = htmlspecialchars($_POST['category']);
    $sessions = htmlspecialchars($_POST['sessions']);

    // Display the registration details
    echo "<h1>Registration Successful!</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>University:</strong> $university</p>";
    echo "<p><strong>Category:</strong> $category</p>";
    echo "<p><strong>Interested Sessions:</strong> $sessions</p>";
} else {
    // Display the registration form
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register - Conference Management</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <header>
            <a href="index.html">← Back to Home</a>
        </header>
        <section class="register-form">
            <h1>Register for the Conference</h1>
            <form action="register.php" method="POST">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="university">University:</label>
                <input type="text" id="university" name="university" required>

                <label for="category">Participant Category:</label>
                <select id="category" name="category" required>
                    <option value="student">Student</option>
                    <option value="academic">Academic</option>
                    <option value="professional">Professional</option>
                </select>

                <label for="sessions">Interested Sessions:</label>
                <textarea id="sessions" name="sessions" rows="3" placeholder="Specify sessions you're interested in"></textarea>

                <button type="submit">Register</button>
                <p>Already have an account? <a href="signin.html">Log in here.</a></p> 
            </form>
        </section>

        <script src="register.js"></script>
    </body>
    </html>
    <?php
}
?>
