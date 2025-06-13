<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .box {
      background-color: black;
      color: white;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      text-align: center;
    }

    input[type="email"], input[type="submit"] {
      width: 90%;
      padding: 8px;
      margin: 10px 0;
      border-radius: 4px;
      border: none;
    }

    input[type="submit"] {
      background-color: blue;
      color: white;
      cursor: pointer;
    }

    a {
      color: #3498db;
      font-size: 14px;
      text-decoration: none;
      display: block;
      margin-top: 10px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <form class="box" action="index.php" method="post">
    <h2>Forgot Password</h2>
    <p style="font-size: 14px;">Enter your email</p>
    <input type="email" name="email" placeholder="Email" required>
    <input type="submit" value="Reset Password">
    <input type="button">Back to Login</input>
  </form>

</body>
</html>