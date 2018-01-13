<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css" integrity="sha256-D3+gw6JE4hEJ9pnCs+BglSfZ2yG5gF+JGdPJ/v183fo=" crossorigin="anonymous" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="ajaxpagination.js" type="text/javascript">
      < script src = "/jTable-PHP-Samples/Codes/ajaxpagination.js" >



 
   
  

   
    </script>
    <link href="/jTable-PHP-Samples/Codes/ajaxpagination.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="ajaxpagination.css" />

    <link rel="stylesheet" href="/jTable-PHP-Samples/Codes/ui.css">
 

  <script>
    function showTemplate(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "gettemplate.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>
  <script>
    function showProjectTemplate2(str) {
      if (str == "") {
        document.getElementById("txtHint9").innerHTML = "";
        return;
      } else {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint9").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "/jTable-PHP-Samples/Codes/getprojecttemplate.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>
  <script>
    function showProjectTemplate90(str) {
      if (str == "") {
        document.getElementById("txtHint90").innerHTML = "";
        return;
      } else {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint90").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "/jTable-PHP-Samples/Codes/getprojectcodetemplate.php?q=" + str, true);
        xmlhttp.send();
      }
    }

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
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
<script>
function showSubject2Template(str) {
    if (str == "") {
        document.getElementById("txtHints2").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHints2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/jTable-PHP-Samples/Codes/getSubject2template.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<script>
    function showProjectTemplate999(str) {
      if (str == "") {
        document.getElementById("txtHint400").innerHTML = "";
        return;
      } else {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint400").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "/jTable-PHP-Samples/Codes/getprojectcodetemplate.php?q=" + str, true);
        xmlhttp.send();
      }
    }
 </script>
 <script>
    function showProjectTemplate400(str) {
      if (str == "") {
        document.getElementById("txtHint400").innerHTML = "";
        return;
      } else {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint400").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "/jTable-PHP-Samples/Codes/getprojectcodetemplate.php?q=" + str, true);
        xmlhttp.send();
      }
    }
 </script>
</head>

<body>
  <?PHP include("nav.php");
?>
    <br>
    <br>
    <br>



    <div class="row">
      <div class="board">

        <div class="board-inner">
          <ul class="nav nav-tabs" id="myTab">
            <div class="liner"></div>
            <li class="active3">
              <a href="#tab1" data-toggle="tab" title="welcome">THE DREAMLANCER PLATFORM
                      <span class="round-tabs one">
                              <i class="fa fa-university"></i>
                      </span> 
                  </a></li>

            <li><a href="#tab2" data-toggle="tab" title="profile">.NET
                     <span class="round-tabs two">
                         <i class="fa fa-windows"></i>
                     </span> 
           </a>
            </li>
            <li><a href="#tab3" data-toggle="tab" title="bootsnipp goodies">LAMP
                     <span class="round-tabs three">
                          <i class="fa fa-linux"></i>
                     </span> </a>
            </li>

            <li><a href="#tab4" data-toggle="tab" title="blah blah">Python
                         <span class="round-tabs four">
                              <i class="ionicons ion-social-python"></i>
                         </span> 
                     </a></li>

            <li><a href="#tab5" data-toggle="tab" title="completed">Ruby
                         <span class="round-tabs five">
                              <i class="fa fa-diamond"></i>
                         </span> </a>
            </li>

            <li><a href="#tab5" data-toggle="tab" title="completed">MEAN
                         <span class="round-tabs five">
                              <i class="ionicons ion-social-nodejs"></i>
                         </span> </a>
            </li>

            <li><a href="#tab5" data-toggle="tab" title="completed">Data Science
                         <span class="round-tabs five">
                              <i class="fa fa-database"></i>
                         </span> </a>
            </li>
          </ul>
        </div>



        <div class="tab-content">
          <div class="tab-pane" id="tab1">
            <?php include("designpoc1.php");?>
          </div>
          <div class="tab-pane" id="tab2">

            <?php include("designpoc2.php");?>
          </div>
          <div class="tab-pane" id="tab3">
   <div class="tab-pane" id="tab4">
            <!--4-->
          </div>
          <div class="tab-pane" id="tab5">
            <!--5-->
          </div>
          <div class="tab-pane" id="tab6">
            <!--6-->
          </div>
          <div class="tab-pane" id="tab7">
            <!--7-->
          </div>
          <ul class="pager wizard">

          </ul>
        </div>
        
      </div>






      <!-- Modal -->
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

      <!-- Modal -->
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



      <!-- Modal -->
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel3">New C('#') Classes!</h4>
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

              <textarea id="edit" class="language-markup" name="content">
                <h1>Topic1.Name - (Topic1.HtmLTemplate1.Name) Nindo Demo Lvl 1</h1>

                <p><b>(Topic1.HtmLTemplate1.Description)</b> Template1 is Made to guide the Users Creation Of His/her own Ninja way...<i>/'To be a ninja is to Endure'/</i>-Naruto45 </p>

                <p><b>(Topic1.HtmLTemplate1.Level Discription)</b> Level one(begenners) will cover the fundementals throw a Project serving as your first exposere to the Topic as a Proof of concept (POC). This Level One POC will be your refrance point to
                  help you gain begenner <b>experince Points</b> buy doing research and adding to the List of <b>Projects</b> below OR Adding to the List of <b>Resources</b> Bellow through <b>Study</b>. Finnaly, your goal is to </b>create your own PoCs</b>
                  to prove your mastery of the Begenner level. Store Your PoC in the Space Bellow.</p>

                <p><b>(Topic1.HtmLTemplate1.Goal)</b> The level one Goal (begenner) is to get you an understanding of the basic concepts allowing you to learn by building and understand the order of operations. Next you will need to learn the Domians of
                  the tech. Finally you will understand how to connect data between domains to finsh any begenner level project to level up to someday become a hacker level Blackfoxer.</p>

                <ol>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link1)</b></li>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link2)</b> </li>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link3)</b> </li>
                </ol>


                <p>you will gain more expeirnce points buy studying and take detailed notes on the above project. Then trying to create your own PoCs based of your notes! </p>




                <p>THe Key to progress is to take clean notes and capturing Examples, Explaination and study guild orgained AS YOUR OWN STUDYGUIDE. YOu create your resource <b>design</b> obtimizing it for the problems you need to solove in your study. <u>this is the key to success in life</u>.
                  Organize your resource in one zip file include 1 excel workbook, 1 powerpointside, 1 Onenote tab, one word doc readmefile and one PDF onepage studyguide. <b>(here is a link to the templated examples for each)</b> </p>

                <ol>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.PoC Link1)</b></li>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.PoC Link2)</b> </li>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.PoC Link3)</b> </li>
                </ol>


                <p>you will build a resume with PoC to Prove you know the infomation and have the Skills need work as a developer.</p>
              </textarea>
