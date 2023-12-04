<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    echo 'Welcome back, ' . $_SESSION['username'] . '!';
} else {
    // If not logged in, check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate the login credentials (you may replace this with a database check)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // For demonstration purposes, let's use a simple check
        if ($username === 'demo' && $password === 'password') {
            // Set the session variable
            $_SESSION['username'] = $username;
            echo 'Login successful. Welcome, ' . $username . '!';
        } else {
            echo 'Invalid login credentials.';
        }
    } else {
        // Display the login form
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
        </head>
        <body>
            <h2>Login</h2>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <button type="submit">Login</button>
            </form>
        </body>
        </html>
        <?php
    }
}
?>