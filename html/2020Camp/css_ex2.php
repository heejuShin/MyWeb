<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSS Exercise2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  #rcorners1 {
    border-radius: 25px;
    background: #73AD21;
    padding: 20px;
    width: 200px;
    height: 150px;
  }

  #rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px;
    width: 200px;
    height: 150px;
  }

  #rcorners3 {
    border-radius: 25px;
    background: url(./img/universe.jpg);
    background-position: left top;
    background-repeat: repeat;
    color:white;
    padding: 20px;
    width: 200px;
    height: 150px;
  }

  #borderimg {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(https://www.w3schools.com/css/border.png) 30 round;
  }

  #borderimg2 {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(https://www.w3schools.com/css/border.png) 30 stretch;
  }

  #example1 {
  background: url(https://www.w3schools.com/css/img_tree.gif) left top no-repeat, url(https://www.w3schools.com/css/img_flwr.gif) right bottom no-repeat, url(https://www.w3schools.com/css/paper.gif) left top repeat;
  padding: 15px;
  background-size: 50px, 130px, auto;
  }

  #example2 {
  border: 1px solid black;
  background:url(https://www.w3schools.com/css/img_flwr.gif);
  background-size: 100px 80px;
  background-repeat: no-repeat;
  padding:15px;
  }

  #example3 {
    border: 1px solid black;
    background:url(https://www.w3schools.com/css/img_flwr.gif);
    background-repeat: no-repeat;
    padding:15px;
  }

  #grad1 {
  height: 200px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(red, yellow); /* Standard syntax (must be last) */
  }

  #grad2 {
    height: 200px;
    background-color: red; /* For browsers that do not support gradients */
    background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); /* Standard syntax (must be last) */
  }

  #grad3 {
    height: 200px;
    width: 200px;
    background-color: red; /* For browsers that do not support gradients */
    background-image: radial-gradient(circle, red, yellow, green); /* Standard syntax (must be last) */
  }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>CSS Exercise2</h1>
  <p>2020 web camp</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>CSS Rounded Corners1</h3>
      <p>Rounded corners for an element with a specified background color:</p>
      <p id="rcorners1">Rounded corners!</p>
    </div>
    <div class="col-sm-4">
      <h3>CSS Rounded Corners2</h3>
      <p>Rounded corners for an element with a border:</p>
      <p id="rcorners2">Rounded corners!</p>
    </div>
    <div class="col-sm-4">
      <h3>CSS Rounded Corners3</h3>
      <p>Rounded corners for an element with a background image:</p>
      <p id="rcorners3">Rounded corners!</p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The border-image Property</h3>
      <p>Here, the middle sections of the image are repeated to create the border:</p>
      <p id="borderimg">border-image: url(border.png) 30 round;</p>
    </div>
    <div class="col-sm-4">
      <h3>The border-image Property</h3>
      <p>Here, the middle sections of the image are stretched to create the border:</p>
      <p id="borderimg2">border-image: url(border.png) 30 stretch;</p>
    </div>
    <div class="col-sm-4">
      <h3>Original Image</h3>
      <p>Here is the original image:</p><img src="https://www.w3schools.com/css/border.png">
      <p><strong>Note:</strong> Internet Explorer 10, and earlier versions, do not support the border-image property.</p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Multiple Background</h3>
      <div id="example1">
        <h1>Lorem Ipsum Dolor</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <h3>Background Size1</h3>
      <div id="example2">
        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <h3>Background Size2</h3>
      <div id="example3">
        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Linear Gradient <br>- Top to Bottom</h3>
      <div id="grad1"></div>
    </div>
    <div class="col-sm-4">
      <h3>Gradient <br>- several Color</h3>
      <div id="grad2" style="text-align:center;margin:auto;color:#888888;font-size:40px;font-weight:bold">
      Gradient Background
      </div>
    </div>
    <div class="col-sm-4">
      <h3>Radient Gradient<br>-Circle:</h3>
      <div id="grad3"></div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Text Shadow</h3>
      <h4 style="text-shadow: 2px 2px;">Text-shadow effect!</h4>
      <h4 style="text-shadow: 2px 2px 5px red;">Text-shadow effect!</h4>
      <h4 style="color: white;text-shadow: 2px 2px 4px #000000;">Text-shadow effect!</h4>
      <h4 style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">Text-shadow effect!</h4>
      <h4 style="color: yellow;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Text-shadow effect!</h4>
    </div>
    <div class="col-sm-4">
      <h3>Box Shadow</h3>
      <div style="  width: 200px;
      height: 100px;
      padding: 15px;
      background-color: yellow;
      box-shadow: 10px 10px;">This is a div element with a box-shadow</div>
      <br>
      <div style="  width: 200px;
      height: 100px;
      padding: 15px;
      background-color: yellow;
      box-shadow: 10px 10px 5px grey;">This is a div element with a box-shadow</div>
      </div>
      <div class="col-sm-4">
        <h3>Column 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
  </div>
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<p style="text-align:center"><a href="./index.php">홈으로</a>
</p>

</body>
</html>
