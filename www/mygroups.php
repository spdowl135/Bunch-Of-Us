<h2>My Active Groups</h2>
<?php 
$query2 = mysql_query("SELECT * FROM groups WHERE grpusername='$userdbme' AND grpactive='Yes' AND grpaccept='Yes' ORDER BY grpid DESC");
while($row2 = mysql_fetch_assoc($query2))
{
$grpidact = $row2['grpid'];
$grpurl = $row2['groupurl'];
$grpname = $row2['groupname'];
$grpname = stripslashes($grpname);
$viewmore = "View More";
//echo '<a href="http://www.bunchofus.com/mobile/group/' . $grpidact . '">' . $grpname . '</a><br />';
echo "$grpname<br />";
}
?>
<h2>Active Joined Groups</h2>
<?php 
$query2a = mysql_query("SELECT DISTINCT grpid FROM groups JOIN ingroup WHERE ingroup.inusername = '$userdbme' AND groups.grpactive = 'Yes' AND groups.grpid = ingroup.ingroupid AND groups.grpusername != ingroup.inusername ORDER BY groups.grpid DESC");
while($row2a = mysql_fetch_assoc($query2a))
{
$grpidact2a = $row2a['grpid'];

$query2aa = mysql_query("SELECT * FROM groups WHERE grpid='$grpidact2a' ORDER BY grpid DESC");
while($row2aa = mysql_fetch_assoc($query2aa))
{
$grpurl2aa = $row2aa['groupurl'];
$grpname2aa = $row2aa['groupname'];
$grpname2aa = stripslashes($grpname2aa);
$viewmore = "View More";
//echo '<a href="http://www.bunchofus.com/mobile/group/' . $grpidact2a . '">' . $grpname2aa . '</a><br />';
echo "$grpname2aa<br />";
}}
?>