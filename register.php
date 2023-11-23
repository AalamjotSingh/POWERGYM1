<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="register_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;;
      background-image: url('Images/alexander-jawfox-Kl2t5U6Gkm0-unsplash.jpg');
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

    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('Images/guy_deadlift.jpg');
      background-size: cover;
      background-position: center;
      z-index: -1;
    }

    h2 {
      text-align: center;
      color: black;
     }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>User Registration</h2>
    <form action="register_process.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" required>
      <br>
      <input type="submit" value="Register">
    </form>
  </div>
</body>

</html>
