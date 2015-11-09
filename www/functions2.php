<?php 
//session_start
session_start();

//connect
mysql_connect("localhost","yooz716_yooz716","*Hamilton187") or die("Cannot connect to server");
mysql_select_db("yooz716_bunchofus1") or die("Cannot find database");
/*
$SESSION['id'] = '5';

include 'like.php';
include 'articles.php';
*/
define("APPID","230170050360219");
define("SECRET","3ba998ce421b66303fd5cdfdbe7cfce4");

require 'facebook.php';

$facebook = new Facebook(array(
  'appId'  => APPID,
  'secret' => SECRET,
));

?>