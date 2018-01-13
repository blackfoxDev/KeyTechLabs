<?php
$con = mysql_connect("localhost:3306","rocklee45","N@ruto45");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("jtabletestdb2", $con);

$sql="INSERT INTO topic (subjectid, topicname, topicdesc, techid, level) VALUES('$_POST[subjectid]','$_POST[topicname]','$_POST[topicdesc]','$_POST[techid]','$_POST[level]')";
 
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  echo "1 Topic record added";
  echo "<a href='http://www.powersbroznetwork.com/jTable-PHP-Samples/Codes/AdminPortal.php'>home</a>";
mysql_close($con)

?>

