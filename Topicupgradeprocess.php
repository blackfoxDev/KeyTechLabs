<?php
$con = mysql_connect("localhost:3306","rocklee45","N@ruto45");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
            $techid = $_POST['Techid'];
          
$topicdesc = mysql_real_escape_string($_POST['TopicDesc']);  

		

$sql = "UPDATE topics SET TopicDesc = '$topicdesc' WHERE Techid = '$techid'";
mysql_select_db("storycode", $con);
$retval = mysql_query($sql,$con);
              
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  echo "1 Topic record uppyed";
 	
 	
 echo "<a href='http://www.powersbroznetwork.com/jTable-PHP-Samples/Codes/Blackfox.php'>Link</a>";	
mysql_close($con)

?>


