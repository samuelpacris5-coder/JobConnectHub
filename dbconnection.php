<?php
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password ="";
$mysql_database ="naukri2jobs";

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
mysqli_select_db($mysql_database, $bd) or die("opps! database not connected");

?>
