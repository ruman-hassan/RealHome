<!DOCTYPE html>
<html>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
    <div class="container">

		<div class="navbar">
<img src="logo.png">
		<div class="menu">
			<span> <img class="manImg" src=""></img></span>
			<div class="menu-bar">
			<a href="#"><img src="https://cdn-icons-png.flaticon.com/128/1946/1946488.png" height="30" width="30"></a></br>
			<a href="#"><img src="https://cdn-icons-png.flaticon.com/128/615/615075.png" height="30" width="30"></a></br>
			<a href="#"><img src="https://cdn-icons-png.flaticon.com/128/159/159832.png" height="30" width="30"></a></br>
			<a href="#"><img src="https://cdn-icons-png.flaticon.com/512/333/333451.png" height="30" width="30"></a></br>
		</div>
		</div>
		</div>
		<div class ="formone">

		<h3>Welcome *Admin Name*</h3>
		<h3>Currently occupied rooms</h3>
		</div>



<table>
	<caption><u><h2>Currently Registered Users</h2></u></caption>


<thead>

		<th>National ID</th>
		<th>First Names </th>
		<th>Last Names</th>
		<th>User's email</th>
		<th>Individual's date of birth</th>

	</thead>	

<tbody>
		<?php
		require_once("usersdb.php");
		foreach ($result as $key => $value) {
		?>

<tr>
		<td><?php echo $value["user_id"] ?></td>
		<td><?php echo $value["first_name"] ?></td>
		<td><?php echo $value["last_name"] ?></td>
		<td><?php echo $value["user_email"] ?></td>
		<td><?php echo $value["DOB"] ?></td>

</tr>
		<?php }
	
?>

</tbody>

</table>

<table>
	<caption><u><h2>Rooms Currently Booked</h2></u></caption>


<thead>
		<th>National ID</th>
		<th>Apartment Type</th>
		<th>Apartment Room Number </th>
		<th>Booked Date</th>
		

	</thead>	

<tbody>
		<?php
		require_once("bookingdb.php");
		foreach ($result as $key => $value) {
		?>

<tr>
	
		<td><?php echo $value["user_id"] ?></td>
		<td><?php echo $value["apartment_type"] ?></td>
		<td><?php echo $value["room_number"] ?></td>
		<td><?php echo $value["booking_date"] ?></td>


		

</tr>
		<?php }
	
?>

</tbody>

</table>
			 <div>
			 	
			 	<p><b>Add New Tenant</b></p>
			 	<button><a href="registration.php"><img src="https://cdn-icons-png.flaticon.com/128/748/748137.png" height="40" width="40"></a></button>
			 	</br>

			 	<p><b>Add apartment</b></p>
			 	<button><a href="newapartment.php">Add Apartment</a></button>
			 	<br>
			 	<p><b>Review apartments</b></p>
			 	<button><a href="review_apartments.php">Review Apartment</a></button>


			 	
			 </div> 
</div>			 
	</body>
</html>