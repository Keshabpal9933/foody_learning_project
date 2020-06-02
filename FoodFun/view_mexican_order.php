<!DOCTYPE html>
<html>
<head>
	<title>Your Order</title>
	<link rel="stylesheet" href="design/css/all.min.css">
	<link rel="stylesheet" href="design/css/bootstrap.min.css">
</head>
<body style="background: #a3b6bf;">
<div class="container-fluid">
	<div class="row">
<div class="col-12">
<a href="main.php"><button class="btn btn-primary" style="margin-top: 10px">Go to Home</button></a>
<h2 class="text-center">Your Order Is Given Below</h2>
<table class="table" border="1px" >
	<thead>
  	<tr>
  		<th>Name</th>
  		<th>Phone</th>
  		<th>Address</th>
  		<th>Date to deliver</th>
  		<th>Time</th>
  		<th>Email</th>
		  <th>Any suggestions!!</th>
		  <th>Action</th>
  	</tr>
	  </thead>
	  
  	<?php
    include 'session.php';
    $uname = $_SESSION['uname'];
 	include 'db.php';
 	$sql = "SELECT * FROM customer_order where uname = '$uname'";
	$result = $conn->query($sql);
	if (@$result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		?>

<!--	echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["email"]."</td><td>".$row["suggestions"]."</td></tr>";  -->
		<tbody>

			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['phone'] ?></td>
				<td><?php echo $row['address'] ?></td>
				<td><?php echo $row['date'] ?></td>
				<td><?php echo $row['time'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['suggestions'] ?></td>
				<td>
				   <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" style="border-radius: 10%">Del</a>
				   <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-success" style="border-radius: 10%">Edit</a>
				</td>
			</tr>
		</tbody>

	<?php
        }
      }
	$conn->close();
	?>
	  </table> 
		</div>
	</div>
</div>
</body>
</html>