<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysql_connect("localhost:3306","rocklee45","N@ruto45","storycode");

if (!$con) {
    die('Could not connect: ' . mysql_error($con));
}
mysql_select_db("storycode", $con);

$sql="SELECT * FROM tech WHERE Techid = '".$q."'";
$result = mysql_query($sql, $con);

echo "<table>
<tr>
<th>TechName</th>
<th>TechDesc</th>
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['TechName'] . "</td>";
    echo "<td>" . $row['TechDesc'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
  <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
   <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/jquery.tinymce.min.js"></script>
<script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/tinymce.min.js"></script>
    <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/index.js"></script>
   
 <script src="/jTable-PHP-Samples/Codes/Assets/content-tools.min.js"></script>
    <script src="/jTable-PHP-Samples/Codes/Assets/editor.js"></script>