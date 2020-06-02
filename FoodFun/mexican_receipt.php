<!DOCTYPE HTML>  
<html>
<head><title>Order</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

 

<h2 style="text-align: center">Fill the detail</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="#" class="form">  
  <label for="name" class="col-4"></label>
 <input type="text" name="name" value="<?php echo $name;?>" required>
 <br><br>
  
   Phone no: <input type="number" name="phone" value="<?php echo $phone;?>" required>
  <br><br>

  Address: <input type="text" name="address" value="<?php echo $address;?>" required>
 <br><br>

 Date to deliver:<input type="Date" name="date" value="<?php echo $date?>" required>
 <br><br>

  Time : <input type="Time" name="time" value="<?php echo $time?>" required>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>" required>
  <br><br> 

  Any Suggestions??:<input type="text" name="suggestions" value="<?php echo $suggestions;?>" required>  
  <br><br>
 
  <input type="submit" name="submit" value="Order">  
</form>
</body>
</html>
</body>
</html>