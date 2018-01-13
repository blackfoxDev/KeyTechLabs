<?php
$con = mysql_connect("localhost:3306","rocklee45","N@ruto45");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("jtabletestdb2", $con);

$sql="INSERT INTO Code (CodeDefinition, Rubricid, Projectid, SubjectID, techid, topicid, requirement, code, CodeDef, userstory, Rubricid2, Rubricid3, Rubricid4, CodeDef2, CodeDef3, CodeDef4, CodeDef5, CodeDef6, CodeDef7, CodeDef8, CodeDef9, Rubricid5, Rubricid6, Rubricid7, Rubricid8, Rubricid9) VALUES('$_POST[CodeDefinition]', '$_POST[Rubricid]', '$_POST[Projectid]', '$_POST[SubjectID]', '$_POST[techid]','$_POST[topicid]', '$_POST[requirement]', '$_POST[code]', '$_POST[CodeDef]', '$_POST[userstory]', '$_POST[Rubricid2]','$_POST[Rubricid3]','$_POST[Rubricid4]','$_POST[CodeDef2]','$_POST[CodeDef3]','$_POST[CodeDef4]','$_POST[CodeDef5]','$_POST[CodeDef6]','$_POST[CodeDef7]','$_POST[CodeDef8]','$_POST[CodeDef9]','$_POST[Rubricid5]','$_POST[Rubricid6]','$_POST[Rubricid7]','$_POST[Rubricid8]','$_POST[Rubricid9]')";


 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  echo "1 code record added";
  echo "<a href='http://www.powersbroznetwork.com/jTable-PHP-Samples/Codes/AdminPortal.php'>home</a>";
  
  
  
mysql_close($con)

?>

