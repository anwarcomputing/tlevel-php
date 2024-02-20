<?php

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: .');
    exit;
}

if (empty($_SESSION['username'])) {
    include("model\login_db.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAG</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<header class="bg-dark text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href=".">HAG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <?php if (isset($_SESSION['username'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Weather</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="articles.php">Information</a>
                    </li>
                    <?php } ?> 
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['username'])) { ?>
                    
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a class="nav-link" href="profile.php"><?php echo $_SESSION['username']; ?></a>
                        <?php } ?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="?logout=1">Logout</a>
                    </li>
                    <?php } else { ?>    
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" href="signup.php">Sign Up</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</header>
