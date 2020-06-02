<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
  <script>
function validateForm() {
  var y = document.forms["myForm"]["password"].value;
  var z = document.forms["myForm"]["cpassword"].value;
  if (y != z) {
    alert("Password and Confirm Password didn't match");
    return false;
  }
}
</script>
</head>
<body>
  <h5>Customer Registration form</h5>
  <form name="myForm" action="user_save.php" onsubmit="return validateForm()" method="post" >
    Username:<input type="text" name="uname" required><br><br>
    Password:<input type="password" name="password"  required><br><br>
    Confirm Password: <input type="password" name="cpassword" vrequired><br><br>
   <input type="submit" value="Register">
    <input type="reset" name="reset" value="reset">
  </form>
</body>
</html>