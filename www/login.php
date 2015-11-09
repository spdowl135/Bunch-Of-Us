<?php
include 'functions2.php';
?>
<?php
if(isset($_COOKIE['yoozerx']))
{
$sessionuser = $_COOKIE['yoozerx'];
header ("Location: http://www.bunchofus.com/home");
exit();
}
else
{
if(isset($_SESSION['yoozerx']))
{
$sessionuser = $_SESSION['yoozerx'];
header ("Location: http://www.bunchofus.com/home");
exit();
}
}
$username = $_POST['username'];
$password = $_POST['password'];
$rememberme = $_POST['rememberme'];
$lowername = strtolower($username);
if ($username&&$password)
{

$query = mysql_query("SELECT * FROM users WHERE login='$lowername'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)

{

//code to login
while ($row = mysql_fetch_assoc($query))

{
	
$userdb = $row['username'];
$dbusername = $row['login'];
$dbpassword = $row['password'];
$dbusername = strtolower($dbusername);
$password = md5($password);
$password = substr($password, 0, 20);
$dbpassword = substr($dbpassword, 0, 20);
}

//check to see if they match
if ($lowername == $dbusername&&$password == $dbpassword)
{
if ($rememberme=="on")
{
setcookie('yoozerx', $userdb, time()+720000);
header ("Location: http://www.bunchofus.com/home");
exit();
}
else
{ 
if ($rememberme=="")
{
$_SESSION['yoozerx']=$userdb;
header ("Location: http://www.bunchofus.com/home");
exit();
}
}
}
else
die ("Incorrect Password");

}
else
die("That user does not exist!");

}		

else
die("Please enter username and password!");
?>

	</body>
</html>