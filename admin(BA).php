<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include Editor style. -->
<link href='' rel='stylesheet' type='text/css' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.3.5/css/froala_style.min.css' rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Include JS file. -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.3.5/js/froala_editor.min.js'></script>
      
    <link href="/jTable-PHP-Samples/Codes/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="/jTable-PHP-Samples/Codes/scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/jTable-PHP-Samples/Codes/scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="/jTable-PHP-Samples/Codes/scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="/jTable-PHP-Samples/Codes/scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	<style type="text/css">
	 <link rel="stylesheet" href="/jTable-PHP-Samples/Codes/Assets/css/foundation.css">
<link rel="stylesheet" type="text/css" href="/jTable-PHP-Samples/Codes/Assets/content-tools.min.css">
   
  <!-- This is how you would link your custom stylesheet -->
  <link rel="stylesheet" href="css/app.css">
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 
  <script src="/jTable-PHP-Samples/Codes/Assets/js/vendor/modernizr.js"></script>
 <link href="https://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <!-- Notify CSS -->
    <link href="../css/bootstrap-notify.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="../css/styles/alert-bangtidy.css" rel="stylesheet">
    <link href="../css/styles/alert-blackgloss.css" rel="stylesheet">
</head>
<style type="text/css">
	#mydiv {
    position:fixed;
    top: 50%;
   
    width:30em;
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    border: 1px solid #ccc;
    background-color: #f3f3f3;
}
.chat
{
    list-style: none;
    margin: 0;
    padding: 0;
}

.chat li
{
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
}

.chat li.left .chat-body
{
    margin-left: 60px;
}

.chat li.right .chat-body
{
    margin-right: 60px;
}


.chat li .chat-body p
{
    margin: 0;
    color: #777777;
}

.panel .slidedown .glyphicon, .chat .glyphicon
{
    margin-right: 5px;
}

.panel-body
{
    overflow-y: scroll;
    height: 250px;
}

::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}
code[class*="language-"],
pre[class*="language-"] {
	color: black;
	background: none;
	text-shadow: 0 1px white;
	font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
	text-align: left;
	white-space: pre;
	word-spacing: normal;
	word-break: normal;
	word-wrap: normal;
	line-height: 1.5;

	-moz-tab-size: 4;
	-o-tab-size: 4;
	tab-size: 4;

	-webkit-hyphens: none;
	-moz-hyphens: none;
	-ms-hyphens: none;
	hyphens: none;
}

pre[class*="language-"]::-moz-selection, pre[class*="language-"] ::-moz-selection,
code[class*="language-"]::-moz-selection, code[class*="language-"] ::-moz-selection {
	text-shadow: none;
	background: #b3d4fc;
}

pre[class*="language-"]::selection, pre[class*="language-"] ::selection,
code[class*="language-"]::selection, code[class*="language-"] ::selection {
	text-shadow: none;
	background: #b3d4fc;
}

@media print {
	code[class*="language-"],
	pre[class*="language-"] {
		text-shadow: none;
	}
}

/* Code blocks */
pre[class*="language-"] {
	padding: 1em;
	margin: .5em 0;
	overflow: auto;
}

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
	background: #f5f2f0;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
	padding: .1em;
	border-radius: .3em;
	white-space: normal;
}

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
	color: slategray;
}

.token.punctuation {
	color: #999;
}

.namespace {
	opacity: .7;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
	color: #905;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
	color: #690;
}

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string {
	color: #a67f59;
	background: hsla(0, 0%, 100%, .5);
}

.token.atrule,
.token.attr-value,
.token.keyword {
	color: #07a;
}

.token.function {
	color: #DD4A68;
}

.token.regex,
.token.important,
.token.variable {
	color: #e90;
}

.token.important,
.token.bold {
	font-weight: bold;
}
.token.italic {
	font-style: italic;
}

.token.entity {
	cursor: help;
}



</style>

</script>
  <link href="/jTable-PHP-Samples/Codes/Assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/jTable-PHP-Samples/Codes/Assets/css/prism.css">
<script src="/jTable-PHP-Samples/Codes/Assets/js/prism.js"></script>
   
    <link href="/jTable-PHP-Samples/Codes/Assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="/jTable-PHP-Samples/Codes/Assets/css/dashboard.css" rel="stylesheet">


   <script src="/jTable-PHP-Samples/Codes/Assets/js/ie8-responsive-file-warning.js"></script>
    <script src="/jTable-PHP-Samples/Codes/Assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
    <img src="Assets/BlackFoxthumb.png" width="30" height="30" alt="">
  </a>
          <a class="navbar-brand" href="#">BlackFox Studio Labs</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
         
            <li><a href="#">Admin Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
    
<!--Start of HappyFox Live Chat Script-->
<script>
 window.HFCHAT_CONFIG = {
     EMBED_TOKEN: "93860f30-a9b5-11e6-be47-dfee95801b00",
     ACCESS_TOKEN: "a94ac7875b67438299672363a55a4ed2",
     HOST_URL: "https://happyfoxchat.com",
     ASSETS_URL: "https://d1l7z5ofrj6ab8.cloudfront.net/visitor"
 };

