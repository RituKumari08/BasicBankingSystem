<?php
include "config.php";

if(isset($_POST['submit'])){
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$act= $_POST['act'];
$amount = $_POST['amount'];

$data = "INSERT INTO `banking_table`(`NAME`, `EMAIL`,`ACT_NO`, `CURRENT_BALANCE`) VALUES('$user_name','$email','$act','$amount')";
$result = mysqli_query($con,$data);
if($result){
    header("Location: view.php");
}else{
    header("Location: add.php");
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
  body{
    background: url(./images/abc.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .reg-forms {
    background: url(./images/photo.jpg)!important;
    background-repeat: no-repeat;
    background-size: cover;
}
.register-form-border {
    box-shadow: 2px 2px 10px #ffffff;
    padding: 50px;
}
label{
    color:black;
}
  </style>
</head>
<body>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-12 text-center">
    <a href="index.php" class="btn btn-secondary m-2">Home</a><a href="add.php" class="btn btn-info m-2">Add Customer</a><a href="view.php" class="btn btn-warning m-2">View All Customer</a><a href="send.php" class="btn btn-success m-2">Send Money</a>
    </div>
    <div class="col-md-6 m-auto register-form-border reg-forms">
    <form action="" method="POST">
    <h3 class="text-center text-dark">Add Customer</h3>
    <div class="form-group">
    <label>Enter name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="user_name">
    </div>

    <div class="form-group">
    <label>Enter Email</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
    <label>Enter Account Number</label>
    <input type="number" class="form-control" placeholder="Enter Account No" name="act">
    </div>

    <div class="form-group">
    <label>Enter Amount</label>
    <input type="number" class="form-control" placeholder="Enter Amount" name="amount">
    </div>
    <div class="text-center">
    <input type="submit" value="Add Customer" name="submit" class="btn btn-primary">
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>