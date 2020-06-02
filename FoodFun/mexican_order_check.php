<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
include 'session.php';
$uname= $name =$phone= $email = $address= $date = $time= $suggestions = "";

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
include 'db.php';
$sql = "INSERT INTO customer_order (uname,item, price, name, phone, address, date, time, email, suggestions)
VALUES ('$uname', 'Mexican Eggrolls', '$14.50', '$name', '$phone', '$address', '$date', '$time', '$email','$suggestions')";

if ($conn->query($sql) === TRUE) {
  header("location: view_mexican_order.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!-- <a href="view_mexican_order.php">Your Order</a>  -->
</body>
</html>