(function() {
  var scriptTag = document.createElement('script');
  scriptTag.type = 'text/javascript';
  scriptTag.async = true;
  scriptTag.src = window.HFCHAT_CONFIG.ASSETS_URL + '/js/widget-loader.js';

  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(scriptTag, s);
})();
</script>
<!--End of HappyFox Live Chat Script--><!--End of HappyFox Live Chat Script-->
 <ul class="nav nav-tabs">
   
    	
    
    
    <li><a data-toggle="tab" href="#home">Project Research and Devlopment</a></li>
    <li><a data-toggle="tab" href="#menu1">HOME app</a></li>
    <li><a data-toggle="tab" href="#menu2">Project Future State Design</a></li>
    <li><a data-toggle="tab" href="#menu3">business analysis app</a></li>
    <li><a data-toggle="tab" href="#menu4">Marketing App</a></li>
        <li><a data-toggle="tab" href="#menu5">Sales App</a></li>
        <li><a data-toggle="tab" href="#menu6">GSU App</a></li>
  </ul>
   
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
  <h3>Project Research and Devlopment</h3>
      <div><iframe src="https://trello.com/b/gOEPuaca.html" frameBorder="0" width="100%" height="600"></iframe>
 	</div>
    </div>
    <div id="menu1" class="tab-pane fade">
   
  	
	       		<OL id="view1"></o1>
	 
   	<div id="PeopleTableContainer" style="width: 1250px;">
   	</div>
   
     </div> 
   
   
   
          <div id="menu2" class="tab-pane fade">
       
      <h3>Project Future State Design</h3>
      <div><iframe src="https://trello.com/b/irhVKLcJ.html" frameBorder="0" width="100%" height="600"></iframe></div>
    </div>
    <div id="menu3" class="tab-pane fade">
      
      <h3>business analysis app</h3>
      <div id="PeopleTableContainer2" style="width: 1250px;"></div>
    </div>
     <div id="menu4" class="tab-pane fade">
       
      <h3>Marketing App</h3>
      <div id="PeopleTableContainer" style="width: 1250px;"></div>
    </div>
     <div id="menu5" class="tab-pane fade">
       
      <h3>Sales App</h3>
       <div><iframe src="https://trello.com/b/INvCJ9H3.html" frameBorder="0" width="100%" height="600"></iframe></div>
    </div>
     <div id="menu6" class="tab-pane fade">
      
      <h3>GSU App</h3>
      <div class="row">
       	<div class="well col-sm-4">
      		<ol id="htmltemplate1"></ol>
    	</div>
       
       	<div class="well col-sm-8">
      		<ol id="htmltemplate2"></ol>
    	</div>
       </div>
    	</div>
      
</div>
//<!-- Button trigger modal -->

<!-- Split dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch BlackFox Youtube Channel
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="#">1. GSU CHANNEL</a><br>
    <a class="dropdown-item" href="#">2. BLACKFOX CHANNEL</a><br>
    <a class="dropdown-item" href="#">3. STORYCODE CHANNEL</a><br>
    <div class="dropdown-divider"></div><br>
    <a class="dropdown-item" href="#">4. KEYTECH LABS CHANNEL</a><br>
    <a class="dropdown-item" href="#">5. MICRGENIO CONSULTING CHANNEL</a><br>
    <a class="dropdown-item" href="#">6. POWERSBROZ NETWORKS CHANNEL</a><br>

  </div>
</div>

//<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">BlackFox Youtube Channel</h4>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLkywm8Hnm8o0KGnrNkZnEVtiQZizldIif" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
//<!-- Button trigger modal -->

<!-- Split dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
  Launch New Music Player!
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="#">CODING</a><br>
    <a class="dropdown-item" href="#">CLASSICAL</a><br>
    <a class="dropdown-item" href="#">HIP HOP</a><br>
    <div class="dropdown-divider"></div><br>
    <a class="dropdown-item" href="#">JAZZ</a><br>
    <a class="dropdown-item" href="#">BUSINESS AUDIO BOOKS</a><br>
    <a class="dropdown-item" href="#">SIFI AUDIO BOOKS</a><br>

  </div>
</div>
//<!-- Moda
//<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">New Music Player!</h4>
      </div>
      <div class="modal-body">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL0pYKRDdf-nWjO2nN3oNo24B7CknwhfZw" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Split dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
  Launch New C# Classes!
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="#">PHP CLASSES</a><br>
    <a class="dropdown-item" href="#">NODE.JS CLASSES</a><br>
    <a class="dropdown-item" href="#">JS CLASSES</a><br>
    <div class="dropdown-divider"></div><br>
    <a class="dropdown-item" href="#">RUBY CLASSES</a><br>
    <a class="dropdown-item" href="#">HTML CLASSES</a><br>
    <a class="dropdown-item" href="#">PHYTHON CLASSES</a><br>
    <a class="dropdown-item" href="#">MYSQL CLASSES</a><br>
    <a class="dropdown-item" href="#">SQL SERVER CLASSES</a><br>
  </div>
