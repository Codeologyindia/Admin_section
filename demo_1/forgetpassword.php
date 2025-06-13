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
       height: 600px;
    }

    .box {
      background-color: black;
      color: white;
      padding: 20px;
      border-radius: 10px;
      width: 450px;
      height: 250px;
      /* text-align: center; */
    }
    .box h2{
      text-align: center;
      margin-bottom: 20px;
    }

    input[type="email"], input[type="submit"] {
      /* width: 90%;
      padding: 8px;
      margin: 10px 0;
      border-radius: 4px;
      border: none; */

      width: 95%;
      padding: 8px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      height:25px;
    }

    input[type="submit"] {
     

      width: 99%;
      padding: 8px;
      background-color: blue;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top:10px;
      height:30px;
    }

    a {
      color: #3498db;
      font-size: 17px;
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
    <p style="font-size: 17px;">Enter your email</p>
    <input type="email" name="email" placeholder="Email" required>
    <input type="submit" value="Reset Password">
    <a href="index.php">Back to Login</a>
  </form>

</body>
</html>