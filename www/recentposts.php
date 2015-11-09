<?php 
//echo "<h2>Recent Activity For $firstnameme $lastnameme</h2>";
//echo "<hr />";
$query2 = mysql_query("SELECT * FROM data WHERE datausername='thestevedowling' ORDER BY dataid DESC LIMIT 0,8");
while ($row2 = mysql_fetch_assoc($query2))
{
$groupname = $row2['datagroupname'];
$groupurl = $row2['datagroupurl'];
$grpid = $row2['datagrpid'];
$caption = $row2['datacaption'];
$chat = $row2['datachat'];
$photo = $row2['dataphoto'];
$datedb = $row2['datadate'];
$grpstrip = stripslashes($groupname);
echo "<li>$chat</li>";
/*
if ($photo=='')
{
echo "<b>$firstnameme $lastnameme</b>";
echo ' chatted in the group <b><em><a href="http://www.bunchofus.com/mobile/group/' . $grpid . '">' . $grpstrip . '</a></em></b>!!!<hr />';
}
else
{
echo "<b>$firstnameme $lastnameme</b>";
echo ' posted a photo in the group <b><em><a href="http://www.bunchofus.com/mobile/group/' . $grpid . '">' . $grpstrip . '</a></em></b>!!!<hr />';
}
 * 
 */
}
?>