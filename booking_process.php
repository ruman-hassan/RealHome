<?php

require("connection.php");

$user_id=$_POST['user_id'];
$room_number=$_POST['room_number'];
$apartment_type=$_POST['apartment_type'];




$sql="INSERT INTO tbl_booking(user_id,room_number,apartment_type)
VALUES('$user_id','$room_number','$apartment_type')";

if(mysqli_query($conn,$sql)){
	echo "User registered successfully";
	header("location:user.php");
}
else
	echo "Error".mysqli_error($conn);


?>