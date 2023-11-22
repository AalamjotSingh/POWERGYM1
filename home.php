<!-- Display Class Timings and Allow Registration -->


<h3>Class Timings and Registration</h3>
<table border="1">
    <tr>
        <th>Class Name</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Seats Left</th>
        <th>Action</th>
    </tr>

    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powergym_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch class timings from the database
    $sql = "SELECT id, class_name, start_time, end_time, seats_left FROM class_timings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['class_name']}</td>";
            echo "<td>{$row['start_time']}</td>";
            echo "<td>{$row['end_time']}</td>";
            echo "<td>{$row['seats_left']}</td>";
            echo "<td><form action='class_registration_process.php' method='post'>";
            echo "<input type='hidden' name='class_id' value='{$row['id']}'>";
            echo "<input type='submit' value='Register'>";
            echo "</form></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No class timings available.</td></tr>";
    }
    ?>
</table>
