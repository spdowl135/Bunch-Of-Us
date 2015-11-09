<?php
include 'functions2.php';
?>
<?php 
if(isset($_COOKIE['yoozerx']))
{
$sessionuser = $_COOKIE['yoozerx'];
}
else
{
if(isset($_SESSION['yoozerx']))
{
$sessionuser = $_SESSION['yoozerx'];
}
}
?>
<?php 
$username = $_POST['username'];
$submit = $_POST['register-submit'];
$bot = $_POST['fake1'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['emailadd'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeat'];
$date1 = date("Y-m-d");
$lowername = strtolower($username);

if ($submit)
{
if ($bot!='')
{
die();
}
else
{
if ($username==''||$firstname==''||$lastname==''||$email==''||$password=='')
{
die("Required Fields Not Filled In!");
}
else
{
if ( preg_match("/[^-a-z0-9_]/i", $username) )
{
die ("Illegal Characters in Username");
}
else
{
if (strlen($username)<2||strlen($username)>20)
{
die("Username must be at least 2 characters and no more than 20 characters");
}
else 
{
//-------check if username exists begin-------
$query1 = mysql_query("SELECT * FROM users WHERE username='$username'");
$numrows1 = mysql_num_rows($query1);
if ($numrows1!=0)
{
die("Username Already Exists!");
}
else
{
//-------check if username exists end---------
//-------check if email exists begin----------
$query2 = mysql_query("SELECT * FROM users WHERE email='$email'");
$numrows2 = mysql_num_rows($query2);
if ($numrows2!=0)
{
die("E-Mail Address Already Exists!");
}
else
{
//-------check if email exists end------------
//-------check if passwords match begin-------
if ($password!=$repeatpassword)
{
die ("Passwords Do Not Match!");
}
else
{
$newpassword = md5($password);
//-------check if passwords match end---------

//insert image into database
$insert1 = mysql_query("INSERT INTO users VALUES('','$username','$firstname','$lastname','$newpassword','$email','$date1','No','','','$lowername','','','Yes','Yes','All Users')");
//insert image into database
$insert2 = mysql_query("INSERT INTO searchuser VALUES('','','','$username','$firstname','$lastname','','')");
echo ("You have registered!");
//set SMTP
ini_set("SMTP", "smtp.bunchofus.com");

//setup variables
$to = "$email";
$subject = "Registration - Bunch of us";
$headers = "Registration - Bunchof Us";
$body = "Congratulations $firstname $lastname !
\nYour username is : $username
\nGo to http://www.bunchofus.com";

//mail($to, $subject, $body, $headers);
//$_SESSION['yoozerx']=$username;
//header ("Location: index.php");
//exit();
}
}
}
}
}
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23661465-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
	</head>
	<body>

	</body>
</html>