<?php


$con = mysql_connect("localhost:3306","rocklee45","N@ruto45","jtabletestdb2");

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysql_select_db("jtabletestdb2", $con);

$sql="SELECT * FROM Tech WHERE techid = '".$q."'";

// get data and store in a json array
$query = "SELECT * FROM Tech";
$from = 0;
$to = 30;
$query .= " LIMIT ".$from.",".$to;
 
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $Tech[] = array(
        'TechName' => $row['TechName'],
        'Description' => $row['Description']
   
      );
}
 
echo json_encode($Tech);
?>