</div>
//<!-- Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel3">New C# Classes!</h4>
      </div>
      <div class="modal-body">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLAC325451207E3105" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	//<!-- Button trigger modal -->
		
<!-- Split dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal4">
    Take notes and save notes!
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="#">Take Notes</a><br>
    <a class="dropdown-item" href="#">Code Editor</a><br>
    <a class="dropdown-item" href="#">Something else here</a><br>
    <div class="dropdown-divider"></div><br>
    <a class="dropdown-item" href="#">Separated link</a><br>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel4">New Text Editor (save your code & notes here)</h4>
      </div>
      <div class="modal-body">
      <form>
    <textarea id="edit" class="language-markup" name="content"></textarea>
  </form>
<div class="fr-view">
  
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>		
	
		
	
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Home Inventory App (MySqlDB & TableStorage)',
				 paging: true, //Enable paging
            			
            			pageSize: 10, //Set page size (default: 10)
            			sorting: true, //Enable sorting
            			multiSorting: true,
            			pageSizeChangeArea: true,
      
            			defaultSorting: 'Name ASC', //Set default sorting
				
				actions: {
					listAction: 'PersonActions.php?action=list',
					createAction: 'PersonActions.php?action=create',
					updateAction: 'PersonActions.php?action=update',
					deleteAction: 'PersonActions.php?action=delete'
				},
				fields: {
					PersonId: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					HomeLocationName: {
						title: 'Home Location',
						width: '15%',
						type: 'radiobutton',
						options: { '1': 'Normandy Park', 
						           '2': 'Des Monies house', 
						           '3': 'Unc Nats House',
						           '4': 'NC APT'}
					},
					
					Name: {
						title: 'Name',
						width: '15%'
					},
					Age: {
						title: 'Age',
						width: '10%'
					},
					HomeItem: {
						title: 'Item Name',
						width: '15%'
					},
					ItemDescription: {
						title: 'Item Description',
						width: '15%'
					},
					ItemRoom: {
						title: 'Room',
						width: '10%'
					},
					DrawerNum: {
						title: 'Room Drawer Number',
						width: '20%',
						options: { '1': 'Kichen drawer 1', 
						'2': 'Kichen drawer 2', 
						'3': 'Kichen drawer 3', 
						'4': 'Kichen drawer 4', 
						'5': 'Kichen drawer 5', 
						'6': 'Kichen drawer 6', 
						'7': 'Kichen drawer 7', 
						'8': 'Kichen drawer 8', 
						'9': 'Kichen drawer 9', 
						'10': 'Kichen drawer 10', 
						'11': 'BR drawer 1', 
						'12': 'BR drawer 2', 
						'13': 'BR drawer 3', 
						'14': 'BR drawer 4', 
						'15': 'BR drawer 5', 
						'16': 'BR drawer 6', 
						'17': 'BR drawer 7', 
						'18': 'BR drawer 8', 
						'19': 'BR drawer 9', 
						'20': 'BR drawer 10', 
						'21': 'LV drawer 1', 
						'22': 'LV drawer 2', 
						'23': 'LV drawer 3', 
						'24': 'LV drawer 4', 
						'25': 'LV drawer 5', 
						'26': 'LV drawer 6', 
						'27': 'LV drawer 7', 
						'28': 'LV drawer 8', 
						'29': 'LV drawer 9', 
						'30': 'LV drawer 10', 
						'31': 'Bath drawer 1', 
						'32': 'Bath drawer 2', 
						'33': 'Bath drawer 3', 
						'34': 'Bath drawer 4', 
						'35': 'Bath drawer 5', 
						'36': 'Bath drawer 6', 
						'37': 'Bath drawer 7', 
						'38': 'Bath drawer 8', 
						'39': 'Bath drawer 9', 
						'40': 'Bath drawer 10'
									}

					},

					
				}
			});

//Load person list from server
$('#PeopleTableContainer').jtable('load');



