<?php
// database conection setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powergym_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];


    // -----------------------------Logic for checking if the user is already registerd ---------------------------------------------

//extra_feature using sql query statements to prevent sql injection attacks
    $query_check_username = "SELECT * FROM users WHERE username = ?";
    $query_statement = $conn->prepare($query_check_username);
    // bind_param is used to bind the parameter of type string to the $username, username will replace ? in the query_statement
    $query_statement->bind_param("s", $username);
    // executing the query_statements 
    $query_statement->execute();
    // storing th result of the querry in $result for further useage 
    $result = $query_statement->get_result();
    
    // when num_rows method has more than one rows ie the user alreadyt exists in the databse 
    if ($result->num_rows > 0) {
        // when user is alerady registerd, display alert and redirect to login.php
        echo "<script>
                alert('User already registered. Please try logging in.');
                window.location.href = 'login.php';
              </script>";
        exit();
    }

    // When user is unique and not previusly registerd proceed to insert credentials in database
    $query_statement->close();

    // Hashing password before storing 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Inserting credentials in the database
    $insertQuery = "INSERT INTO users (username, password) VALUES (?, ?)";
    $query_statement = $conn->prepare($insertQuery);
    $query_statement->bind_param("ss", $username, $hashedPassword);
    $query_statement->execute();
    $query_statement->close();

    // Close the database connection
    $conn->close();

    // Redirect user to login page once alert is acknowledged
    header("Location: login.php?success=RegistrationSuccess");
    exit();
} else {
    // If the form is not submitted, redirect to the registration page
    header("Location: register.php");
    exit();
}
?>