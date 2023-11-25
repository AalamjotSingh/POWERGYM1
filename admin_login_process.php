<?php
// admin_login_process.php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powergym_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Admin Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST["admin_username"];
    $admin_password = $_POST["admin_password"];

    // Fetch admin from the database
    $sql = "SELECT id, username, password FROM admins WHERE username='$admin_username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();

   
    if (password_verify($admin_password, $admin["password"])) {
        // Admin login successful
        $_SESSION["admin_id"] = $admin["id"];
    
        // Redirect to admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Debug output
        echo "<pre>";
        var_dump($admin_password, $admin["password"]);
        echo "</pre>";
    
        // Invalid password
        echo "<script>alert('Invalid password');</script>";
    }
}
}
$conn->close();
?>

