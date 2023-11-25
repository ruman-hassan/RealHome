<?php
# multipleItemCookie.php
# set a cookie with 4 pieces of data
$strAddress = $_SERVER["REMOTE_ADDR"];
$strBrowser = $_SERVER["HTTP_USER_AGENT"];
$strServerName = $_SERVER["SERVER_NAME"];
$strInfo = "$strAddress::$strBrowser::$strServerName";
setcookie ("cookie4",$strInfo, time()+7200);
?>

<?php
# use explode() to retrieve the 4 pieces of data
$strReadCookie = $_COOKIE["cookie4"];
$arrListOfStrings = explode ("::", $strReadCookie);
echo "<p>$strInfo</p>";;
echo "<p>Your IP address is: $arrListOfStrings[1] </p>";
echo "<p>Client Browser is: $arrListOfStrings[2] </p>";
echo "<p>Server name is: $arrListOfStrings[3] </p>";
?>