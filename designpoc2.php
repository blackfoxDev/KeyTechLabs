<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css" integrity="sha256-D3+gw6JE4hEJ9pnCs+BglSfZ2yG5gF+JGdPJ/v183fo=" crossorigin="anonymous" />
</head>
<style>
   .row {
    margin-left: 0px;
    margin-right: 0px;
  }
  
  #wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
    font-size: 10px;
    
  }
  
  #sidebar-wrapper {
    margin-left: -150px;
    left: 70px;
    width: 150px;
    background: #222;
    position: fixed;
    height: 100%;
    z-index: 10000;
    transition: all .4s ease 0s;
    overflow-y: scroll;
  }
  
  .sidebar-nav {
    display: block;
    float: left;
    width: 165px;
    list-style: none;
    margin: 0;
    padding: 0;
    
    font-size: 10px;
  }
  
  #page-content-wrapper {
    padding-left: 0;
    margin-left: 0;
    width: 100%;
    height: auto;
  }
  
  #wrapper.active {
    padding-left: 150px;
  }
  
  #wrapper.active #sidebar-wrapper {
    left: 150px;
  }
  
  #page-content-wrapper {
    width: 100%;
  }
  
  #sidebar_menu li a,
  .sidebar-nav li a {
    color: #999;
    display: block;
    float: left;
    text-decoration: none;
    width: 150px;
    background: #252525;
    border-top: 1px solid #373737;
    border-bottom: 1px solid #1A1A1A;
    -webkit-transition: background .5s;
    -moz-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
    transition: background .5s;
  }
  
  .sidebar_name {
    padding-top: 25px;
    color: #fff;
    opacity: .7;
  }
  
  .sidebar-nav li {
    line-height: 40px;
    text-indent: 5px;
  }
  
  .sidebar-nav li a {
    color: #999999;
    display: block;
    text-decoration: none;
  }
  
  .sidebar-nav li a:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
    text-decoration: none;
  }
  
  .sidebar-nav li a:active,
  .sidebar-nav li a:focus {
    text-decoration: none;
  }
  
  .sidebar-nav > .sidebar-brand {
    height: 65px;
    line-height: 60px;
    font-size: 18px;
  }
  
  .sidebar-nav > .sidebar-brand a {
    color: #999999;
  }
  
  .sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
  }
  
  #main_icon {
    float: right;
    padding-right: 65px;
    padding-top: 20px;
  }
  
  .sub_icon {
    float: right;
    padding-right: 65px;
    padding-top: 10px;
  }
  
  .content-header {
    height: 65px;
    line-height: 65px;
  }
  
  .content-header h1 {
    margin: 0;
    margin-left: 20px;
    line-height: 65px;
    display: inline-block;
  }
  
  @media (max-width:767px) {
    #wrapper {
      padding-left: 70px;
      transition: all .4s ease 0s;
    }
    #sidebar-wrapper {
      left: 70px;
    }
    #wrapper.active {
      padding-left: 150px;
    }
    #wrapper.active #sidebar-wrapper {
      left: 150px;
      width: 150px;
      transition: all .4s ease 0s;
    }
  }

</style>
<!--Load html From Nother file. Create Template for reuse-->
<div id="wrapper" class="active">
  <!-- Sidebar -->

  <div id="sidebar-wrapper">
    <ul id="sidebar" class="sidebar-nav">
      <li class="sidebar-brand"><a id="menu-toggle" href="#">.NET<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a</li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">    
       
<li><a href="javascript:mybookinstance.refresh(netpage1)">C'#'
<span class="ionicons ion-ios-more"></span></a></li>

      <li><a href="javascript:mybookinstance.refresh(netpage2)">NancyFx
<span class="ionicons ion-ios-more"></span></a></li>
                <li><a href="javascript:mybookinstance.refresh(netpage1)">Asp.net Core
<span class="ionicons ion-ios-more"></span></a></li>

