<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION["admin_id"])) {
    // Redirect to the admin login page if not logged in
    header("Location: admin_login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powergym_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle user deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "delete_user") {
    $user_id = $_POST["user_id"];

    // Delete user from the database
    $deleteSql = "DELETE FROM users WHERE id = '$user_id'";
    if ($conn->query($deleteSql) === TRUE) {
        echo json_encode(["success" => true, "message" => "User deleted successfully"]);
        exit();
    } else {
        echo json_encode(["success" => false, "message" => "Error deleting user"]);
        exit();
    }
}

// Fetch users from the database
$usersResult = $conn->query("SELECT id, username FROM users");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>

    <h1>Welcome, Admin!</h1>

    <!-- Display users from the database -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user = $usersResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$user['id']}</td>";
                echo "<td>{$user['username']}</td>";
                echo "<td>";
                echo "<form class='delete-form'>";
                echo "<input type='hidden' name='user_id' value='{$user['id']}'>";
                echo "<input type='hidden' name='action' value='delete_user'>";
                echo "<button type='button' class='delete-button'>Delete</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

  <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        // Attach click event to delete buttons
        $('.delete-button').on('click', function () {
            var form = $(this).closest('.delete-form');
            var userId = form.find('input[name="user_id"]').val();

            // AJAX to delete user
            $.ajax({
                url: 'admin_dashboard.php',
                type: 'POST',
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        alert(response.message);
                        // Reload the page after successful deletion
                        location.reload();
                    } else {
                        alert(response.message);
                    }
                },
                error: function (error) {
                    console.error('Error during user deletion:', error);
                }
            });
        });
    });
</script>


</body>

</html>

<?php
$conn->close();
?>
