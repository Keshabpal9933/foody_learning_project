<?php 
 

  $conn =new PDO("mysql:host=localhost;dbname=foodfun;","root","");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    $suggection = $_POST['suggestions'];

    $sql = "UPDATE customer_order SET name = '$name', phone='$phone', address='$address', email='$email',
    date='$date', time='$time', suggestions='$suggection' WHERE id=$id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt){
        header("location:view_mexican_order.php");
    }
  }
?>

<!DOCTYPE HTML>  
<html>
<head><title>Order</title>
<link rel="stylesheet" href="design/css/bootstrap.min.css">
</head>
<body class="background: bg-info" style="height: auto;">  

<div class="container-fluid">
  <div class="row">
    <div class="col-12">

<h2 style="text-align: center">Fill the Detail</h2>
<hr>
<?php

    $conn =new PDO("mysql:host=localhost;dbname=foodfun;","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET['id'];

    $sql = "SELECT *FROM customer_order WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach($data as $key => $value){
        $name = $value->name;
        $phone = $value->phone;
        $address = $value->address;
        $date = $value->date;
        $time = $value->time;
        $email = $value->email;
        $suggestions = $value->suggestions;
    }
?>


<form method="post" action="" class="form">  
  
  <div class="form-group">
    <label for="name" class="col-4"><strong> Name</strong></label>
    <div class="col-8">
    <input type="text" name="name" class="form-control" value="<?php global $name; echo $name;?>" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="name" class="col-4"><strong>Phone</strong></label>
    <div class="col-8">
    <input type="number" name="phone" class="form-control" value="<?php global $phone; echo $phone;?>" required>
    </div>
  </div>
 
  <div class="form-group">
    <label for="name" class="col-4"><strong>Address</strong></label>
    <div class="col-8">
    <input type="text" name="address" class="form-control" value="<?php global $address; echo $address; ?>" required>
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="name" class="col-4"><strong>Date to Deliver</strong></label>
    <div class="col-8">
    <input type="date" name="date" class="form-control" value="<?php global $date; echo $date; ?>" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="name" class="col-4"><strong>Time</strong></label>
    <div class="col-8">
    <input type="time" name="time" class="form-control" value="<?php global $time; echo $time;?>" required>
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-4"><strong>Email</strong></label>
    <div class="col-8">
    <input type="email" name="email" class="form-control" value="<?php global $email; echo $email;?>" required>
    </div>
  </div>
 
  <div class="form-group">
    <label for="name" class="col-4"><strong>Any Suggestion</strong></label>
    <div class="col-8">
    <textarea name="suggestions" class="form-control" cols="5" rows="5" value="<?php global $suggestions; echo $suggestions;?>" required> </textarea>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
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