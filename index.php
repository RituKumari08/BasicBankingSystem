<?php
include "config.php";


$data = "SELECT * FROM `banking_table`";
$result = mysqli_query($con,$data);

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    /* background: url(./images/b2.jpg);
    background-repeat: no-repeat;
    background-size: cover; */
  }

.carousel-inner img {
    width: 100%;
    height: 100%;
  }

  .box{
    box-shadow: 5px 2px 8px 5px #330000;
    padding: 10px;
    text-align: center;
    background:#FFFFCC;
    color:#000066;
  }
  </style>

</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/p1.png" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption text-left">
        <!-- <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p> -->
        <!-- <a href="" class="btn btn-danger">Learn More</a> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/online-banking.jpg" alt="Chicago" width="1100" height="300">
      <div class="carousel-caption text-left">
      <!-- <a href="" class="btn btn-danger">Learn More</a> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/bank-system-tile.png" alt="New York" width="1100" height="300">
      <div class="carousel-caption text-left">
      <!-- <a href="" class="btn btn-danger">Learn More</a> -->
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container">
<h1 class="text-center text-info">Our Services </h1>
<br />
<div class="row">
<div class="col-md-4">
<div class="box">
<img src="./images/customer.png" style="width:65%;height:65%;" alt="">
<h4 class="text-success">ADD CUSTOMER</h4>
<p>Add new customer to the list with all required details & then you are all set to transact </p>
<a href="add.php" class="btn btn-dark">Add customer</a>
</div>
</div>
<div class="col-md-4">
<div class="box">
<img src="./images/c2.jpg"style="width:50%;height:50%; "alt="">
<h4 class="text-success">TRANSFER MONEY</h4>
<p>We can transfer money between multiple accounts</p>
<a href="send.php" class="btn btn-dark">Transfer Money</a>
</div>
</div>
<div class="col-md-4">
<div class="box">
<img src="./images/c3.jpg"style="width:50%;height:50%; "alt="">
<h4 class="text-success">VIEW CUSTOMERS</h4>
<p>View all customers having accounts in our bank</p>
<a href="view.php" class="btn btn-dark">View Customers</a>
</div>
</div>
</div></div>
<br />
<div >
<h6 class="text-center mt-3 ">Copyright @2021 All Rights Reserved<p style="color:black;">
     with By RITU
     </p>
     </h6>
     </div>
</body>
</html>