<li><a href="javascript:mybookinstance.refresh(netpage3)">Entity Framework
<span class="ionicons ion-ios-more"></span></a></li>

<li><a href="javascript:mybookinstance.refresh(netpage3)">Deployment
<span class="ionicons ion-ios-more"></span></a></li>

<li><a href="javascript:mybookinstance.refresh(netpage3)">Security and identity
<span class="ionicons ion-ios-more"></span></a></li>

<li><a href="javascript:mybookinstance.refresh(netpage3)">Scalability
<span class="ionicons ion-ios-more"></span></a></li>  

<li><a href="javascript:mybookinstance.refresh(netpage3)">Addtional Material
<span class="ionicons ion-ios-more"></span></a></li>           
<li><a>All .NET Projects<span class="ionicons ion-ios-more"></span></a></li>
<li><a>Certification Study<span class="ionicons ion-ios-more"></span></a></li>
</ul>
</div>

  <!-- Page content -->
  <div id="page-content-wrapper">
    <!-- Keep all page content within the page-content inset div! -->
    <div class="page-content inset">
      <div class="row">
        <div class="col-md-12">
          <p class="well lead">.NET</p>
          <div class="container">
            <!--HTML Posted here Buy Php jquery Load page method-->


            <div id="paginate-top"> </div>

            <div id="bookcontent"> </div>

          </div>
        </div>
      </div>
    </div>

  </div>

  <script type="text/javascript">
    var netpage1 = {
      pages: ["demofiles/netSubject1.htm", "demofiles/netSubject1lvl1projects.htm", "demofiles/netSubject1lvl2projects.htm", "demofiles/netSubject1lvl3projects.htm", "demofiles/netSubject1projectcode.htm"],
      selectedpage: 0 //set page shown by default (0=1st page)
    }

    var netpage2 = {
      pages: ["demofiles/netSubject2.htm", "demofiles/netSubject2lvl1projects.htm", "demofiles/netSubject2projectcode.htm", "demofiles/netSubject2projectcode.htm", "demofiles/netSubject2projectcode.htm"],
      selectedpage: 0 //set page shown by default (0=1st page)
    }

    var netpage3 = {
      pages: ["demofiles/netSubject3.htm", "demofiles/netSubject3lvl1projects.htm", "demofiles/netSubject3lvl2projects.htm", "demofiles/netSubject3lvl3projects.htm", "demofiles/netSubject3projectcode.htm"],
      selectedpage: 0 //set page shown by default (0=1st page)
    }

    var mybookinstance = new ajaxpageclass.createBook(netpage1, "bookcontent", ["paginate-top"])
$(document).ready(function() {
  $("#add-code").click(function(e) {
    e.preventDefault();
    var numberOflines = $("#form1").find("input[name^='data[Code]']").length;
    var label = '<label for="data[Code][' + numberOflines + ']">Code ' + (numberOflines + 1) + '</label> ';
    var input = '<input type="text" name="data[Code][' + numberOflines + ']" id="data[Code][' + numberOflines + ']" />';
    var removeButton = '<button class="remove-code">Remove</button>';


    var numberOflines2 = $("#form1").find("input[name^='data[keytag]']").length;
    var label2 = '<label for="data[keytag][' + numberOflines2 + ']">keytag ' + (numberOflines2 + 1) + '</label> ';
    var input2 = '<input type="text" name="data[keytag][' + numberOflines2 + ']" id="data[keytag][' + numberOflines2 + ']" />';
    var html = "<div class='Code'>" + label + input + label2 + input2 + removeButton + "</div>";
    $("#form1").find("#add-code").before(html);
  });
});

$(document).on("click", ".remove-code", function(e) {
  e.preventDefault();
  $(this).parents(".Code").remove();
  //update labels
  $("#form1").find("label[for^='data[Code]'], label2[for^='data[keytag]'").each(function() {
    $(this).html("Code" + ($(this).parents('.Code').index() + 1));

  });
});
  </script>


