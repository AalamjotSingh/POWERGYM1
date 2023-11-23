<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Power Gym</title>
  <style>
    body {
      background-image: url('Images/guy_deadlift.jpg'); /* Change to your image path */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      margin: 0;
    }

    .container {
      max-width: 800px;
      margin: 100px auto;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
      text-align: center;
      color: #333; /* Adjust text color as needed */
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .container {
        max-width: 100%;
        margin: 50px auto;
        padding: 10px;
      }

      table {
        font-size: 14px;
      }

      th, td {
        padding: 8px;
      }
    }
  </style>
</head>

<body>

<div class="container">
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
</div>
</body>

</html>
