<?PHP include("nav.php");
?>
  <script type="text/javascript" src="https://www.clubdesign.at/floatlabels.js"></script>
  <script>
    function showTech(str) {
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
        xmlhttp.open("GET", "getTech.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>
  <script>
    function showTech2(str) {
      if (str == "") {
        document.getElementById("txtHint3").innerHTML = "";
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
            document.getElementById("txtHint3").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "getTech2.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>
  <script>
    function showSubject(str) {
      if (str == "") {
        document.getElementById("txtHint2").innerHTML = "";
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
            document.getElementById("txtHint2").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "getSubject.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>

  <script>
    function showTech3(str) {
      if (str == "") {
        document.getElementById("txtHint4").innerHTML = "";
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
            document.getElementById("txtHint4").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "getTech3.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>
  <script>
    function showSubject2(str) {
      if (str == "") {
        document.getElementById("txtHint5").innerHTML = "";
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
            document.getElementById("txtHint5").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "getSubject2.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>
  <script>
    function showTemplate(str) {
      if (str == "") {
        document.getElementById("txtHint6").innerHTML = "";
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
            document.getElementById("txtHint6").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "/jTable-PHP-Samples/Codes/gettemplate2.php?q=" + str, true);
        xmlhttp.send();
      }
    }

  </script>

  <div class="row">
    <div class=" container-fluid">
      <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Technology</small></h3>
            </div>

            <form action="/jTable-PHP-Samples/Codes/Blackfoxprocess.php" method="post">

              <h5>Add Technology Name</h5>
              <input type="text" name="TechName" placeholder=".NET" />
              <h5>Add Detailed Technology Discription </h5>
              <input type="text" name="Description" placeholder="Microsoft Technology..." />
              <input type="submit" name="submit" value="Register" class="btn btn-info btn-block" />

            </form>
          </div>





        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Subject</small></h3>
            </div>
            <div class="panel-body">

              <div class="row">

                
                  <!--Process page post to here {note action!!!}-->
                  <h5>Select Tech Study</h5>


                  <form action="/jTable-PHP-Samples/Codes/Subjectprocess.php" method="post">
                    <select name="Techid" onchange="showTech(this.value)">
                      <option value="">Select a Tech:</option>
                      <option value="1">net</option>
                      <option value="2">PHP</option>
                      <option value="3">node.js</option>
                      <option value="4">JAVA</option>
                      <option value="5">DataSci</option>
                      <option value="6">UserTopic2</option>
                      <option value="7">UserTopic3</option>
                      <option value="8">UserTopic4</option>
                      <option value="9">UserTopic5</option>
                      <option value="10">UserTopic6</option>
                      <option value="11">UserTopic7</option>
                      <option value="12">UserTopic8</option>
                      <option value="13">UserTopic9</option>
                      <option value="14">UserTopic10</option>
                      <option value="15">UserTopic11</option>
                    </select>
                    <div id="txtHint"><b>Tech info will be listed here...</b></div>
                    <h5>Add Study Subject</h5>

                    <input type="text" name="subjectname" class="form-control" placeholder="Functions" />
                    <h5>Add Study Subject Description</h5>
                    <input type="text" name="subjectdesc" class="form-control" placeholder=" In programming, a named section of a program that performs a specific task. In this sense, a function is a type of procedure or routine. Some programming languages make a distinction between a function, which returns a value, and a procedure, which performs some operation but does not return a value."
                    />
                    <input type="submit" value="Register" class="btn btn-info btn-block" />
                  </form>
                  <br>



                </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <!--Topic form-->
      <div class="container-fluid">
        <div class="row centered-form">
          <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-1 col-md-offset-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Topic</small></h3>
              </div>
              <div class="panel-body">

             
                <!--Process page post to here {note action!!!} only one action per form AND Pass data to "select name="*" in each form group. {test and reocrd method}-->


                <div class="col-xs-6 col-sm-12 col-md-12">



                  <!--Process page post to here {note action!!!}-->
                  <h5>Select tech</h5>
                  <form action="/jTable-PHP-Samples/Codes/Topicprocess.php" method="post">
                    <select name="techid" onchange="showTech2(this.value)">
                      <option value="">Select a Tech:</option>
                      <option value="1">net</option>
                      <option value="2">PHP</option>
                      <option value="3">node.js</option>
                      <option value="4">JAVA</option>
                      <option value="5">UserTopic1</option>
                      <option value="6">UserTopic2</option>
                      <option value="7">UserTopic3</option>
                      <option value="8">UserTopic4</option>
                      <option value="9">UserTopic5</option>
                      <option value="10">UserTopic6</option>
                      <option value="11">UserTopic7</option>
                      <option value="12">UserTopic8</option>
                      <option value="13">UserTopic9</option>
                      <option value="14">UserTopic10</option>
                      <option value="15">UserTopic11</option>
                    </select>
                    <div id="txtHint3"><b>Tech info will be listed here...</b></div>
                    <br>
                    <br>
                    <h5>Select Subject</h5>

                    <select name="subjectid" onchange="showSubject(this.value)">
                      <option value="">Select a Subject:</option>
                      <option value="1">UserSubject1</option>
                      <option value="2">UserSubject2</option>
                      <option value="3">UserSubject3</option>
                      <option value="4">UserSubject4</option>
                      <option value="5">UserSubject5</option>
                      <option value="6">UserSubject6</option>
                      <option value="7">UserSubject7</option>
                      <option value="8">UserSubject8</option>
                      <option value="9">UserSubject9</option>
                      <option value="10">UserSubject10</option>
                      <option value="11">UserSubject11</option>
                      <option value="12">UserSubject12</option>
                      <option value="13">UserSubject13</option>
                      <option value="14">UserSubject14</option>
                      <option value="15">UserSubject15</option>
                      <option value="16">UserSubject16</option>
                      <option value="17">UserSubject17</option>
                      <option value="18">UserSubject18</option>
                      <option value="19">UserSubject19</option>
                      <option value="20">UserSubject20</option>
                      <option value="21">UserSubject21</option>
                      <option value="22">UserSubject22</option>
                      <option value="23">UserSubject23</option>
                      <option value="24">UserSubject24</option>
                      <option value="25">UserSubject25</option>
                      <option value="26">UserSubject26</option>
                      <option value="27">UserSubject27</option>
                      <option value="28">UserSubject28</option>
                      <option value="29">UserSubject39</option>
                      <option value="30">UserSubject30</option>
                      <option value="31">UserSubject31</option>
                      <option value="32">UserSubject32</option>
                      <option value="33">UserSubject33</option>
                      <option value="34">UserSubject34</option>
                      <option value="35">UserSubject35</option>
                      <option value="36">UserSubject36</option>
                      <option value="37">UserSubject37</option>
                      <option value="38">UserSubject38</option>
                      <option value="39">UserSubject39</option>
                      <option value="40">UserSubject40</option>
                      <option value="41">UserSubject41</option>
                      <option value="42">UserSubject42</option>
                      <option value="43">UserSubject43</option>
                      <option value="44">UserSubject44</option>
                      <option value="45">UserSubject45</option>
                      <option value="46">UserSubject46</option>
                      <option value="47">UserSubject47</option>
                      <option value="48">UserSubject48</option>
                      <option value="49">UserSubject49</option>
                      <option value="50">UserSubject50</option>
                      <option value="51">UserSubject51</option>
                      <option value="52">UserSubject52</option>
                      <option value="53">UserSubject53</option>
                      <option value="54">UserSubject54</option>
                      <option value="55">UserSubject55</option>
                      <option value="56">UserSubject56</option>
                      <option value="57">UserSubject57</option>
                      <option value="58">UserSubject58</option>
                      <option value="59">UserSubject59</option>
                      <option value="60">UserSubject60</option>
                      <option value="61">UserSubject61</option>
                      <option value="62">UserSubject62</option>
                      <option value="63">UserSubject63</option>
                      <option value="64">UserSubject64</option>
                      <option value="65">UserSubject65</option>
                      <option value="66">UserSubject76</option>
                      <option value="67">UserSubject77</option>
                      <option value="68">UserSubject78</option>
                      <option value="69">UserSubject79</option>
                      <option value="70">UserSubject70</option>
                    </select>
                    <div id="txtHint2"><b>Tech info will be listed here...</b></div>
                    <br>
                    <br>

                    <h5>Add Topic of Study</h5>
                    <h5>Level</h5>

                    <select name="level">
                      <option value="Beginner">Beginner</option>
                      <option value="Hacker">Hacker</option>
                      <option value="Developer">Developer</option>
                      <option value="Master">Master</option>
                    </select>
                    <br>
                    <br> Define your topic
                    <input type="text" name="topicname" class="form-control input-sm" placeholder="Asp.net: Login&Reg" /> Craft How you want content desplayed using Html or use a template.
                    <textarea id="edit" name="topicdesc" class="text" cols="86" rows="20">
                      <h1>Topic1.Name - (Topic1.HtmLTemplate1.Name) Nindo Demo Lvl 1</h1>

                      <p><b>(Topic1.HtmLTemplate1.Description)</b> Template1 is Made to guide the Users Creation Of His/her own Ninja way...<i>"To be a ninja is to Endure"</i>-Naruto45 </p>

                      <p><b>(Topic1.HtmLTemplate1.Level Discription)</b> Level one(begenners) will cover the fundementals throw a Project serving as your first exposere to the Topic as a Proof of concept (POC). This Level One POC will be your refrance point
                        to help you gain begenner <b>experince Points</b> buy doing research and adding to the List of <b>Projects</b> below OR Adding to the List of <b>Resources</b> Bellow through <b>Study</b>. Finnaly, your goal is to </b>create your
                        own PoCs</b> to prove your mastery of the Begenner level. Store Your PoC in the Space Bellow.</p>

                      <p><b>(Topic1.HtmLTemplate1.Goal)</b> The level one Goal (begenner) is to get you an understanding of the basic concepts allowing you to learn by building and understand the order of operations. Next you will need to learn the Domians
                        of the tech. Finally you will understand how to connect data between domains to finsh any begenner level project to level up to someday become a hacker level Blackfoxer.</p>

                      <div>
                        <iframe src='https://trello.com/b/irhVKLcJ.html' frameBorder="0" width='600' height="400"></iframe>
                      </div>
                      <ol>
                        <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link1)</b></li>
                        <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link2)</b> </li>
                        <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link3)</b> </li>
                      </ol>


                      <p>you will gain more expeirnce points buy studying and take detailed notes on the above project. Then trying to create your own PoCs based of your notes! </p>




                      <p>THe Key to progress is to take clean notes and capturing Examples, Explaination and study guild orgained AS YOUR OWN STUDYGUIDE. YOu create your resource <b>design</b> obtimizing it for the problems you need to solove in your study.
                        <u>this is the key to success in life</u>. Organize your resource in one zip file include 1 excel workbook, 1 powerpointside, 1 Onenote tab, one word doc readmefile and one PDF onepage studyguide. <b>(here is a link to the templated examples for each)</b>                        </p>

                      <ol>
                        <li><i>link</i> <b>(Topic1.HtmLTemplate1.PoC Link1)</b></li>
                        <li><i>link</i> <b>(Topic1.HtmLTemplate1.PoC Link2)</b> </li>
                        <li><i>link</i> <b>(Topic1.HtmLTemplate1.PoC Link3)</b> </li>
                      </ol>


                      <p>you will build a resume with PoC to Prove you know the infomation and have the Skills need work as a developer.</p>
                    </textarea>
                    <?php  
$topicdesc = mysql_real_escape_string($_POST['topicdesc']);  
?>


                      <input type="submit" value="Register" class="btn btn-info btn-block" />

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      //
      <!--Project form-->
      <div class="container-fluid">
        <div class="row centered-form">
          <div class="col-xs-12 col-sm-8 col-md-12 ">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Define your Project</small></h3>
              </div>
              <div class="panel-body">

                //
                


                <div class="col-xs-12 col-sm-12 col-md-12">



                  <!--Process page post to here {note action!!!}-->
                  <h5>Select tech</h5>
                  <form action="/jTable-PHP-Samples/Codes/projectprocess.php" method="post">
                    <select name="techid" onchange="showTech3(this.value)">
                      <option value="">Select a Tech:</option>
                      <option value="1">net</option>
                      <option value="2">PHP</option>
                      <option value="3">node.js</option>
                      <option value="4">JAVA</option>
                      <option value="5">UserTopic1</option>
                      <option value="6">UserTopic2</option>
                      <option value="7">UserTopic3</option>
                      <option value="8">UserTopic4</option>
                      <option value="9">UserTopic5</option>
                      <option value="10">UserTopic6</option>
                      <option value="11">UserTopic7</option>
                      <option value="12">UserTopic8</option>
                      <option value="13">UserTopic9</option>
                      <option value="14">UserTopic10</option>
                      <option value="15">UserTopic11</option>
                    </select>
                    <div id="txtHint4"><b>Tech info will be listed here...</b></div>
                    <br>
                    <br>
                    <h5>Select Subject</h5>

                    <select name="Subjectid" onchange="showSubject2(this.value)">
                      <option value="">Select a Subject:</option>
                      <option value="1">UserSubject1</option>
                      <option value="2">UserSubject2</option>
                      <option value="3">UserSubject3</option>
                      <option value="4">UserSubject4</option>
                      <option value="5">UserSubject5</option>
                      <option value="6">UserSubject6</option>
                      <option value="7">UserSubject7</option>
                      <option value="8">UserSubject8</option>
                      <option value="9">UserSubject9</option>
                      <option value="10">UserSubject10</option>
                      <option value="11">UserSubject11</option>
                      <option value="12">UserSubject12</option>
                      <option value="13">UserSubject13</option>
                      <option value="14">UserSubject14</option>
                      <option value="15">UserSubject15</option>
                      <option value="16">UserSubject16</option>
                      <option value="17">UserSubject17</option>
                      <option value="18">UserSubject18</option>
                      <option value="19">UserSubject19</option>
                      <option value="20">UserSubject20</option>
                      <option value="21">UserSubject21</option>
                      <option value="22">UserSubject22</option>
                      <option value="23">UserSubject23</option>
                      <option value="24">UserSubject24</option>
                      <option value="25">UserSubject25</option>
                      <option value="26">UserSubject26</option>
                      <option value="27">UserSubject27</option>
                      <option value="28">UserSubject28</option>
                      <option value="29">UserSubject39</option>
                      <option value="30">UserSubject30</option>
                      <option value="31">UserSubject31</option>
                      <option value="32">UserSubject32</option>
                      <option value="33">UserSubject33</option>
                      <option value="34">UserSubject34</option>
                      <option value="35">UserSubject35</option>
                      <option value="36">UserSubject36</option>
                      <option value="37">UserSubject37</option>
                      <option value="38">UserSubject38</option>
                      <option value="39">UserSubject39</option>
                      <option value="40">UserSubject40</option>
                      <option value="41">UserSubject41</option>
                      <option value="42">UserSubject42</option>
                      <option value="43">UserSubject43</option>
                      <option value="44">UserSubject44</option>
                      <option value="45">UserSubject45</option>
                      <option value="46">UserSubject46</option>
                      <option value="47">UserSubject47</option>
                      <option value="48">UserSubject48</option>
                      <option value="49">UserSubject49</option>
                      <option value="50">UserSubject50</option>
                      <option value="51">UserSubject51</option>
                      <option value="52">UserSubject52</option>
                      <option value="53">UserSubject53</option>
                      <option value="54">UserSubject54</option>
                      <option value="55">UserSubject55</option>
                      <option value="56">UserSubject56</option>
                      <option value="57">UserSubject57</option>
                      <option value="58">UserSubject58</option>
                      <option value="59">UserSubject59</option>
                      <option value="60">UserSubject60</option>
                      <option value="61">UserSubject61</option>
                      <option value="62">UserSubject62</option>
                      <option value="63">UserSubject63</option>
                      <option value="64">UserSubject64</option>
                      <option value="65">UserSubject65</option>
                      <option value="66">UserSubject76</option>
                      <option value="67">UserSubject77</option>
                      <option value="68">UserSubject78</option>
                      <option value="69">UserSubject79</option>
                      <option value="70">UserSubject70</option>
                    </select>
                    <div id="txtHint5"><b>Tech info will be listed here...</b></div>
                    <br>
                    <br>

                    <h5>Add Topic of Study</h5>
                    <h5>Level</h5>

                    <select name="Level">
                      <option value="Beginner">Beginner</option>
                      <option value="Hacker">Hacker</option>
                      <option value="Developer">Developer</option>
                      <option value="Master">Master</option>
                    </select>
                    <br>
                    <select name="topicid" onchange="showTemplate(this.value)">
                      <option value="">Select Topic Template:</option>
                      <option value="1">net Topic1</option>
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
                    <div id="txtHint6"><b>Topic Template will Display here...</b></div>



                </div>

              </div>
              <!-- fim div da esquerda -->










              Project Name
              <input type="text" name="ProjectName" class="form-control input-sm" placeholder="Asp.net: Login&Reg" /> Craft How you want content desplayed using Html or use a template.
              <textarea id="edit" name="ProjectDescription" class="text" cols="86" rows="20">
                <h1>Project1.Name - (Project1.HtmLTemplate1.Name) Nindo Demo Lvl 1</h1>

                <p><b>(Project1.HtmLTemplate1.Description)</b> Template1 is Made to guide the Users Creation Of His/her own Ninja way...<i>'To be a ninja is to Endure'</i>-Naruto45 </p>

                <p><b>(Project1.HtmLTemplate1.Level Discription)</b> Level one(begenners) will cover the fundementals throw a Project serving as your first exposere to the Topic as a Proof of concept (POC). This Level One POC will be your refrance point
                  to help you gain begenner <b>experince Points</b> buy doing research and adding to the List of <b>Projects</b> below OR Adding to the List of <b>Resources</b> Bellow through <b>Study</b>. Finnaly, your goal is to </b>create your own
                  PoCs</b> to prove your mastery of the Begenner level. Store Your PoC in the Space Bellow.</p>

                <p><b>(Project1.HtmLTemplate1.Goal)</b> The level one Goal (begenner) is to get you an understanding of the basic concepts allowing you to learn by building and understand the order of operations. Next you will need to learn the Domians of
                  the tech. Finally you will understand how to connect data between domains to finsh any begenner level project to level up to someday become a hacker level Blackfoxer.</p>

                <div>
                  <iframe src='https://trello.com/b/irhVKLcJ.html' frameBorder='0' width='600' height='400'></iframe>
                </div>
                <ol>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link1)</b></li>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link2)</b> </li>
                  <li><i>link</i> <b>(Topic1.HtmLTemplate1.Project Link3)</b> </li>
                </ol>


                <p>you will gain more expeirnce points buy studying and take detailed notes on the above project. Then trying to create your own PoCs based of your notes! </p>




                <p>THe Key to progress is to take clean notes and capturing Examples, Explaination and study guild orgained AS YOUR OWN STUDYGUIDE. YOu create your resource <b>design</b> obtimizing it for the problems you need to solove in your study. <u>this is the key to success in life</u>.
                  Organize your resource in one zip file include 1 excel workbook, 1 powerpointside, 1 Onenote tab, one word doc readmefile and one PDF onepage studyguide. <b>(here is a link to the templated examples for each)</b> </p>

                <ol>
                  <li><i>link</i> <b>(Project1.HtmLTemplate1.PoC Link1)</b></li>
                  <li><i>link</i> <b>(Project1.HtmLTemplate1.PoC Link2)</b> </li>
                  <li><i>link</i> <b>(Project1.HtmLTemplate1.PoC Link3)</b> </li>
                </ol>


                <p>you will build a resume with PoC to Prove you know the infomation and have the Skills need work as a developer.</p>
              </textarea>
              <?php  
$ProjectDescription = mysql_real_escape_string($_POST['ProjectDescription']);  
?>


                <input type="submit" value="Register" class="btn btn-info btn-block" />

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="col-xs-12 col-sm-8 col-md-12  ">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">storycode</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="/jTable-PHP-Samples/Codes/codeprocess.php" method="post">
        <select name="techid">
        	<option value="1">Tech</option>
        	<option value="2">Net</option>
		<option value="3">PHP</option>
		<option value="4">Mean</option>
		</select>
		<select name="SubjectID">
		<option value="1">Subject</option>
        	<option value="2">Asp.net</option>
		<option value="3">MySQL</option>
		<option value="4">Node.js</option>
		</select>
		<select name="topicid">
		<option value="">Topic</option>
        	<option value="2">Planing</option>
		<option value="3">Research</option>
		<option value="4">Design</option>
		<option value="5">Fundemental</option>
		<option value="6">Routeing</option>
		<option value="7">Debuging</option>
		<option value="8">APIs</option>
		<option value="9">Services</option>
		</select>
		<select name="Projectid">
		<option value="">Project</option>
		<option value="1">1</option>
		<option value="2">2</option>
		</select>
		<br>
		
		
			
			<label for="i0" class="col1"><b>UserStory</b></label>
			
			<input name="userstory" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid">
        	<option value="1">Fundamental Concept</option>
        	<option value="2">Project Research</option>
		<option value="3">Terminal</option>
		<option value="4">"C"</option>
		<option value="5">Asp.net</option>
		<option value="6">Scenario</option>
		<option value="7">Confused</option>
		<option value="8">Executed</option>
		<option value="9">Issue</option>
		<option value="10">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		
		<br>
		<label for="i0" class="col1"><b>Requerment</b></label>
		
		<input name="requirement" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid2">
        	<option value="1">Fundamental Concept</option>
        	<option value="2">Project Research</option>
		<option value="3">Terminal</option>
		<option value="4">c</option>
		<option value="5">Asp.net</option>
		<option value="6">Scenario</option>
		<option value="7">Confused</option>
		<option value="8">Executed</option>
		<option value="9">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>Code</b></label>
		
		<input name="code" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid3">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="">C</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>Description</b></label>
		
		<input name="CodeDefinition" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid4">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="C">"C"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 1</b></label>
		
		<input name="CodeDef" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="C">"C"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 2</b></label>
		
		<input name="CodeDef2" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="C">"C"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 3</b></label>
		
		<input name="CodeDef3" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="C">"C"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 4</b></label>
		
		<input name="CodeDef4" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="C">"C"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 5</b></label>
		
		<input name="CodeDef5" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="C">"C"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="Scenario">Scenario</option>
		<option value="Confused">Confused</option>
		<option value="Executed">Executed</option>
		<option value="Issue">Issue</option>
		<option value="Example">Example</option>
		<option value="file">file</option>
		<option value="Code">Code</option>
		<option value="CodeDefinition">CodeDefinition</option>
		<option value="Function">Function</option>
		<option value="Function pramitor">Function pramitor</option>
		<option value="Method">Method</option>
		<option value="loop">loop</option>
		<option value="loop Condetion">loop Condetion</option>
		<option value="NameSpace">NameSpace</option>
		<option value="Class">Class</option>
		<option value="variable String">variable String</option>
		<option value="Declare a variable">Declare a variable</option>
		<option value="Varable Datatype">Varable Datatype</option>
		<option value="Varable Injction">Varable Injction</option>
		<option value="Tokens">Tokens</option>
		<option value="Conditionals">Conditionals</option>
		<option value="logical condition">logical condition</option>
		<option value="comparison operations">comparison operations</option>
		<option value="respective variables">respective variables</option>
		<option value="for loop">for loop</option>
		<option value="While loop">While loop</option>
		<option value="Session">Session</option>
		<option value="Error handling">Error handling</option>
		<option value="Validation">Validation</option>
		<option value="Debuging">Debuging</option>
		<option value="Testing">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 6</b></label>
		
		<input name="CodeDef6" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="C">"C"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="Scenario">Scenario</option>
		<option value="Confused">Confused</option>
		<option value="Executed">Executed</option>
		<option value="Issue">Issue</option>
		<option value="Example">Example</option>
		<option value="file">file</option>
		<option value="Code">Code</option>
		<option value="CodeDefinition">CodeDefinition</option>
		<option value="Function">Function</option>
		<option value="Function pramitor">Function pramitor</option>
		<option value="Method">Method</option>
		<option value="loop">loop</option>
		<option value="loop Condetion">loop Condetion</option>
		<option value="NameSpace">NameSpace</option>
		<option value="Class">Class</option>
		<option value="variable String">variable String</option>
		<option value="Declare a variable">Declare a variable</option>
		<option value="Varable Datatype">Varable Datatype</option>
		<option value="Varable Injction">Varable Injction</option>
		<option value="Tokens">Tokens</option>
		<option value="Conditionals">Conditionals</option>
		<option value="logical condition">logical condition</option>
		<option value="comparison operations">comparison operations</option>
		<option value="respective variables">respective variables</option>
		<option value="for loop">for loop</option>
		<option value="While loop">While loop</option>
		<option value="Session">Session</option>
		<option value="Error handling">Error handling</option>
		<option value="Validation">Validation</option>
		<option value="Debuging">Debuging</option>
		<option value="Testing">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 7</b></label>
		
		<input name="CodeDef7" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="c">"c"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 8</b></label>
		
		<input name="CodeDef8" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="Fundamental Concept">Fundamental Concept</option>
        	<option value="Project Research">Project Research</option>
		<option value="Terminal">Terminal</option>
		<option value="c">"c"</option>
		<option value="Asp.net">Asp.net</option>
		<option value="">Scenario</option>
		<option value="">Confused</option>
		<option value="">Executed</option>
		<option value="">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		<label for="i0" class="col1"><b>CodeDef Var 9</b></label>
		
		<input name="CodeDef9" id="i0" class="col1" type="text" value="why are you building"/>
			<label for="i2" class="col2">CodeTags</label>
			<select name="Rubricid5">
        	<option value="1">Fundamental Concept</option>
        	<option value="2">Project Research</option>
		<option value="3">Terminal</option>
		<option value="4">"c"</option>
		<option value="5">Asp.net</option>
		<option value="6">Scenario</option>
		<option value="7">Confused</option>
		<option value="8">Executed</option>
		<option value="9">Issue</option>
		<option value="">Example</option>
		<option value="">file</option>
		<option value="">Code</option>
		<option value="">CodeDefinition</option>
		<option value="">Function</option>
		<option value="">Function pramitor</option>
		<option value="">Method</option>
		<option value="">loop</option>
		<option value="">loop Condetion</option>
		<option value="">NameSpace</option>
		<option value="">Class</option>
		<option value="">variable String</option>
		<option value="">Declare a variable</option>
		<option value="">Varable Datatype</option>
		<option value="">Varable Injction</option>
		<option value="">Tokens</option>
		<option value="">Conditionals</option>
		<option value="">logical condition</option>
		<option value="">comparison operations</option>
		<option value="">respective variables</option>
		<option value="">for loop</option>
		<option value="">While loop</option>
		<option value="">Session</option>
		<option value="">Error handling</option>
		<option value="">Validation</option>
		<option value="">Debuging</option>
		<option value="">Testing</option>
		
		
		</select>
		<br>
		
		<input type="submit" name="submit" value="Register" class="btn btn-info btn-block" />
		
		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>		

  </body>

  </html>

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

          <textarea id="edit" class="language-markup" name="content"></textarea>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


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

  <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>

  <script src="Assets/js/index.js"></script>



  <script src="Assets/content-tools.min.js"></script>
  <script src="Assets/editor.js"></script>


  <script>


  </script>

  <script>


  </Script>
