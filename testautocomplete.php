<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
$(function() {
    $( "#skills" ).autocomplete({
        source: 'search.php'
    });
});
</script>

<div class="ui-widget">
    <label for="skills">Skills: </label>
    <input id="skills">
</div>

<?php
    //database configuration
    $dbHost = 'localhost:3306';
    $dbUsername = 'rocklee45';
    $dbPassword = 'N@ruto45';
    $dbName = 'jtabletestdb2';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM Code WHERE code LIKE '%".$searchTerm."%' ORDER BY skill ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['skill'];
    }
    
    //return json data
    echo json_encode($data);
?>