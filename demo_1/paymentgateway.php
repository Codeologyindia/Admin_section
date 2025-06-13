<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
   <?php include('sidebar.php');?>
    <!-- <div class="main-content">
   
<form action="Demo.php" method="get">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-6 col-sm-6">
                   <label for="paymentId" class="form-label">Payment Key</label>
                   <input type="email" class="form-control" id="paymentId" name="paymentId" required>
            </div>
            <div class="col-md-6 col-sm-6">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

</form>

</div> -->

<?php
$payments = [
  ['id' => 1, 'payment_key' => 'Harsh1234'],
  ['id' => 2, 'payment_key' => 'Angel1234']
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment Gateway Admin</title>
  <style>
    * { box-sizing: border-box; }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      /* margin: 40px auto; */
      margin-top:20px;
      margin-left: 270px;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .back-btn {
      display: inline-block;
      margin-bottom: 20px;
      background-color: #6c757d;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-size: 14px;
    }

    form label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    form input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form input[type="submit"] {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .btn {
      padding: 6px 12px;
      margin: 2px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .btn.view { background-color: #17a2b8; color: white; }
    .btn.edit { background-color: #ffc107; color: black; }
    .btn.delete { background-color: #dc3545; color: white; }
    .btn.insert {
      float: right;
      margin-top: 10px;
      background-color: #20c997;
      color: white;
    }

    .clearfix::after {
      content: "";
      display: table;
      clear: both;
    }
  </style>
</head>
<body>
  <div class="container">

    <h2>Payment Gateway Settings</h2>

    <form method="post" action="#">
      <label for="id">Payment ID:</label>
      <input type="text" name="id" placeholder="Enter Payment ID" required>

      <label for="payment_key">Payment Key:</label>
      <input type="text" name="payment_key" placeholder="Enter Payment Key" required>

      <input type="submit" value="Save">
    </form>

    <div class="clearfix">
      <button class="btn insert">+ Insert New</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Payment Key</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($payments as $payment): ?>
          <tr>
            <td><?= htmlspecialchars($payment['id']) ?></td>
            <td><?= htmlspecialchars($payment['payment_key']) ?></td>
            <td>
              <button class="btn view">View</button>
              <button class="btn edit">Edit</button>
              <button class="btn delete">Delete</button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>