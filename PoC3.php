  <head>

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
        xmlhttp.open("GET","/jTable-PHP-Samples/Codes/gettemplate.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<p><img src="/jTable-PHP-Samples/Codes/Assets/images/BlackFoxthumb.png" style="float: left; margin: 0 1px 5px; border: 1px solid gray" class="img-thumbnail" alt="Cinque Terre" width="204" height="236"  />
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<div class="col-md-4">
              		    
                                            <select name="topicid" onchange="showTemplate(this.value)">
  							<option value="">Select Topic Template:</option>
  							<option value="1">net Topic1<?echo " . $row['topicname'] . ";?></option>
  							<option value="2">net Topic2</option>
							  <option value="3">net Topic3</option>
							  <option value="4">net Topic4</option>
							  <option value="5">net Topic5</option>
							  <option value="6">net Topic6</option>
							  <option value="7">net Topic7</option>
							  <option value="8">net Topic8</option>
							  <option value="9">net Topic9</option>
							  <option value="10">net Topic10</option>
							  <option value="11">net Topic11</option>
							  <option value="12">net Topic12</option>
							  <option value="13">net Topic13</option>
							  <option value="14">net Topic14</option>
							  <option value="15">net Topic15</option>
							  </select>
							  <div id="txtHint"><b>Topic Template will Display here...</b></div>
						 </div> 	
              		


                </div> <!-- fim div da esquerda -->
            </div>
              
            </div>
          </div>
          
          
        </div>
    </div>
      
</div>
	
  
  <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
   <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/jquery.tinymce.min.js"></script>
<script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/tinymce.min.js"></script>
    <script src="http://www.powersbroznetwork.com//jTable-PHP-Samples/Codes/Assets/js/index.js"></script>
   
 <script src="/jTable-PHP-Samples/Codes/Assets/content-tools.min.js"></script>
    <script src="/jTable-PHP-Samples/Codes/Assets/editor.js"></script>
 
