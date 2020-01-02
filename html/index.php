<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
    button{width:60px; height:50px; font-size:15px;
      text-align: center; vertical-align: center;}
    a:link{color: black; text-decoration: none;}
    a:visited{color: black; text-decoration: none;}
    a:a:hover{color: black; text-decoration: none;}
    a:active{color: black; text-decoration: none;}

    .flex{
      display:flex;
    }
    .element{
      margin-right:20px;
      text-align:center;
    }

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
    text-align:center;
    }
  </style>
</head>
<body>
  <div class="fixed">
  <h3>페이지 이동이 되지 않는다면<br>아래 버튼을 누른 뒤 다시 시도해보세용
    <button style="height:30px"><a href="/index.php">Reset</a></button>
  <h3>
  </div>

  <h1>프로젝트</h1>
    <div class="flex">
      <div class="element">
        <h2>Coding Clinic</h2>
        <button><a href="./CC/index.php">Click<br>Me!</a></button>
      </div>

      <div class="element">
      <h2>2020 Web Camp</h2>
      <button><a href="./2020Camp/index.php">Click<br>Me!</a></button>
      </div>

      <div class="element">
      <h2>Chakancha</h2>
      <button><a href="./chakancha/index.php">Click<br>Me!</a></button>
      </div>
  </div>
  <br>
  comming soon...
</body>
</html>
