<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powergym_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_admin_username = $_POST["new_admin_username"];
    $new_admin_password = $_POST["new_admin_password"];

    // Hash the password
    $hashedPassword = password_hash($new_admin_password, PASSWORD_DEFAULT);

    // Insert new admin into the database
    $sql = "INSERT INTO admins (username, password) VALUES ('$new_admin_username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Admin registration successful!'); window.location.replace('admin_login.php');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>

<body>

    <form action="admin_registration.php" method="post">
        <label for="new_admin_username">Username:</label>
        <input type="text" id="new_admin_username" name="new_admin_username" required>

        <label for="new_admin_password">Password:</label>
        <input type="password" id="new_admin_password" name="new_admin_password" required>

        <input type="submit" value="Register">
    </form>

</body>

</html>
