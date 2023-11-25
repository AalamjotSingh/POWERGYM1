<?php
// Include your database connection logic
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "powergym_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users from the database
$sql = "SELECT id, username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = ["id" => $row["id"], "username" => $row["username"]];
    }

    echo json_encode(["success" => true, "users" => $users]);
} else {
    echo json_encode(["success" => true, "users" => []]); // Return an empty array if no users found
}

$conn->close();
?>
