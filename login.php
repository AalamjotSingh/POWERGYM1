<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
    /* CSS */
    body {
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
      color: white;
      text-shadow: 2px 2px 4px #000000;
    }
  </style>
</head>
<body>
    <h2>User Login</h2>
    <div class="login-container">
    <form action="login_process.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" required>
      <br>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
