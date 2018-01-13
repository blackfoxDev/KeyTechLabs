<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php


$q = intval($_GET['q']);

$con = mysql_connect("localhost:3306","rocklee45","N@ruto45","storycode");

if (!$con) {
    die('Could not connect: ' . mysql_error($con));
}
mysql_select_db("storycode", $con);
	echo '

<title>Project '.$q.'  Code List</title>


';


while($row = mysql_fetch_array($result))
  {
  

  }

mysql_close($con);
?> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<style>
.nav>li>a {
    padding-top: 4px;
    padding-bottom: 30px;
     padding-right: 1px;
     padding-left: 1px;
}

</style> 
<script>
$(document).ready(function(){

$('[rel=tooltip]').bind('mouseover', function(){
	  
		
	
 if ($(this).hasClass('ajax')) {
	var ajax = $(this).attr('ajax');	
			
  $.get(ajax,
  function(theMessage){
$('<div class="tooltip">'  + theMessage + '</div>').appendTo('body').fadeIn('fast');});

 
 }else{
			
	    var theMessage = $(this).attr('content');
	    $('<div class="tooltip">' + theMessage + '</div>').appendTo('body').fadeIn('fast');
		}
		
		$(this).bind('mousemove', function(e){
			$('div.tooltip').css({
				'top': e.pageY - ($('div.tooltip').height() / 2) - 5,
				'left': e.pageX + 15
			});
		});
	}).bind('mouseout', function(){
		$('div.tooltip').fadeOut('fast', function(){
			$(this).remove();
		});
	});
						   });

</script>

<style>
* {
    margin: 0;
    padding: 0;
}
 .panel {
    margin: 0 !important; 
    padding:0 !important;
}
.panel-group  {
    margin: 0 !important; 
    padding:0 !important;
}
.li {
    margin: 0 !important; 
    padding: 0 !important;
}
html {
    
}
li { margin-top: 0px !important; margin-bottom: -20px !important; }
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
	echo '
<!- Row 2 for Projects ->

<h2><b>Project '.$q.'  Code List</b></h2>

<br>';


while($row = mysql_fetch_array($result))
  {
  

  }

mysql_close($con);
?> 
<?php

$q = intval($_GET['q']);

$con = mysql_connect("localhost:3306","rocklee45","N@ruto45","storycode");

if (!$con) {
    die('Could not connect: ' . mysql_error($con));
}
mysql_select_db("storycode", $con);

$result =mysql_query("SELECT code.ProjectID, topics.TopicName, topics.TopicDesc, code.Full_line_of_Code, projects.ProjectName, projects.ProjectDesc   FROM code INNER JOIN topics
ON code.Topicid=topics.Topicid  
inner join projects ON code.ProjectID=projects.Projectid
Where code.ProjectID = '".$q."'");


while($row = mysql_fetch_array($result))
  {
  
echo '<ul class="list-group row">
     <li class="list-group-item col-xs-6">
     				<div class="row">
			      <div class="col-sm-6">
			        <i class="fa fa-3x fa-building-o pull-left"></i>
			        <h4 class="list-group-item-heading"><b>Project Name:</b>&nbsp&nbsp'.$row['ProjectName'].'</h4>
			        <p class="list-group-item-text">&nbsp&nbsp'.$row['Full_line_of_Code'].'</p>
			      </div>
			      <div class="col-sm-6">
			        <p class="list-group-item-text"><b>Topic:</b> '.$row['TopicName'].'</p>
			        <p class="list-group-item-text"><b>Project #:</b>'.$row['ProjectID'].'</p>
			      </div>
			   </div></li>
     
     <li class="list-group-item col-xs-6">
     
     <input type="text"  value="'.$row['Full_line_of_Code'].'"  data-toggle="popover" title="'.$row['ProjectName'].'" class="serviceCabin" data-container="body" data-placement="up"></input>
		<div id="popover-content" class="hide">
		    <div role="tabpanel">
		        <ul class="nav nav-tabs" role="tablist" id="myTab">
		            <li class="active"><a href=".city" data-toggle="tab">Requerments</a>
		
		            </li>
		            <li><a href=".station" data-toggle="tab">Code</a>
		
		            </li>
		            <li><a href=".airport" data-toggle="tab">References</a>
		
		            </li>
		        </ul>
		        <div class="tab-content">
		            <div class="tab-pane city active"> 
		            	<span>
		            	<br>
		           	 <b>Projectid:</b>&nbsp&nbsp'.$row['ProjectID'].'<br>
					<b>Userstory:</b>&nbsp&nbsp'.$row['userstory'].'<br>
					<b>Requirement:</b>&nbsp&nbsp'.$row['requirement'].'<br>
					<b>CodeParts:</b>&nbsp&nbsp'.$row['NumberofCodeParts'].'<br>
					<b>CodeDef:Condition:</b>&nbsp&nbsp'.$row['CodeDef:Condition'].'<br>
					<b>CodeDef:Operation:</b>&nbsp&nbsp'.$row['CodeDef:Operation'].'<br>
					<b>CodeDef:statement:</b>&nbsp&nbsp'.$row['CodeDef:statement'].'<br>
					<hr>
					<b>Main Definition:</b>&nbsp&nbsp'.$row['Definition1'].'<br>
					<b>Definition 2:</b>&nbsp&nbsp'.$row['Definition2'].'<br>
					<b>Definition 3:</b>&nbsp&nbsp'.$row['Definition3'].'<br>
					<hr>
					<b>refrance 1:</b>&nbsp&nbsp<br>
					<b>refrance 2:</b>&nbsp&nbsp'.$row['Def1Link'].'<br>
					<b>refrance 3:</b>&nbsp&nbsp'.$row['Def2Link'].'<br> 
				    </span>
		            
		            </div>
		            <div class="tab-pane station"> 
		            <span>
		            <br>
		   		  <b>Project Brackdown:</b>&nbsp&nbsp'.$row['ProjectDesc'].'<br>
		            </span> 
		            </div>
		            <div class="tab-pane airport"> <span><br>airport 1</span> 
		            </div>
		        </div>
		    </div>
		</div>
   </div>
<br>
     
     </li>
 
</ul>
    
		


';
}

  
mysql_close($con);
?> 

 
<script>
(function () {
    var tabContent = $('#popover-content').html();    // Cache the HTML
    $('.serviceCabin').popover({
        'html': true,
        'content': function () {
            $('#popover-content').remove();           // Remove the element
            return tabContent;                        // Return the cached HTML
        }
    });
})();
</script>
</body>
</html>