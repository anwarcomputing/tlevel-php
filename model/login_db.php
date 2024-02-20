<?php

include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'])) {
        $escaped_username = $conn->real_escape_string($_POST['username']);
        $escaped_password = $conn->real_escape_string($_POST['password']);
        $sql = "SELECT * FROM users WHERE username='$escaped_username' AND password='$escaped_password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $escaped_username;
            header('Location: .');
        } else {
            $_SESSION['error'] = "Invalid login credentials.";
        }
    } elseif (isset($_POST['register_username']) && isset($_POST['register_password'])) {
        $escaped_register_username = $conn->real_escape_string($_POST['register_username']);
        $escaped_register_password = $conn->real_escape_string($_POST['register_password']);
        $sql = "SELECT * FROM users WHERE username='$escaped_register_username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['error'] = "User already exists, please sign in or contact administrator";
            header('Location: signin.php');
        } else {
            $sql = "INSERT INTO users (id, username, password) VALUES (NULL, '$escaped_register_username', '$escaped_register_password')";        
            $result = $conn->query($sql);
            $_SESSION['username'] = $escaped_register_username;
            header('Location: .');
        } 
    } else { 
        $_SESSION['error'] = "Complete all values";
    }
}