<form id="form1" method="post">
  <div class="Code">
    <label for="data[Code][0]">Code</label>

    <input type="text" name="data[Code][0]" id="data[Code][0]" />
    <label for="data[keytag][0]">keytag</label>

    <input type="text" name="data[keytag][0]" id="data[keytag][0]" />
  </div>

  <button id="add-code">Add code</button>
  <br />
  <input type="submit" value="Submit" />
</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $('.myModal4').bind('shown', function() {
          tinyMCE.execCommand('mceAddControl', false, 'mce-<?=$reply["id"]?>');
        });

        $('.myModal4').bind('hide', function() {
          tinyMCE.execCommand('mceRemoveControl', false, 'mce-<?=$reply["id"]?>');
        });

      </script>

      <!-- Modal -->
      <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel5">Video Chat</h4>
            </div>
            <div class="modal-body">

              <iframe src="https://appear.in/blackfoxIoT" width="560" height="400" frameborder="0"></iframe>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</body>

<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>

<script src="Assets/js/index.js"></script>



<script src="Assets/content-tools.min.js"></script>
<script src="Assets/editor.js"></script>



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
<!--End of HappyFox Live Chat Script-->
<!--End of HappyFox Live Chat Script-->
<script>
  $('#myTab a').click(function(e) {
    e.preventDefault()
    $(this).tab('show')
  })

</script>

<script>
  $(document).on('focusin', function(e) {
    if ($(e.target).closest('.mce-window').length) {
      e.stopImmediatePropagation();
    }
  });

</script>
