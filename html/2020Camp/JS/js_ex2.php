<!DOCTYPE html>
<html>
<head>
  <title>JS ex2</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 5px;
    text-align: left;
  }
  p.bold{
    color:#e85743;
    font-weight:bold;
  }
  p.bold2{
    color:#ed8d39;
    font-weight:bold;
  }
  p.bold3{
    color:#d1c956;
    //font-weight:bold;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>JS DOM Exercise</h1>
  <p>2020 web camp</p>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Finding HTML Elements by Id</h3>
        <p id="intro">Hello World!</p>
        <p>This example demonstrates the <b>getElementsById</b> method.</p>

        <p class="bold" id="demo"></p>

        <script>
        var myElement = document.getElementById("intro");
        document.getElementById("demo").innerHTML =
        "The text from the intro paragraph is " + myElement.innerHTML;
        </script>
    </div>
    <div class="col-sm-4">
      <h3>Finding HTML Elements by Tag Name</h3>

      <p>Hello World!</p>
      <p>This example demonstrates the <b>getElementsByTagName</b> method.</p>
      <p class="bold" id="demo2"></p>

      <script>
      var x = document.getElementsByTagName("p");
      document.getElementById("demo2").innerHTML =
      'The text in first paragraph (index 0) is: ' + x[0].innerHTML;
      </script>
    </div>
    <div class="col-sm-4">
      <h3>Finding HTML Elements by Tag Name</h3>
      <div id="main">
      <p>The DOM is very useful.</p>
      <p>This example demonstrates the <b>getElementsByTagName</b> method.</p>
      </div>

      <p class="bold" id="demo3"></p>

      <script>
      var x = document.getElementById("main");
      var y = x.getElementsByTagName("p");
      document.getElementById("demo3").innerHTML =
      'The first paragraph (index 0) inside "main" is: ' + y[0].innerHTML;
      </script>
    </div>
  </div>
</div>
<br><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Finding HTML Elements by Class Name</h3>
      <p>Hello World!</p>

      <p class="intro">The DOM is very useful.</p>
      <p class="intro">This example demonstrates the <b>getElementsByClassName</b> method.</p>

      <p class="bold2" id="demo4"></p>

      <script>
      var x = document.getElementsByClassName("intro");
      document.getElementById("demo4").innerHTML =
      'The first paragraph (index 0) with class="intro": ' + x[0].innerHTML;
      </script>
    </div>
    <div class="col-sm-4">
      <h3>Finding HTML Elements by Query Selector</h3>
      <p>Hello World!</p>

      <p class="intro2">The DOM is very useful.</p>
      <p class="intro2">This example demonstrates the <b>querySelectorAll</b> method.</p>

      <p class="bold2" id="demo5"></p>

      <script>
      var x = document.querySelectorAll("p.intro2");
      document.getElementById("demo5").innerHTML =
      'The first paragraph (index 0) with class="intro": ' + x[0].innerHTML;
      </script>
    </div>

    <div class="col-sm-4">
    <h3>Finding HTML Elements Using document.forms</h3>
    <form id="frm1">
      First name: <input type="text" name="fname" value="Donald"><br>
      Last name: <input type="text" name="lname" value="Duck"><br><br>
      <input type="submit" value="Submit">
    </form>

    <p>Click "Try it" to display the value of each element in the form.</p>

    <button onclick="myFunction2()">Try it</button>

    <p class="bold2" id="demo6"></p>

    <script>
    function myFunction2() {
      var x = document.forms["frm1"];
      var text = "";
      var i;
      for (i = 0; i < x.length ;i++) {
        text += x.elements[i].value + " ";
      }
      document.getElementById("demo6").innerHTML = text;
    }
    </script>
  </div>
  </div>
</div>
<br><br>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Date</h3>
      <p class="bold3" id="date"></p>
      <div style="margin-left:10px"><button onclick="document.getElementById('date').innerHTML=Date();">Click me</button></div>
      <img style="margin:10px"src="https://cdn.pixabay.com/photo/2017/12/26/10/20/time-3040144__480.jpg" width=200px; height:200px;>
    </div>
    <div class="col-sm-4">
      <h3>Changing the Value of an Attribute</h3>
      <div style="margin-bottom:10px">
      <img id="image" src="https://www.w3schools.com/js/smiley.gif" width="160" height="120"></div>
      <button onclick="changeImg()">Click me</button>
      <script>
      function changeImg(){
        document.getElementById("image").src = "https://www.w3schools.com/js/landscape.jpg";
      }
      </script>
      <p>The original image was smiley.gif, but the script changed it to landscape.jpg</p>
    </div>
    <div class="col-sm-4">
      <h3>Change Style</h3>
      <p>
        <p id="demo7">JavaScript can change the style of an HTML element.</p>

        <button type="button" onclick="document.getElementById('demo7').style.backgroundColor='yellow'">Click Me!</button>
      </p>
    </div>
  </div>
</div>
<br><br>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>My First JavaScript Animation</h3>
      <style>
        #container{
          width:210px;
          height:210px;
          position:relative;
          background:#6bb079;
        }
        #animate{
          width:30px;
          height:30px;
          position:absolute;
          background-color:lightgray;
        }
      </style>

      <p><button onclick="myMove()">Click Me</button></p>

      <div id="container">
        <div id="animate"></div>
      </div>
      <script>
        function myMove(){
          var elem = document.getElementById("animate");
          var pos=0;
          var id = setInterval(frame, 5);
          function frame(){
            if(pos==180){
              clearInterval(id);
            }
            else{
              pos++;
              elem.style.top=pos+"px";
              elem.style.left=pos+"px";
            }
          }
        }
        </script>

    </div>
    <div class="col-sm-4">
      <h3>The onchange Event</h3>
      <script>
      function myFunction3() {
        var x = document.getElementById("fname");
        x.value = x.value.toUpperCase();
      }
      </script>
      <br>
      Enter your name: <input style="background-color:#6bb079; color:white;" type="text" id="fname" onchange="myFunction3()">

      <p><br>When you leave the input field, a function is triggered which transforms the input text to upper case.</p>
    </div>

    <div class="col-sm-4">
      <h3>MouseOver and Click</h3>
      <div onmouseover="mOver(this)" onmouseout="mOut(this)"
      style="background-color:#6bb079;width:120px;height:50px;padding:0px;text-align:center;vertical-align:center">
      Mouse Over Me</div>

      <script>
      function mOver(obj) {
        obj.innerHTML = "Thank You"
      }

      function mOut(obj) {
        obj.innerHTML = "Mouse Over Me"
      }
      </script>
      <br>

      <div onmousedown="mDown(this)" onmouseup="mUp(this)"
      style="background-color:#6bb079;width:120px;height:50px;padding:0px;text-align:center">
      Click Me</div>

      <script>
      function mDown(obj) {
        obj.style.backgroundColor = "lightgray";
        obj.innerHTML = "Release Me";
      }

      function mUp(obj) {
        obj.style.backgroundColor="#6bb079";
        obj.innerHTML="Already Clicked";
      }
      </script>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>DOM Event</h3>
      <p>document.getElementById("myBtn").onclick=functionName;</p>
      <p>document.getElementById("myBtn").addEventListener("click",functionName);</p>
    </div>
    <div class="col-sm-4">
      <h3>Block-level Tag</h3>
      <p>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Inline Tag</h3>
      <p></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Form</h3>
      <p></p>
    </div>
    <div class="col-sm-4">
      <h3>Block-level Tag</h3>
      <p>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Inline Tag</h3>
      <p></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Form</h3>
      <p></p>
    </div>
    <div class="col-sm-4">
      <h3>Block-level Tag</h3>
      <p>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Inline Tag</h3>
      <p></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Form</h3>
      <p></p>
    </div>
    <div class="col-sm-4">
      <h3>Block-level Tag</h3>
      <p>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Inline Tag</h3>
      <p></p>
    </div>
  </div>
</div>


<p style="text-align:center"><a href="../index.php">홈으로</a>
</p>

</body>
</html>
