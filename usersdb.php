<?php
require_once("connection.php");

$sql="SELECT user_id, first_name,last_name,user_email,DOB FROM tbl_useraccount";

$result=$conn->query($sql);

if(isset($_GET["edit"]))
{
	$id=$_GET["edit"];
	$sql="SELECT * FROM tbl_users WHERE user_id=$id";
}

?>