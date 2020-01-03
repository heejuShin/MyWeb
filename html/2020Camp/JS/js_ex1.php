<!DOCTYPE html>
<html>
<head>
  <title>JS ex1</title>
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
  </style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Java Script Exercise1</h1>
  <p>2020 web camp</p>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Change Text</h3>
      <p id="demo">JavaScript can change HTML content.</p>
      <button type="button" onclick="document.getElementById('demo').innerHTML = 'Hello JavaScript!'">Click Me!</button>
    </div>
    <div class="col-sm-4">
      <h3>Change Img</h3>
      <p>
        <div>
        <img id="myImage" src="https://www.w3schools.com/js/pic_bulboff.gif" style="width:100px"></div>

        <button onclick="document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulbon.gif'">Turn on the light</button>
        <button onclick="document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulboff.gif'">Turn off the light</button>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Change Style</h3>
      <p>
        <p id="demo2">JavaScript can change the style of an HTML element.</p>

        <button type="button" onclick="document.getElementById('demo2').style.backgroundColor='yellow'">Click Me!</button>
      </p>
    </div>
  </div>
</div>
<br><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Hide & Show</h3>
      <p id="demo3">JavaScript can hide HTML elements.</p>
      <p><button type="button" onclick="change()">Click Me!</button></p>
      <script>
      function change(){
        var status = document.getElementById('demo3');
        if(status.style.display=='none')
          status.style.display='block';
        else {
          status.style.display='none';
        }
      }
      </script>
    </div>
    <div class="col-sm-4">
      <h3>Using innerHTML</h3>
      <p id="demo4">My first paragraph.</p>
      <button type="button" onclick="document.getElementById('demo4').innerHTML='inner HTML'">Try it</button>
    </div>
    <div class="col-sm-4">
      <h3>Using document.write()</h3>
      <p>My first paragraph.</p>
      <button type="button" onclick="document.write('document.write!')">Try it</button>
    </div>
  </div>
</div>
<br><br>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Using window.alert()</h3>
      <p>My first paragraph.</p>
      <button type="button" onclick="doAlert()">Try it</button>

      <script>
      function doAlert(){
        window.alert("alert!");
      }
      </script>
    </div>
    <div class="col-sm-4">
      <h3>Using console.log()</h3>
      <h5>Activate debugging with F12</h5>

      <p>Select "Console" in the debugger menu. Then click Run again.</p>
      <button type="button" onclick="Console()">Run</button>


      <script>
      function Console(){
        console.log("console log");
      }
      </script>
    </div>
    <div class="col-sm-4">
      <h3>Javscript Statements</h3>
      <p>JavaScript code blocks are written between { and }</p>

      <button type="button" onclick="myFunction()">Click Me!</button>

      <p id="demo5"></p>
      <p id="demo6"></p>
    </div>

    <script>
    function myFunction() {
      document.getElementById("demo5").innerHTML = "Hello Dolly!";
      document.getElementById("demo6").innerHTML = "How are you?";
    }
    </script>
  </div>
</div>
<br><br>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>JavaScript Numbers</h3>
      <p>Extra large or extra small numbers can be written with scientific (exponential) notation:</p>

      <p id="number"></p>
      123e5<br>123e-5

      <script>
      var y = 123e5;
      var z = 123e-5;

      document.getElementById("number").innerHTML =
      y + "<br>" + z;
      </script>

    </div>
    <div class="col-sm-4">
      <h3>JavaScript Object</h3>
      var car = {type:"Fiat", model:"500", color:"white"};
      document.getElementById("demo").innerHTML = "The car type is " + car.type;

      <br><p style="color:red" id="object"></p>
    </div>
    <script>
      // Create an object:
      var car = {type:"Fiat", model:"500", color:"white"};

      // Display some data from the object:
      document.getElementById("object").innerHTML = "The car type is " + car.type;
      </script>
    <div class="col-sm-4">
      <h3></h3>
      <p></p>
    </div>
  </div>
</div>

<!--
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
</div>-->


<p style="text-align:center"><a href="../index.php">홈으로</a>
</p>

</body>
</html>
