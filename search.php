<?php
    $key=$_GET['term'];
    $data = array();
    $con=mysql_connect("localhost:3306","rocklee45","N@ruto45","jtabletestdb2");
    $db=mysql_select_db("jtabletestdb2",$con);
    $query=mysql_query("select * from Code where code LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $data[] = $row['skill'];
    }
    echo json_encode($array);
?>