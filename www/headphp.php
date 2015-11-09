<?php 
include 'functions2.php';
?>
<?php
if(isset($_COOKIE['yoozerx']))
{
$sessionuser = $_COOKIE['yoozerx'];
header ("Location: myhome.html");
exit();
}
else
{
if(isset($_SESSION['yoozerx']))
{
$sessionuser = $_SESSION['yoozerx'];
header ("Location: myhome.html");
exit();
}
else {
}
}
//echo out construct
$query = "SELECT * FROM users";
$queryuser = mysql_query($query);
$numusers = mysql_num_rows($queryuser) or die(mysql_error());
include 'mequery.php';
include("facebookjs.php");
?>