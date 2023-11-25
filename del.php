<?php
//create connection
require_once("connection.php");


if(isset($_GET['Del']))
{
	$apartment_id=$_GET['Del'];
	$query="delete from tbl_apartment where apartment_id='".$apartment_id."'  ";
	$result=mysqli_query($conn,$query);


	if($result)
	{
		header("location:review_apartments.php");
	}

	else
	{
		echo 'Please Check the query';
	}


}

else
{
	header("location:review_apartments.php");
}

?>