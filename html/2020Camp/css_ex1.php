<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSS Exercise1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <style>
  div.fixed {
  position: fixed;
  background:lightgray;
  bottom: 10px;
  right: 10px;
  width: 300px;
  height:100px;
  float:right;
  border: 3px solid black;
  z-index:100;
  }
  a#a1:link {
  color: red;
  }

  /* visited link */
  a#a1:visited {
    color: green;
  }

  /* mouse over link */
  a#a1:hover {
    color: hotpink;
  }

  /* selected link */
  a#a1:active {
    color: blue;
  }

  a#a2:link, a#a2:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }

  a#a2:hover, a#a2:active {
    background-color: red;
  }

  ol {
  background: #ff9999;
  padding: 20px;
  }

  ul {
    background: #3399ff;
    padding: 20px;
  }

  ol li {
    background: #ffe5e5;
    padding: 5px;
    margin-left: 35px;
  }

  ul li {
    background: #cce5ff;
    margin: 5px;
  }

  table {
  border-collapse: collapse;
  width: 100%;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
    background-color: #4CAF50;
    color: white;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>CSS Exercise1</h1>
  <p>2020 web camp</p>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3 style="color:lightblue; font-style:italic">CSS Syntax</h3>
      <p>h3 <br>{color:lightblue; font-style:italic}</p>
      <p style="color:gray; font-weight:lighter;">p <br> {color:gray; font-weight:lighter;}</p>
    </div>
    <div class="col-sm-4">
      <h3 style="background-color: lightgreen;">CSS background-color example!</h3>
      <div style="background-color: lightblue;">This is a text inside a div element.
        <p style="background-color: yellow;">This paragraph has its own background color.</p>
        We are still in the div element.</div><br>
    </div>
    <div class="col-sm-4">
      <h3>CSS Background</h3>
      <div style="width:300px;height:150px;background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWF1knDXcTemJATyhDUZuOG-uxuubbIAoGE2MZVxxbWPIvaels&s');">
        <p style="text-align:center;">image background</p>
        <div class="fixed">
        <h2>This div element has position: fixed;<h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>CSS Borders1</h3>
      <p style="border-style: dotted;">A dotted border.</p>
      <p style="border-style: dashed;">A dashed border.</p>
      <p style="border-style: solid;">A solid border.</p>
      <p style="border-style: double;">A double border.</p>
      <p style="border-style: groove;">A groove border.</p>
    </div>
    <div class="col-sm-4">
      <h3>CSS Borders2</h3>
      <p style="border-style: ridge;">A ridge border.</p>
      <p style="border-style: inset;">An inset border.</p>
      <p style="border-style: outset;">An outset border.</p>
      <p style="border-style: none;">No border.</p>
      <p style="border-style: hidden;">A hidden border.</p>
      <p style="border-style: dotted dashed solid double;">A mixed border.</p>
    </div>
    <div class="col-sm-4">
      <h3>Text</h3>
      <div style="letter-spacing:3px">letter spacing 3px</div>
      <div style="letter-spacing:-2px">letter spacing -2px</div>
      <div style="text-transform:uppercase">uppsercase</div>
      <div style="text-transform:lowercase">lowercase</div>
      <div style="text-transform:capitalize">capitalize</div>
      <div style="direction:rtl">lefttoright</div>
      <div style="text-shadow:3px 2px pink">text shadow</div>
      <div style="text-decoration:overline">overline</div>
      <div style="text-decoration:line-through">line-through</div>
      <div style="text-decoration:underline">underline</div>

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Margin</h3>
          <div style="border: 1px solid black;margin: 25px 50px 75px 100px;background-color: lightblue;">This div element has a top margin of 25px, a right margin of 50px, a bottom margin of 75px, and a left margin of 100px.</div>
    </div>
    <div class="col-sm-4">
      <h3>Padding</h3>
      <div style="border: 1px solid black;padding: 25px 50px 75px 100px;background-color: lightblue;">This div element has a top padding of 25px, a right padding of 50px, a bottom padding of 75px, and a left padding of 100px.</div>
    </div>
    <div class="col-sm-4">
      <h3>Icons</h3>
      <p>Font Awesome Icons<br>
      <i class="fas fa-cloud"></i>
      <i class="fas fa-heart"></i>
      <i class="fas fa-car"></i>
      <i class="fas fa-file"></i>
      <i class="fas fa-bars"></i></p>
      <p>Bootstrap Icons<br>
        <i class="glyphicon glyphicon-cloud"></i>
        <i class="glyphicon glyphicon-remove"></i>
        <i class="glyphicon glyphicon-user"></i>
        <i class="glyphicon glyphicon-envelope"></i>
        <i class="glyphicon glyphicon-thumbs-up"></i>
      </p>
      <p>Google Icons<br>
        <i class="material-icons">cloud</i>
        <i class="material-icons">favorite</i>
        <i class="material-icons">attachment</i>
        <i class="material-icons">computer</i>
        <i class="material-icons">traffic</i>
      </p>
    </div>
  </div>
</div>

<div class="container">
  <h3>MAX-length</h3>
  <div style="border:3px solid red;"> Block-Level </div><br>
  <div style="width:600px; border:3px solid green;"> With width</div><br>
  <div style="max-width:600px; border:3px solid blue;"> With max-width</div><br>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Links</h3>
      <p><b><a style="color:hotpink;"href="./" target="_blank">This is a link</a></b></p>
      <p><b><a id="a1" href="./" target="_blank">This is a link</a></b></p>
      <p>A link styled as a button:</p>
      <a id="a2" href="./" target="_blank">This is a link</a>
    </div>
    <div class="col-sm-4">
      <h3>Styling Lists With Colors:</h3>
      <ol>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Coca Cola</li>
      </ol>

      <ul>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Coca Cola</li>
      </ul>
    </div>
    <div class="col-sm-4">
      <h3>Colored Table Header</h3>
      <table>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Savings</th>
        </tr>
        <tr>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
        </tr>
        <tr>
          <td>Lois</td>
          <td>Griffin</td>
          <td>$150</td>
        </tr>
        <tr>
          <td>Joe</td>
          <td>Swanson</td>
          <td>$300</td>
        </tr>
        <tr>
          <td>Cleveland</td>
          <td>Brown</td>
          <td>$250</td>
      </tr>
      </table>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3></h3>
    </div>
    <div class="col-sm-4">
      <h3></h3>
    </div>
    <div class="col-sm-4">
      <h3></h3>
    </div>
  </div>
</div>
<p style="text-align:center"><a href="./index.php">홈으로</a>
</p>
</body>
</html>
