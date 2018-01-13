<?Php
///////// Database Details change here  ////
$dbhost_name = "localhost:3306";
$database = "jtabletestdb2";
$username = "rocklee45";
$password = "N@ruto45";
//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost:3306;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage();
die();
}
?>