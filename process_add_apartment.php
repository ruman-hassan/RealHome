<?php
require("connection.php");

$apartment_type=$_POST['apartment_type'];
$apartment_price=$_POST['apartment_price'];
$apartment_floor=$_POST['apartment_floor'];
$apartment_room_number=$_POST['apartment_room_number'];

$sql="INSERT INTO tbl_apartment(apartment_type,apartment_price, apartment_floor,apartment_room_number) VALUES('$apartment_type','$apartment_price','$apartment_floor','$apartment_room_number')";



if(mysqli_query($conn,$sql)){
	echo "Apartment has been created successfully";
	header("location:review_apartments.php");

}
else
	echo "Error".mysqli_error($conn);


?>