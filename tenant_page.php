<!DOCTYPE html>
<html>
	<title>Tenant Page</title>
	<link rel="stylesheet" type="text/css" href="mystyles.css">
	<body>

		<div class="logo">
			
<img src="./uploadimages/logo.jpg" alt="Logo" width="450" height="450">
		</div>

		<div>
			<a href="homepage.php"><img src="https://cdn-icons-png.flaticon.com/128/1946/1946488.png" height="30" width="30"></a></br>
			<a href="user2.php"><img src="https://cdn-icons-png.flaticon.com/128/6380/6380189.png" height="30" width="30"></a></br>
			
			
		</div>

		<h3>Welcome Tenant</h3>
		
<table>
	<caption><u><h2>Your booked rooms</h2></u></caption>


<thead>
	
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
		
		<td><?php echo $value["apartment_type"] ?></td>
		<td><?php echo $value["room_number"] ?></td>
		<td><?php echo $value["booking_date"] ?></td>



		

</tr>
		<?php }
	
?>

</tbody>

</table>

		<h3>Apartment Approved</h3>
		<table>
			<tr>
				<th>Apartment Type</th>
				<th>Apartment Room Number </th>
				<th>Payment</th>
				
				
			</tr>
			<tr>
				<td><?php echo $value["apartment_type"] ?></td>
		<td><?php echo $value["room_number"] ?></td>
		<td><button><a href="payment.php">Make payment</a></button></td>
				
			</tr>
		</table>

			
			 	
		<footer>
      



<li class="list1">
		<ul><u>Contact Info</u></ul>
		<ul>Real Homes,Pioneer House,</ul>
		<ul>Kimathi Street, Shop 14</ul>
		<ul>P.O. Box 71085</ul>
		<ul>Tel. No.: +254712345678</ul>
		<ul>realhomes@gmail.com</ul>
	</li>
<p><img src="https://cdn-icons-png.flaticon.com/128/1294/1294391.png" height="10" width="10">Real Homes,2022</p>
	
</footer>
			 	
			 </div>   
	</body>
</html>