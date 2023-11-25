<?php 
//either hold name in a variable.
//always follow the syntax given
//Or call them directly and add them directly
//To output the users name, take the variable egnewusername and put it in INSERT INTO database table name

$server_name="localhost";
$username="root";
$password="";
$database="realestate2";

$conn=mysqli_connect($server_name,$username,$password,$database);
// Check connection
if (!$conn) { 
  die("Connection failed: " . mysqli_connect_error());
}
else

echo "";
 ?>