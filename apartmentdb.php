<?php
require_once("connection.php");

$sql="SELECT  apartment_type, apartment_floor, apartment_room_number,apartment_price FROM tbl_apartment";

$result=$conn->query($sql);

if(isset($_GET["edit"]))
{
	$id=$_GET["edit"];
	$sql="SELECT * FROM tbl_apartment WHERE apartment_id=$id";
}

?>