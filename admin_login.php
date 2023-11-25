<!-- admin_login.php -->



<!DOCTYPE html>
<html lang="en">

<head>
 <!------------------------------- css and fontawesome ------------------------------------->
 <link rel="stylesheet" href="CSS/mainstyle.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!---------------------------- php navbar --------------------->
  <?php include 'navbar.php'; ?>
  <!---------------------------- javascript --------------------->
  <script src="main.js"></script>
  <script src="responsive_navbar.js"></script>
<style>

/* CSS */
    body {
      font-family: Arial, Helvetica, sans-serif;;
      background-image: url('Images/guy_deadlift.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      margin: 0;
    }

    .login-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 100px auto;
      padding: 20px;
      width: 300px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 5px solid #ccc;
      border-radius: 5px;
      outline: none;
      transition: border-color 0.3s;
    }

    .login-container input[type="text"]:focus,
    .login-container input[type="password"]:focus {
      border-color: #4CAF50;
    }

    h2 {
      text-align: center;
      color: black;
    }
  </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
<div class="login-container">
<form action="admin_login_process.php" method="post">
    <label for="admin_username">Username:</label>
    <input type="text" id="admin_username" name="admin_username" required>

    <label for="admin_password">Password:</label>
    <input type="password" id="admin_password" name="admin_password" required>

    <input type="submit" value="Login">
</form>
