<?php
$con = mysql_connect("localhost:3306","rocklee45","N@ruto45");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
            $Projectid = $_POST['Projectid'];
          
$ProjectDescription = mysql_real_escape_string($_POST['ProjectDesc']);  

		

$sql = "UPDATE projects SET ProjectDesc = '$ProjectDescription' WHERE Projectid = '$Projectid'";
mysql_select_db("storycode", $con);
$retval = mysql_query($sql,$con);
              
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  echo "1 Project record uppyed";
 	
 	
 echo "<a href='http://www.powersbroznetwork.com/jTable-PHP-Samples/Codes/Blackfox.php'>Link</a>";	
mysql_close($con)

?>


