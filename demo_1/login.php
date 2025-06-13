<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 550px;
    }

    .login-box {
      background-color: black;
      padding: 20px;
      border: 2px solid #ccc;
      border-radius: 12px;
      width: 350px;
      height: 250px;
    }

    .login-box h2 {
      text-align: center;
        color: white;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 95%;
      padding: 8px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-box input[type="submit"] {
      width: 100%;
      padding: 8px;
      background-color: blue;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      
    }
    .login-box input[type="submit"]:hover {
      background-color: blue;
    }
     .login-box .forgot-password {
      display: block;
      margin-top: 15px;
      font-size: 14px;
     }

    .login-box .forgot-password {
      color: #3498db;
      text-decoration: none;
    }

    .login-box .forgot-password:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>

  <form class="login-box" action="putlinkofdashboardhere.php" method="post">
    <h2>Admin Login</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <a href="demo_1\index.php"><input type="submit" value="Login"></a>
    <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
    
  </form>

</body>
</html>