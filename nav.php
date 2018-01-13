<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
/*<!-- Include Editor style. -->*/
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/at.js/1.4.0/css/jquery.atwho.min.css">
    <link href="/jTable-PHP-Samples/Codes/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/jTable-PHP-Samples/Codes/scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="/jTable-PHP-Samples/Codes/scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
 
	<style type="text/css">
	
 /*<!-- This is how you would link your custom stylesheet -->*/
 
 
  <script src="/jTable-PHP-Samples/Codes/Assets/js/vendor/modernizr.js"></script>
 <link href="https://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
    

<style>
body{
  /* Safari 4-5, Chrome 1-9 */
    background: -webkit-gradient(radial, center center, 0, center center, 460, from(#1a82f7), to(#2F2727));

  /* Safari 5.1+, Chrome 10+ */
    background: -webkit-radial-gradient(circle, #1a82f7, #2F2727);

  /* Firefox 3.6+ */
    background: -moz-radial-gradient(circle, #1a82f7, #2F2727);

  /* IE 10 */
    background: -ms-radial-gradient(circle, #1a82f7, #2F2727);
    height:600px;
}
<style type="text/css">
	/* Large desktop */
@media (min-width: 1200px) { ... }
 
/* Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 1300px) { 
 body {
 background-image: url('/jTable-PHP-Samples/Codes/Assets/images/BlackFoxthumb.fw.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  
  font-family: Arial;
  font-size: medium;
}
}
 
/* Landscape phone to portrait tablet */
@media (max-width: 767px) { ... }
 
/* Landscape phones and down */
@media (max-width: 480px) { ... }
	
	
	
}
body {
	background: url(/jTable-PHP-Samples/Codes/Assets/images/BlackFoxthumb.fw.png) no-repeat center center fixed;
}

@media only screen and (min-width : 768px) and (max-width : 1250px) {
	background: url(/jTable-PHP-Samples/Codes/Assets/images/BlackFoxthumb.fw.png) no-repeat center center fixed;
}

.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

label.label-floatlabel {
    font-weight: bold;
    color: #46b8da;
    font-size: 11px;
}
</style>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top .col-xs-6 .col-md-4">
      <div class="container-fluid .col-xs-6 .col-md-4">
        <div class="navbar-header .col-xs-6 .col-md-4">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
    <img src="Assets/BlackFoxthumb (2).fw.png" width="30" height="30" alt="">
  </a>
          <a class="navbar-brand" href="/jTable-PHP-Samples/Codes/Blackfox.php#">BlackFox Studio Labs</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	
        	
        <ul class="nav navbar-nav navbar-right">
        
         	<li class="Tools">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Tools <span class="caret"></span></a>
                <ul class="dropdown-menu">
                	<li role="separator" class="divider">Media Channels</li>
                	<li class="dropdown-header">Media Channels</li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal">BlackFox Channel</li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Tech Course</li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal3">C(sharp) Course</li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal3">PHP Course</li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal3">Node.js Course</li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal3">Java Course</li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Study</li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal2">Music Player!</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal4">Text Editor</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal5">Video Chat</a></li>
                </ul>
              </li>
            <li><a href="/jTable-PHP-Samples/Codes/AdminPortal.php">Admin Portal</a></li>
            <li><a href="#">Admin Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <center><form class="navbar-form" role="search">
        		<div class="input-group">
        		<input type="text" size="30" onkeyup="showResult(this.value)"><div class="input-group-btn">
                		<span class="input-group-btn">
                		<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
           	
             </span>
           	 </div>
		
            
        </div>
        
        </form></center>
          </div>
      </div>
    <div id="livesearch"></div>
    

          
    </nav>
   
  <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
   <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/jquery.tinymce.min.js"></script>
<script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/tinymce.min.js"></script>
    <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/index.js"></script>
   
 <script src="/jTable-PHP-Samples/Codes/Assets/content-tools.min.js"></script>
    <script src="/jTable-PHP-Samples/Codes/Assets/editor.js"></script>
 