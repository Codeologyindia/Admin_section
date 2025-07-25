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
   

    <div class="main-content">
        <?php include('topbar.php');?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="mt-4 mb-4">Dashboard</h2>
                    <div class="dashboard-description mb-4">
                      <p>
                        Welcome to the Admin Dashboard!
                      </p>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-4 col-12 mb-3 mb-md-0">
                        <div class="info-box">
                          <div class="info-title">Total Students</div>
                          <div class="info-value">5</div>
                        </div>
                      </div>
                      <div class="col-md-4 col-12 mb-3 mb-md-0">
                        <div class="info-box">
                          <div class="info-title">Total Amount Received</div>
                          <div class="info-value">₹ 1,25,000</div>
                        </div>
                      </div>

                      <div class="col-md-4 col-12 mb-3 mb-md-0">
                        <div class="info-box">
                          <div class="info-title">Students with pending status</div>
                          <div class="info-value">1</div>
                        </div>
                      </div>

                      <div class="col-md-4 col-12 mb-3 mb-md-0">
                        <div class="info-box">
                          <div class="info-title">Payment Failures</div>
                          <div class="info-value">1</div>
                        </div>
                      </div>

                      <div class="col-md-4 col-12 mb-3 mb-md-0">
                        <div class="info-box">
                          <div class="info-title">No. of Successful Transactions</div>
                          <div class="info-value">3</div>
                        </div>
                      </div>


                      <div class="col-md-4 col-12">
                        <div class="info-box">
                          <div class="info-title">Payment Completion Rate</div>
                          <div class="info-value">80%</div>
                        </div>
                      </div>
                    </div>
                    <div class="table1">
                        <table class="table1-1">
                            <thead class="table1-1-1">
                                <tr>
                                    <th>S.No</th>
                                    <th>UTR ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile Number</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>UTR001</td>
                                    <td>Angel</td>
                                    <td>Rao</td>
                                    <td>9876543210</td>
                                    <td><span class="badge bg-success">Success</span></td>
                                    <td>2024-06-01</td>
                                    <td>10:15 AM</td>
                                    <td>
                                        <button class="edit1">Edit</button>
                                        <button class="delete1">Delete</button>
                                        <button class="update1">Update</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>UTR002</td>
                                    <td>Chhavi</td>
                                    <td>Sachdeva</td>
                                    <td>9876543211</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>2024-06-01</td>
                                    <td>11:30 AM</td>
                                    <td>
                                        <button class="edit1">Edit</button>
                                        <button class="delete1">Delete</button>
                                        <button class="update1">Update</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>UTR003</td>
                                    <td>Gitanjali</td>
                                    <td>Bhalla</td>
                                    <td>9876543212</td>
                                    <td><span class="badge bg-danger">Failed</span></td>
                                    <td>2024-06-01</td>
                                    <td>12:45 PM</td>
                                    <td>
                                        <button class="edit1">Edit</button>
                                        <button class="delete1">Delete</button>
                                        <button class="update1">Update</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>UTR004</td>
                                    <td>Lashika</td>
                                    <td>Goyal</td>
                                    <td>9876543213</td>
                                    <td><span class="badge bg-success">Success</span></td>
                                    <td>2024-06-01</td>
                                    <td>01:10 PM</td>
                                    <td>
                                        <button class="edit1">Edit</button>
                                        <button class="delete1">Delete</button>
                                        <button class="update1">Update</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>UTR005</td>
                                    <td>Harsh</td>
                                    <td>Dhariwal</td>
                                    <td>9876543214</td>
                                    <td><span class="badge bg-success">Success</span></td>
                                    <td>2024-06-01</td>
                                    <td>02:20 PM</td>
                                    <td>
                                        <button class="edit1">Edit</button>
                                        <button class="delete1">Delete</button>
                                        <button class="update1">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>