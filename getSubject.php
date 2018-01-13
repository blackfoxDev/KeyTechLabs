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
    die('Could not connect: ' . mysqli_error($con));
}
mysql_select_db("storycode", $con);

$sql="SELECT * FROM subject WHERE Subjectid = '".$q."'";
$result = mysql_query($sql, $con);

echo "<table>
<tr>
<th>Techid</th>
<th>SubjectName</th>
<th>TechDesc</th>
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Techid'] . "</td>";
    echo "<td>" . $row['SubjectName'] . "</td>";
    echo "<td>" . $row['SubjectDesc'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
