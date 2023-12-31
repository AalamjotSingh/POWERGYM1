<!DOCTYPE html>
<html lang="en">
<!--this is the home page where users can browse the available classes and register in these classes, the logic lies in class_registration_process.php --->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Power Gym</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-CE6pKg1Iuz1b9YgDLqszfhM3D7xKKaT/c6cPhB+q3KJDRnlaSjU3D+LcA1KV3QFg7ckJo+ypskEtwRsfD2ntHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!------------------------------- css and fontawesome ------------------------------------->

  <link rel="stylesheet" href="CSS/mainstyle.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---------------------------- php navbar --------------------->

  <?php include 'navbar.php'; ?>


  <!---------------------------- javascript --------------------->
  <script src="main.js"></script>
  <script src="responsive_navbar.js"></script>
  <style>

    body {
      font-family: Arial, Helvetica, sans-serif;;

      background-image: url('Images/guy_deadlift.jpg'); 
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
      color: #333; 
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

    /* media querries */
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

    //  table class_timings for diplaying the infomration regarding the classes
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
