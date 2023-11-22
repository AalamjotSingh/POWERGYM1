<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); // Redirect to login page or handle as needed
    exit();
}

// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powergym_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process class registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id"];
    $class_id = $_POST["class_id"];

    // Check class availability and capacity
    $availability = checkClassAvailability($class_id);
    if ($availability > 0) {
        // Insert class registration data into the database
        $sql = "INSERT INTO registered_users (user_id, class_id) VALUES ('$user_id', '$class_id')";
        if ($conn->query($sql) === TRUE) {
            // Successfully registered, decrement seats_left
            updateSeatsLeft($class_id);
            echo "Class registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Class is full. Please choose another class.";
    }
}

// Close the database connection
$conn->close();

// Function to check class availability and return the remaining seats
function checkClassAvailability($class_id)
{
    global $conn;

    $result = $conn->query("SELECT seats_left FROM class_timings WHERE id='$class_id'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Check the number of registrations for the selected class
        $registrations = $conn->query("SELECT COUNT(*) as count FROM registered_users WHERE class_id='$class_id'");
        $registrations_count = $registrations->fetch_assoc()['count'];

        // Calculate remaining seats
        $remaining_seats = $row['seats_left'] - $registrations_count;

        return $remaining_seats;
    }

    return 0; // Class not found
}

// Function to update seats_left after a successful registration
function updateSeatsLeft($class_id)
{
    global $conn;

    // Decrement seats_left for the selected class
    $conn->query("UPDATE class_timings SET seats_left = seats_left - 1 WHERE id = '$class_id'");
}
?>
