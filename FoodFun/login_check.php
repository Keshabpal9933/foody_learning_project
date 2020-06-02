<?php
include 'db.php';// Inialize session
session_start();
if(!empty($_POST['submit']))
{
	$uname = $_POST['uname'];
	$password = $_POST['password'];

$qz = "SELECT * FROM user where uname='$uname' and password='$password'" ; 
$result = mysqli_query($conn,$qz);
$row = mysqli_num_rows($result);
if($row>0)
  {// Set username session variable
$_SESSION['uname'] = $_POST['uname'];
$_SESSION['id']=$_POST['id'];
  header("location:main.php");
  }
  else
  {
  	echo "username and password didn't match!";
  	header("location:index.php");
  }
mysqli_close($conn);
}
?>