<?php
if (!$sessionuser)
{

}
else {
$queryme = mysql_query("SELECT * FROM users WHERE username='$sessionuser' ORDER BY id DESC LIMIT 0,1");
while ($rowme = mysql_fetch_assoc($queryme))
{
$firstnameme = $rowme['firstname'];
$lastnameme = $rowme['lastname'];
$loginme = $rowme['login'];
$userdbme = $rowme['username'];
$passwordme = $rowme['password'];
$profiledbme = $rowme['profile'];
$photodbme = $rowme['photo'];
$emaildbme = $rowme['email'];
$grpnotifyme = $rowme['grpnotify'];
$friendnotifyme = $rowme['friendnotify'];
$fanallowme= $rowme['fanallow'];
$sendemailme = $rowme['sendemail'];
$idme = $rowme['id'];

//------name email setting time------
if ($sendemailme==0)
{
$formtimeme="Never E-Mail";
}
else {
if ($sendemailme==30)
{
$formtimeme="30 Minutes Apart";
}
else {
if ($sendemailme==60)
{
$formtimeme="60 Minutes Apart";
}
else {
if ($sendemailme==240)
{
$formtimeme="4 Hours Apart";
}
else {
if ($sendemailme==720)
{
$formtimeme = "12 Hours Apart";
}
else {
if ($sendemailme==1440)
{
$formtimeme = "24 Hours Apart";
}
else {
if ($sendemailme==10080)
{
$formtimeme = "7 Days Apart";
}
}
}
}
}
}
}
}
}
//------name email setting time end--
$querytwit = mysql_query("SELECT * FROM twitter WHERE twitbouid='$idme' ORDER BY twitid DESC LIMIT 0,1");
$numusertwit = mysql_num_rows($querytwit);
while ($rowtwit = mysql_fetch_assoc($querytwit))
{
$twitteridme = $rowtwit['twitterid'];
$twittersnme = $rowtwit['twittersn'];
$twitbouid = $rowtwit['twitbouid'];
$twitverifierme = $rowtwit['oauth_verifier'];
$twittokenme = $rowtwit['oauth_token'];
$twitsecretme = $rowtwit['oauth_token_secret'];	
}
?>
<?php
$querynumgrp = mysql_query("SELECT * FROM groups WHERE grpusername='$userdbme' AND grpactive='Yes' ORDER BY grpid DESC LIMIT 0,100");
$numusergrps = mysql_num_rows($querynumgrp);
?>