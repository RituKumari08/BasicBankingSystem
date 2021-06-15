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
  <style>
  body{
    background: url(./images/coins.png);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .reg-forms {
    background: url(./images/sending.png)!important;
    background-repeat: no-repeat;
    background-size: cover;
}
.register-form-border {
    box-shadow: 2px 2px 10px #ffffff;
    padding: 50px;
}
label{
    color:#fff;
}
tr:nth-child(even) {
  background-color:  #FFF2F2!important;
}

tr:nth-child(odd) {
  background-color: #FF6699!important;
}

thead tr{
  background-color: red!important;
}

.table-dark td, .table-dark th, .table-dark thead th {
    border-color: #ffffff!important;
}
  </style>

</head>
<body>

<div class="container mt-4">
         <div class="row">
         <div class="col-md-12 text-center">
         <a href="index.php" class="btn btn-secondary m-2">Home</a><a href="add.php" class="btn btn-info m-2">Add Customer</a><a href="index.php" class="btn btn-warning m-2">View All Customer</a><a href="send.php" class="btn btn-success m-2">Send Money</a>
    </div>
         <div class="col-md-12 register-form-border reg-forms">
         <h3 class="text-center text-light">View All Customer</h3>        
         <table class="table table-light table-striped  text-center">
    <thead>
      <tr style="background: #94e0ff!important;">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Account No</th>
        <th>Current Balance</th>

      </tr>
    </thead>
    <tbody>
    <?php 
      $c = 1;
    while($row = mysqli_fetch_assoc($result)){ ?>
      <tr>
      <!--<td><?php //echo $row['ID'] ?></td>-->
        <td><?php echo $c ?></td>
        
        <td><?php echo $row['NAME'] ?></td>
        
        <td><?php echo $row['EMAIL'] ?></td>
        <td><?php echo $row['ACT_NO'] ?></td>
        <td><?php echo $row['CURRENT_BALANCE'] ?></td>
      </tr>
      <?php $c++; }?>
          </tbody>
  </table>
</div>
</div>
         </div>

</body>
</html>
