<?php

require_once("connection.php");
$query="select * from tbl_apartment";
$result=mysqli_query($conn,$query)

?>


<!DOCTYPE html>
<html>
<head>
	<title>Here are our currently unoccupied rooms</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="logo"><img src="logo.png"></div>
<table>
		<caption><u><h2>Apartment details</h2></u></caption>
	<thead>

		<th>Apartment Type</th>
		<th>Apartment Floor</th>
		<th>Apartment Room number</th>
		<th>Apartment Price</th>
		
		<th>Delete</th>
		



	</thead>

		<?php
				while ($row=mysqli_fetch_assoc($result)) {

				
					$apartment_type=$row['apartment_type'];
					$apartment_floor=$row['apartment_floor'];
					$apartment_room_number=$row['apartment_room_number'];
					$apartment_price=$row['apartment_price'];

				
?>
<tr>


		<td><?php echo $apartment_type ?></td>
		<td><?php echo $apartment_floor ?></td>
		<td><?php echo $apartment_room_number ?></td>
		<td><?php echo $apartment_price ?></td>


		<td><a href="del.php?Del=<?php echo $apartment_id?>">Delete</a></td>


</tr>
		<?php }
	
?>

</table>
<br>
</br>
<form method="POST" action="admin2.php">
	<button class="button">Back To Home</button>
</form>
<form method="POST" action="newapartment.php">
	<button >Add vacant room details</button>
</form>
</body>
</html>