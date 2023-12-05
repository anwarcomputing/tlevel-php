<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                // Start the session
                session_start();

                // Check if the user is already logged in
                if (isset($_SESSION['username'])) {
                    echo '<div class="alert alert-success" role="alert">Welcome back, ' . $_SESSION['username'] . '!</div>';
                } else {
                    // If not logged in, check if the form is submitted
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Validate the login credentials (you may replace this with a database check)
                        $escaped_username = $conn->real_escape_string($_POST['username']);
                        $escaped_password = $conn->real_escape_string($_POST['password']);
                        // Query to check login credentials
                        $sql = "SELECT * FROM users WHERE username='$escaped_username' AND password='$escaped_password'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // Set the session variable
                            $_SESSION['username'] = $escaped_username;
                            echo '<div class="alert alert-success" role="alert">Login successful. Welcome, ' . $escaped_username . '!</div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Invalid login credentials.</div>';
                        }
                    } else {
                        // Display the login form
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Login</h2>
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, but needed for some Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
