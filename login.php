<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
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
</head>

<body>

  <div class="login-container">
    <h2>User Login</h2>
    <form action="login_process.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" required>
      <br>
      <input type="submit" value="Login">
    </form>
    <p>Not a user at Power Gym? <a href="register.php" style="color: #4CAF50;">Register here</a></p>
  </div>
</body>

</html>
