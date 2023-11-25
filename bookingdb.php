<?php
require_once("connection.php");

$sql="SELECT user_id, apartment_type,room_number,booking_date FROM tbl_booking";

$result=$conn->query($sql);

if(isset($_GET["edit"]))
{
	$id=$_GET["edit"];
	$sql="SELECT * FROM tbl_ WHERE booking_id=$id";
}

?>