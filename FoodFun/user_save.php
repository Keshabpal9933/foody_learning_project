<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
 $uname= $password = "";

include 'db.php';
// Escape user inputs for security
$uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

$sql = "INSERT INTO user (uname, password)
VALUES ('$uname', '$password')";

if ($conn->query($sql) === TRUE) {

  header("location:index.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>