$('#PeopleTableContainer2').jtable({
				title: 'Business Analysis App (MySqlDB & TableStorage)',
				 paging: true, //Enable paging
            			
            			pageSize: 10, //Set page size (default: 10)
            			sorting: true, //Enable sorting
            			multiSorting: true,
            			pageSizeChangeArea: true,
      
            			defaultSorting: 'Name ASC', //Set default sorting
				
				actions: {
					listAction: 'BusinessActions.php?action=list',
					createAction: 'BusinessActions.php?action=create',
					updateAction: 'BusinessActions.php?action=update',
					deleteAction: 'BusinessActions.php?action=delete'
				},
				fields: {
					BusinessId: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					BusinessName: {
						title: 'BusinessName',
						width: '15%',
						type: 'radiobutton',
						options: { '1': 'KeyTech Labs', 
						           '2': 'GreenState University', 
						           '3': 'Blackfox Studios',
						           '4': 'Hacker House'}
					},
					comments: {
						title: 'comments',
						width: '10%'
					},
					ConsultantName: {
						title: 'ConsultantName',
						width: '15%'
					},
					InterviewDescription: {
						title: 'InterviewDescription',
						width: '15%'
					},
					InterviewQuestion: {
						title: 'InterviewQuestion',
						width: '10%',
						options: { 
						 '1':	'Application Vision'	,
'2':	'Application Vision'	,
'3':	 'How do you envision PaaS supporting this initiative?'	,
'4':	 'What is your vision for Promotion Planning area?'	,
'5':	 'Which is currently on separate infrastructure (oracle / Teradata)?'	,
'6':	 ' What is the future on this look like?'	,
'7':	 'Are you looking to move Development environments on cloud including adoption on VS on cloud / TFS on cloud to enhance developer productivity (offshore)?'	,
'8':	 'Questions on DR environment? –'	,
'9':	 'What are primary drivers of your DR environment?'	,
'10':	 'Any other relevant questions… prod environment that can be purposed as DR etc.'	,
'11':	 'Data and Visualization Vision'	,
'12':	 'Do you have any plans in moving towards big data platforms like Azure Hadoop etc. to host big data i.e. POS Scan data? What kind of analytics platforms you are envisioning to support AGDC sales strategy?'	,
'13':	 'What is your vision on Data Warehouse environment (Teradata) supporting sales? What are your plans in creating Data Lakes and supporting them for building sales app infrastructure (analytics/reporting)?'	,
'14':	 'Reporting Rationalization & Consolidation – In current context there are multiple reporting environments (Batch, EDGE Reporting, CATMAN etc.), from BI standpoint what is the vision for this area?'	,
'15':	 'We understand to power analytics you will get data from syndicates etc. Do you see any real time integration requirements arising out of this scenario?'	,
'16':	 'Marketing Vision'	,
'17':	 'Understanding that brand sites are owned and operated by LBD, could you layout what your strategy is for existing branding sites (with LBD)'	,
'18':	 'Greensmoke branding sites – is differently hosted? Can you explain current state and vision?'	,
'19':	 'Online e-Commerce for GreenSmoke?'	,
'20':	 'NuMark innovation operating Unit – new innovations on the cloud, ripe for agility'	,
'21':	 'Axciom Customer Database and age verification'	,
'22':	 'Offer management and retailer integrations'	,
'23':	 'Architecture'	,
'24':	 'Can you provide a brief explanation of your application landscape?'	,
'25':	 'What are your top points of concerns?'	,
'26':	 'What are your top strengths in your architecture?'	,
'27':	 'Is there a need for many real time integrations in the architecture?'	,
'28':	 'Do you have internal and external audiences for your applications?'	,
'29':	 'Can you explain the nature of the dependencies in your applications and the integrations? Also any real time integrations?'	,
'30':	 'What mode of Authentication is typically used in applications (SSO, AD, OAuth, OpenID, LocalDb, others)'	,
'31':	 'What are the user groups your applications typically address? (External/Internal, etc.)'	,
'32':	 'Biggest areas of Compliance that are concerns?'	,
'33':	 'Any concerns of the longevity of the technology used for the applications?'	,
'34':	 'Is product licensing a major cost are for your applications?'	,
'35':	 'Technology'	,
'36':	 'What are the main software technology patterns you use in your landscape?'	,
'37':	 'COTS vs Custom Applications in the application landscape?'	,
'38':	 'Complexity of applications, (lines of code) and how well they are documented?'	,
'39':	 'Infrastructure'	,
'40':	 'Can you briefly describe your infrastructure requirements?'	,
'41':	 'VM, OS, Storage, Databases, Security'	,
'42':	 'Size of your environments, # of servers'	,
'43':	 'What are the DR plans for the applications?'	,
'44':	 'Agility/ DevOps'	,
'45':	 'What SDLC methodology do you typically follow?'	,
'46':	 'Do you see any large re-writes of applications in the next two to four years?'	,
'47':	 'What are your typical release cycles and frequency of releases?'	,
'48':	 'What is your release process?'	,
'49':	 'Cloud Preparedness'	,
'50':	 'Have you already been researching and working on Azure based'	,
'51':	 'Are there SaaS offerings being used in your architecture currently. Are you considering any additional SaaS providers in the future?'	,
'52':	 'Service Management'	,
'53':	 'What are your biggest Service Management concerns?'	,
'54':	 'Application Stability – Do you consider the applications to be stable? What are the ticket volumes for the applications?'	,
'55':	 'Availability/Provisioning'	,
'56':	 'How quickly can you have new environments provisioned?'	,
'57':	 'Find a budget by understanding Cost/maintenance/Issues/Inventory cost'	,
'58':	 'Find Authority whos name is on each report on Cost/maintenance/Issues/Inventory cost/'	,
'59':	 'Find Need What are the issues youre having and how are you tracking them'	,
'60':	 'How many custom application are  in your department'	,
'61':	 'How many Legacy application are in your department'	,
'62':	 'Any Shadow IT?'	,
'63':	 'What are the regulations your department worries about?'	,
'64':	 'What are the business roles that have been implemented in your department?'	,
'65':	 'What problem are you censured with in regards to technology Inefficiencies (issues)?'	,
'66':	 'What are problems youre having with operational effectiveness?'	,
'67':	 'How do you check for Data Inaccuracies?'	,
'68':	 'What Systems and Applications are end of life? (Windows 2003)'	,
'69':	 'How do you train on accounting/ budgets and Reporting?'	,
'70':	 'Do you have a Road map for training employees in your department?'	,
'71':	 'Do you have a learning platform to retrain employees?'	,
'72':	 'Do you want to include customers other than metropolitan customers in your new system.'	,
'73':	 'Once we have decided on how big the effort is, do we want to automate some or part of manual reconciliation process.'	,
'74':	 'Some of the applications are hosted at the Vendor Data Centers, how do we manage the data security? Do we have anything in place for that?'	
	}	

					},
					IssuePriority: {
						title: 'IssuePriority',
						width: '20%',
						options: { '1': 'Kichen drawer 1', 
						'2': 'Kichen drawer 2', 
						'3': 'Kichen drawer 3', 
						'4': 'Kichen drawer 4', 
						'5': 'Kichen drawer 5', 
						'6': 'Kichen drawer 6', 
						'7': 'Kichen drawer 7', 
						'8': 'Kichen drawer 8', 
						'9': 'Kichen drawer 9', 
						'10': 'Kichen drawer 10', 
						'11': 'BR drawer 1', 
						'12': 'BR drawer 2', 
						'13': 'BR drawer 3', 
						'14': 'BR drawer 4', 
						'15': 'BR drawer 5', 
						'16': 'BR drawer 6', 
						'17': 'BR drawer 7', 
						'18': 'BR drawer 8', 
						'19': 'BR drawer 9', 
						'20': 'BR drawer 10', 
						'21': 'LV drawer 1', 
						'22': 'LV drawer 2', 
						'23': 'LV drawer 3', 
						'24': 'LV drawer 4', 
						'25': 'LV drawer 5', 
						'26': 'LV drawer 6', 
						'27': 'LV drawer 7', 
						'28': 'LV drawer 8', 
						'29': 'LV drawer 9', 
						'30': 'LV drawer 10', 
						'31': 'Bath drawer 1', 
						'32': 'Bath drawer 2', 
						'33': 'Bath drawer 3', 
						'34': 'Bath drawer 4', 
						'35': 'Bath drawer 5', 
						'36': 'Bath drawer 6', 
						'37': 'Bath drawer 7', 
						'38': 'Bath drawer 8', 
						'39': 'Bath drawer 9', 
						'40': 'Bath drawer 10'
									}

					},
					Needs: {
						title: 'Needs',
						width: '10%'
					},
					RecordDate: {
						title: 'Record date',
						width: '15%',
						type: 'date',
						create: false,
						edit: false
					},
					StackholderName: {
						title: 'StackholderName',
						width: '10%'
				},
				StackholderResponsibility: {
						title: 'StackholderResponsibility',
						width: '10%'
				},
				StackholderScorecard: {
						title: 'StackholderScorecard',
						width: '10%'
				},
				Timeline: {
						title: 'Timeline',
						width: '10%'
				},
				Topissues: {
						title: 'Topissues',
						width: '10%'
				}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer2').jtable('load');
		 //Re-load records when user click 'load records' button.
        
    });
		
 
	</script>
 <div id="mydiv" style="width: 1250px;">
 <?php include "jTableSimplePagedSorted.php"; ?>
 </div>
<script>
      $(function() {
          $('#edit').froalaEditor()
      });
  </script>
   <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
   <script src="Assets/js/jquery.tinymce.min.js"></script>
<script src="Assets/js/tinymce.min.js"></script>
    <script src="Assets/js/index.js"></script>
    <script>
    var _self="undefined"!=typeof window?window:"undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?self:{},Prism=function(){var e=/\blang(?:uage)?-(\w+)\b/i,t=0,n=_self.Prism={util:{encode:function(e){return e instanceof a?new a(e.type,n.util.encode(e.content),e.alias):"Array"===n.util.type(e)?e.map(n.util.encode):e.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/\u00a0/g," ")},type:function(e){return Object.prototype.toString.call(e).match(/\[object (\w+)\]/)[1]},objId:function(e){return e.__id||Object.defineProperty(e,"__id",{value:++t}),e.__id},clone:function(e){var t=n.util.type(e);switch(t){case"Object":var a={};for(var r in e)e.hasOwnProperty(r)&&(a[r]=n.util.clone(e[r]));return a;case"Array":return e.map&&e.map(function(e){return n.util.clone(e)})}return e}},languages:{extend:function(e,t){var a=n.util.clone(n.languages[e]);for(var r in t)a[r]=t[r];return a},insertBefore:function(e,t,a,r){r=r||n.languages;var i=r[e];if(2==arguments.length){a=arguments[1];for(var l in a)a.hasOwnProperty(l)&&(i[l]=a[l]);return i}var o={};for(var s in i)if(i.hasOwnProperty(s)){if(s==t)for(var l in a)a.hasOwnProperty(l)&&(o[l]=a[l]);o[s]=i[s]}return n.languages.DFS(n.languages,function(t,n){n===r[e]&&t!=e&&(this[t]=o)}),r[e]=o},DFS:function(e,t,a,r){r=r||{};for(var i in e)e.hasOwnProperty(i)&&(t.call(e,i,e[i],a||i),"Object"!==n.util.type(e[i])||r[n.util.objId(e[i])]?"Array"!==n.util.type(e[i])||r[n.util.objId(e[i])]||(r[n.util.objId(e[i])]=!0,n.languages.DFS(e[i],t,i,r)):(r[n.util.objId(e[i])]=!0,n.languages.DFS(e[i],t,null,r)))}},plugins:{},highlightAll:function(e,t){var a={callback:t,selector:'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'};n.hooks.run("before-highlightall",a);for(var r,i=a.elements||document.querySelectorAll(a.selector),l=0;r=i[l++];)n.highlightElement(r,e===!0,a.callback)},highlightElement:function(t,a,r){for(var i,l,o=t;o&&!e.test(o.className);)o=o.parentNode;o&&(i=(o.className.match(e)||[,""])[1].toLowerCase(),l=n.languages[i]),t.className=t.className.replace(e,"").replace(/\s+/g," ")+" language-"+i,o=t.parentNode,/pre/i.test(o.nodeName)&&(o.className=o.className.replace(e,"").replace(/\s+/g," ")+" language-"+i);var s=t.textContent,u={element:t,language:i,grammar:l,code:s};if(n.hooks.run("before-sanity-check",u),!u.code||!u.grammar)return n.hooks.run("complete",u),void 0;if(n.hooks.run("before-highlight",u),a&&_self.Worker){var g=new Worker(n.filename);g.onmessage=function(e){u.highlightedCode=e.data,n.hooks.run("before-insert",u),u.element.innerHTML=u.highlightedCode,r&&r.call(u.element),n.hooks.run("after-highlight",u),n.hooks.run("complete",u)},g.postMessage(JSON.stringify({language:u.language,code:u.code,immediateClose:!0}))}else u.highlightedCode=n.highlight(u.code,u.grammar,u.language),n.hooks.run("before-insert",u),u.element.innerHTML=u.highlightedCode,r&&r.call(t),n.hooks.run("after-highlight",u),n.hooks.run("complete",u)},highlight:function(e,t,r){var i=n.tokenize(e,t);return a.stringify(n.util.encode(i),r)},tokenize:function(e,t){var a=n.Token,r=[e],i=t.rest;if(i){for(var l in i)t[l]=i[l];delete t.rest}e:for(var l in t)if(t.hasOwnProperty(l)&&t[l]){var o=t[l];o="Array"===n.util.type(o)?o:[o];for(var s=0;s<o.length;++s){var u=o[s],g=u.inside,c=!!u.lookbehind,h=!!u.greedy,f=0,d=u.alias;if(h&&!u.pattern.global){var p=u.pattern.toString().match(/[imuy]*$/)[0];u.pattern=RegExp(u.pattern.source,p+"g")}u=u.pattern||u;for(var m=0,y=0;m<r.length;y+=r[m].length,++m){var v=r[m];if(r.length>e.length)break e;if(!(v instanceof a)){u.lastIndex=0;var b=u.exec(v),k=1;if(!b&&h&&m!=r.length-1){if(u.lastIndex=y,b=u.exec(e),!b)break;for(var w=b.index+(c?b[1].length:0),_=b.index+b[0].length,A=m,P=y,j=r.length;j>A&&_>P;++A)P+=r[A].length,w>=P&&(++m,y=P);if(r[m]instanceof a||r[A-1].greedy)continue;k=A-m,v=e.slice(y,P),b.index-=y}if(b){c&&(f=b[1].length);var w=b.index+f,b=b[0].slice(f),_=w+b.length,O=v.slice(0,w),x=v.slice(_),S=[m,k];O&&S.push(O);var N=new a(l,g?n.tokenize(b,g):b,d,b,h);S.push(N),x&&S.push(x),Array.prototype.splice.apply(r,S)}}}}}return r},hooks:{all:{},add:function(e,t){var a=n.hooks.all;a[e]=a[e]||[],a[e].push(t)},run:function(e,t){var a=n.hooks.all[e];if(a&&a.length)for(var r,i=0;r=a[i++];)r(t)}}},a=n.Token=function(e,t,n,a,r){this.type=e,this.content=t,this.alias=n,this.length=0|(a||"").length,this.greedy=!!r};if(a.stringify=function(e,t,r){if("string"==typeof e)return e;if("Array"===n.util.type(e))return e.map(function(n){return a.stringify(n,t,e)}).join("");var i={type:e.type,content:a.stringify(e.content,t,r),tag:"span",classes:["token",e.type],attributes:{},language:t,parent:r};if("comment"==i.type&&(i.attributes.spellcheck="true"),e.alias){var l="Array"===n.util.type(e.alias)?e.alias:[e.alias];Array.prototype.push.apply(i.classes,l)}n.hooks.run("wrap",i);var o=Object.keys(i.attributes).map(function(e){return e+'="'+(i.attributes[e]||"").replace(/"/g,"&quot;")+'"'}).join(" ");return"<"+i.tag+' class="'+i.classes.join(" ")+'"'+(o?" "+o:"")+">"+i.content+"</"+i.tag+">"},!_self.document)return _self.addEventListener?(_self.addEventListener("message",function(e){var t=JSON.parse(e.data),a=t.language,r=t.code,i=t.immediateClose;_self.postMessage(n.highlight(r,n.languages[a],a)),i&&_self.close()},!1),_self.Prism):_self.Prism;var r=document.currentScript||[].slice.call(document.getElementsByTagName("script")).pop();return r&&(n.filename=r.src,document.addEventListener&&!r.hasAttribute("data-manual")&&("loading"!==document.readyState?window.requestAnimationFrame?window.requestAnimationFrame(n.highlightAll):window.setTimeout(n.highlightAll,16):document.addEventListener("DOMContentLoaded",n.highlightAll))),_self.Prism}();"undefined"!=typeof module&&module.exports&&(module.exports=Prism),"undefined"!=typeof global&&(global.Prism=Prism);
Prism.languages.markup={comment:/<!--[\w\W]*?-->/,prolog:/<\?[\w\W]+?\?>/,doctype:/<!DOCTYPE[\w\W]+?>/i,cdata:/<!\[CDATA\[[\w\W]*?]]>/i,tag:{pattern:/<\/?(?!\d)[^\s>\/=$<]+(?:\s+[^\s>\/=]+(?:=(?:("|')(?:\\\1|\\?(?!\1)[\w\W])*\1|[^\s'">=]+))?)*\s*\/?>/i,inside:{tag:{pattern:/^<\/?[^\s>\/]+/i,inside:{punctuation:/^<\/?/,namespace:/^[^\s>\/:]+:/}},"attr-value":{pattern:/=(?:('|")[\w\W]*?(\1)|[^\s>]+)/i,inside:{punctuation:/[=>"']/}},punctuation:/\/?>/,"attr-name":{pattern:/[^\s>\/]+/,inside:{namespace:/^[^\s>\/:]+:/}}}},entity:/&#?[\da-z]{1,8};/i},Prism.hooks.add("wrap",function(a){"entity"===a.type&&(a.attributes.title=a.content.replace(/&amp;/,"&"))}),Prism.languages.xml=Prism.languages.markup,Prism.languages.html=Prism.languages.markup,Prism.languages.mathml=Prism.languages.markup,Prism.languages.svg=Prism.languages.markup;
Prism.languages.css={comment:/\/\*[\w\W]*?\*\//,atrule:{pattern:/@[\w-]+?.*?(;|(?=\s*\{))/i,inside:{rule:/@[\w-]+/}},url:/url\((?:(["'])(\\(?:\r\n|[\w\W])|(?!\1)[^\\\r\n])*\1|.*?)\)/i,selector:/[^\{\}\s][^\{\};]*?(?=\s*\{)/,string:{pattern:/("|')(\\(?:\r\n|[\w\W])|(?!\1)[^\\\r\n])*\1/,greedy:!0},property:/(\b|\B)[\w-]+(?=\s*:)/i,important:/\B!important\b/i,"function":/[-a-z0-9]+(?=\()/i,punctuation:/[(){};:]/},Prism.languages.css.atrule.inside.rest=Prism.util.clone(Prism.languages.css),Prism.languages.markup&&(Prism.languages.insertBefore("markup","tag",{style:{pattern:/(<style[\w\W]*?>)[\w\W]*?(?=<\/style>)/i,lookbehind:!0,inside:Prism.languages.css,alias:"language-css"}}),Prism.languages.insertBefore("inside","attr-value",{"style-attr":{pattern:/\s*style=("|').*?\1/i,inside:{"attr-name":{pattern:/^\s*style/i,inside:Prism.languages.markup.tag.inside},punctuation:/^\s*=\s*['"]|['"]\s*$/,"attr-value":{pattern:/.+/i,inside:Prism.languages.css}},alias:"language-css"}},Prism.languages.markup.tag));
Prism.languages.clike={comment:[{pattern:/(^|[^\\])\/\*[\w\W]*?\*\//,lookbehind:!0},{pattern:/(^|[^\\:])\/\/.*/,lookbehind:!0}],string:{pattern:/(["'])(\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,greedy:!0},"class-name":{pattern:/((?:\b(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[a-z0-9_\.\\]+/i,lookbehind:!0,inside:{punctuation:/(\.|\\)/}},keyword:/\b(if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/,"boolean":/\b(true|false)\b/,"function":/[a-z0-9_]+(?=\()/i,number:/\b-?(?:0x[\da-f]+|\d*\.?\d+(?:e[+-]?\d+)?)\b/i,operator:/--?|\+\+?|!=?=?|<=?|>=?|==?=?|&&?|\|\|?|\?|\*|\/|~|\^|%/,punctuation:/[{}[\];(),.:]/};
Prism.languages.javascript=Prism.languages.extend("clike",{keyword:/\b(as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|var|void|while|with|yield)\b/,number:/\b-?(0x[\dA-Fa-f]+|0b[01]+|0o[0-7]+|\d*\.?\d+([Ee][+-]?\d+)?|NaN|Infinity)\b/,"function":/[_$a-zA-Z\xA0-\uFFFF][_$a-zA-Z0-9\xA0-\uFFFF]*(?=\()/i,operator:/--?|\+\+?|!=?=?|<=?|>=?|==?=?|&&?|\|\|?|\?|\*\*?|\/|~|\^|%|\.{3}/}),Prism.languages.insertBefore("javascript","keyword",{regex:{pattern:/(^|[^\/])\/(?!\/)(\[.+?]|\\.|[^\/\\\r\n])+\/[gimyu]{0,5}(?=\s*($|[\r\n,.;})]))/,lookbehind:!0,greedy:!0}}),Prism.languages.insertBefore("javascript","string",{"template-string":{pattern:/`(?:\\\\|\\?[^\\])*?`/,greedy:!0,inside:{interpolation:{pattern:/\$\{[^}]+\}/,inside:{"interpolation-punctuation":{pattern:/^\$\{|\}$/,alias:"punctuation"},rest:Prism.languages.javascript}},string:/[\s\S]+/}}}),Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{script:{pattern:/(<script[\w\W]*?>)[\w\W]*?(?=<\/script>)/i,lookbehind:!0,inside:Prism.languages.javascript,alias:"language-javascript"}}),Prism.languages.js=Prism.languages.javascript;
    </script>
    <script>
tinymce.init({
  selector: "textarea",
  codesample_languages: [
        {text: 'HTML/XML', value: 'markup'},
        {text: 'JavaScript', value: 'javascript'},
        {text: 'CSS', value: 'css'},
        {text: 'PHP', value: 'php'},
        {text: 'Ruby', value: 'ruby'},
        {text: 'Python', value: 'python'},
        {text: 'Java', value: 'java'},
        {text: 'C', value: 'c'},
        {text: 'C#', value: 'csharp'},
        {text: 'C++', value: 'cpp'}
    ],
    bootcards.init( {
  offCanvasBackdrop : true,
  offCanvasHideOnMainClick : true,
  enableTabletPortraitMode : true,
  disableRubberBanding : true,
  disableBreakoutSelector : 'a.no-break-out'
});

  toolbar: "codesample"
});
 <script src="Assets/content-tools.min.js"></script>
    <script src="Assets/editor.js"></script>
 

<script>
$("#homeapptemplate1").load("/jTable-PHP-Samples/Codes/htmltemplates/homeapptemplate1.html");
</script>
<script>
$("#view1").load("/jTable-PHP-Samples/Codes/htmltemplates/view1.html");
</script>
view1
<script>
$("#homeapptemplate2").load("/jTable-PHP-Samples/Codes/htmltemplates/homeapptemplate2.html");
</script>

<script>
$("#homeapptemplate3").load("/jTable-PHP-Samples/Codes/htmltemplates/homeapptemplate3.html");
</script>

<script>
$("#homeapptemplate4").load("/jTable-PHP-Samples/Codes/htmltemplates/homeapptemplate4.html");
</script>

<script>
//Load Template from server

$("#htmltemplate1").load("/jTable-PHP-Samples/Codes/htmltemplates/template1.html");
</script>

<script>
//Load Template from server
$("#htmltemplate2").load("/jTable-PHP-Samples/Codes/htmltemplates/template2.html");
</script>
<script>
//Load Template from server
$("#htmltemplate3").load("/jTable-PHP-Samples/Codes/htmltemplates/template3.html");
</script>
<script>
//Load Template from server
$("#htmltemplate4").load("/jTable-PHP-Samples/Codes/htmltemplates/template4.html");
bootcards.init( {
  offCanvasBackdrop : true,
  offCanvasHideOnMainClick : true,
  enableTabletPortraitMode : true,
  disableRubberBanding : true,
  disableBreakoutSelector : 'a.no-break-out'
});
        
</script>

  </body>
</html>
