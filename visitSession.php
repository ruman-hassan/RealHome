<?php
#visitCountSession.php
session_start();
if (isset($_SESSION["count"])) {
$_SESSION["count"] += 1;
echo "<b>You have clicked the reload icon {$_SESSION["count"]} times. Thank you for visiting!</b>";
}
else {
$_SESSION["count"] = 1;
echo "You have visited once";
}
?>