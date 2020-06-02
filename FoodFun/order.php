<!DOCTYPE HTML>  
<html>
<head><title>Order</title>
<link rel="stylesheet" href="design/css/bootstrap.min.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body class="background: bg-info" style="height: auto;">  

<?php
include 'session.php';
$name =$phone= $email = $address= $date = $time= $suggestions = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $address = test_input($_POST["address"]);
    $suggestions = test_input($_POST["suggestions"]);
    $phone = test_input($_POST["phone"]);
    $date = test_input($_POST["date"]);
    $time = test_input($_POST["time"]);
    $uname = test_input($_SESSION['uname']);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 
<div class="container-fluid">
  <div class="row">
    <div class="col-12">

<h2 style="text-align: center">Fill the Detail</h2>
<hr>
<p><span class="error">* required field</span></p>
<form method="post" action="mexican_order_check.php" class="form">  
  
  <div class="form-group">
    <label for="name" class="col-4"><strong> Name</strong></label>
    <div class="col-8">
    <input type="text" name="name" class="form-control" value="<?php echo $name;?>" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="name" class="col-4"><strong>Phone</strong></label>
    <div class="col-8">
    <input type="number" name="phone" class="form-control" value="<?php echo $phone;?>" required>
    </div>
  </div>
 
  <div class="form-group">
    <label for="name" class="col-4"><strong>Address</strong></label>
    <div class="col-8">
    <input type="text" name="address" class="form-control" value="<?php echo $address;?>" required>
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="name" class="col-4"><strong>Date to Deliver</strong></label>
    <div class="col-8">
    <input type="date" name="date" class="form-control" value="<?php echo $date;?>" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="name" class="col-4"><strong>Time</strong></label>
    <div class="col-8">
    <input type="time" name="time" class="form-control" value="<?php echo $time;?>" required>
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-4"><strong>Email</strong></label>
    <div class="col-8">
    <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required>
    </div>
  </div>
 
  <div class="form-group">
    <label for="name" class="col-4"><strong>Any Suggestion</strong></label>
    <div class="col-8">
    <textarea name="suggestions" class="form-control" cols="5" rows="5" value="<?php echo $suggestions;?>" required> </textarea>
    </div>
  </div>

  
  <div class="form-group">
    <label for="" class="col-4"></label>
  <input type="submit" name="submit" class="btn btn-success" value="Order">  
  </div>
  </div>

  </div>
  </div>
</form>
</body>
</html>