<!DOCTYPE html>
<html>
<head>
	<title>Add New Apartment</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<div class="logo"><img src="./uploadimages/realhomes.png" alt="Logo" width="200" height="200"></div>
	<div class="centre-form">
<form action="process_add_apartment.php" method="POST" class="container" enctype="multipart/form-data">
<h3>Add New Apartment Details</h3>

		<label for="apartment_type">Apartment Type: </label>
        <input type="text" placeholder="Based on the number of rooms available" id="apartment_type" name="apartment_type" required><br>


        <label for="apartment_floor">Apartment Floor: </label>
        <input type="text" placeholder="Apartment floor number" id="apartment_floor" name="apartment_floor" required><br>

		<div>
		<label for="apartment_room_number">Apartment Room Number: </label>
        <input type="text" placeholder="Apartment Number" id="apartment_room_number" name="apartment_room_number" required><br></div>

		<div>
		<label for="apartment_price">Apartment Price: </label>
        <input type="text" placeholder="The price of apartment" id="apartment_price" name="apartment_price" required><br></div>



<button type="submit" class="button">Add Apartment</button>
</form>
</div>

</body>
</html>