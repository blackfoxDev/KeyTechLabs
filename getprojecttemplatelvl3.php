<head>
 
 
</head>
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

$con = mysql_connect("localhost:3306","rocklee45","N@ruto45","jtabletestdb2");

if (!$con) {
    die('Could not connect: ' . mysql_error($con));
}
mysql_select_db("jtabletestdb2", $con);

$sql="SELECT * FROM Projects WHERE Projectid = '".$q."' AND techid = '2' And Subjectid = '2' AND Level = 'Master' ";
$result = mysql_query($sql, $con);

echo "<table>
<tr>

<th>ProjectName</th>
<th>ProjectDescription</th>
<th>update</th>
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
   
    echo "<td>" . $row['ProjectName'] . "</td>";
    echo "<td>" . $row['ProjectDescription'] . "</td>";
    echo "<td><form action='/jTable-PHP-Samples/Codes/Projectupgradeprocess.php' method='post'>	
    
      <select name='Projectid'>
      <option value='".$q."'>".$q."</option>
       <select>
   <textarea id='edit' name='ProjectDescription' class='text' cols='86' rows ='20'><h1>Project1.Name - (Project1.HtmLTemplate1.Name) Nindo Demo Lvl 1</h1>

<p><b>(Project1.HtmLTemplate1.Description)</b>  Template1 is Made to guide the Users Creation Of His/her own Ninja way...<i>/'To be a ninja is to Endure'/</i>-Naruto45 </p>

<p><b>(Project1.HtmLTemplate1.Level Discription)</b> Level one(begenners) will cover the fundementals throw a Project serving as your first exposere to the Project as a Proof of concept (POC). This Level One POC will be your refrance point to help you gain begenner <b>experince Points</b> buy doing research and adding to the List of <b>Projects</b> below OR Adding to the List of <b>Resources</b> Bellow through <b>Study</b>. Finnaly, your goal is to </b>create your own PoCs</b> to prove your mastery of the Begenner level. Store Your PoC in the Space Bellow.</p>

<p><b>(Project1.HtmLTemplate1.Goal)</b> The level one Goal (begenner) is to get you an understanding of the basic concepts allowing you to learn by building and understand the order of operations. Next you will need to learn the Domians of the tech. Finally you will understand how to connect data between domains to finsh any begenner level project to level up to  someday become a hacker level Blackfoxer.</p>

<ol>
	<li><i>link</i> <b>(Project1.HtmLTemplate1.Project Link1)</b></li>
	<li><i>link</i> <b>(Project1.HtmLTemplate1.Project Link2)</b> </li>
	<li><i>link</i> <b>(Project1.HtmLTemplate1.Project Link3)</b> </li>
</ol>


<p>you will gain more expeirnce points buy studying and take detailed notes on the above project. Then trying to create your own PoCs based of your notes! </p>




<p>THe Key to progress is to take clean notes and capturing Examples, Explaination and study guild orgained AS YOUR OWN STUDYGUIDE. YOu create your resource <b>design</b> obtimizing it for the problems you need to solove in your study. <u>this is the key to success in life</u>. Organize your resource in one zip file include 1 excel workbook, 1 powerpointside, 1 Onenote tab, one word doc readmefile and one PDF onepage studyguide. <b>(here is a link to the templated examples for each)</b>  </p>

<ol>
	<li><i>link</i> <b>(Project1.HtmLTemplate1.PoC Link1)</b></li>
	<li><i>link</i> <b>(Project1.HtmLTemplate1.PoC Link2)</b> </li>
	<li><i>link</i> <b>(Project1.HtmLTemplate1.PoC Link3)</b> </li>
</ol>


<p>you will build a resume with PoC to Prove you know the infomation and have the Skills need work as a developer.</p>
</textarea>
					
<script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
   <script src='http://www.powersbroznetwork.com/jTable-PHP-Samples/Codes/Assets/js/jquery.tinymce.min.js'></script>
<script src='http://www.powersbroznetwork.com/jTable-PHP-Samples/Codes/Assets/js/tinymce.min.js'></script>
    <script src='http://www.powersbroznetwork.com/jTable-PHP-Samples/Codes/Assets/js/index.js'></script>
   
 <script src='/jTable-PHP-Samples/Codes/Assets/content-tools.min.js'></script>
    <script src='/jTable-PHP-Samples/Codes/Assets/editor.js'></script>
  <script>
$(document).on('focusin', function(e) {
    if ($(e.target).closest('.mce-window').length) {
        e.stopImmediatePropagation();
    }
});
  </script>
								 
							
			    			<input type='submit' value='Update Template' class='btn btn-info btn-block'/>
			    		
			    		</form></td>";
 
    echo "</tr>";
}

echo "</table>";
mysql_close($con); 
?>  

	</div>
  
  
</body>

  <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
   <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/jquery.tinymce.min.js"></script>
<script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/tinymce.min.js"></script>
    <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/index.js"></script>
   
 <script src="/jTable-PHP-Samples/Codes/Assets/content-tools.min.js"></script>
    <script src="/jTable-PHP-Samples/Codes/Assets/editor.js"></script>
 