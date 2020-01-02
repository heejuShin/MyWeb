<!DOCTYPE html>
<html>
<head>
  <title>HTML ex1</title>
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
  <h1>HTML Exercise1</h1>
  <p>2020 web camp</p>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Heading</h3>
      <p>숫자가 클 수록 작은 헤딩이 만들어집니다 <br>&#60;h1>&#60;h2>등을 사용해서 헤딩을 만들어보세요</p>
      <p>&#60;p>태그를 이용하여 단락을 표시할 수 있습니다</p>
    </div>
    <div class="col-sm-4">
      <h3><button>Button</button>버튼</h3>
      <p><a href="https://dynalist.io/d/7zzOpsKHCQVuuximoW4Yt5gb">태그 정리</a><Br>&#60;a>태그를 사용하여 링크를 표시할 수 있습니다</p>
      <p><image src="./img/dormitory.png" width=90 height=100>이미지도 나타낼 수 있어요!</p>
    </div>
    <div class="col-sm-4">
      <h3>HTML lists</h3>
      <p>
        <ul>
          <li>&#60;ul>태그는 점찍는 리스트!</li>
          <li>&#60;li>태그는 요소를 나타내요</li>
        </ul>
        <ol>
          <li>&#60;ol>태그는 숫자를 사용하는 리스트!</li>
          <li>&#60;li>태그는 요소를 나타내요</li>
        </ol>
      </p>
      <p>&#60;br>태그는 띄어쓰기를 해주어용!</p>
    </div>
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>신기한 Text Formatting</h3>
      <p>나는 <b>두꺼운</b> 글자야! 나는 <strong>중요한</strong> 글자야! <br>
        <i>신기한</i> 글자가 <mark>많이많이</mark> 있다<br> <small>작고</small> <em>강조되고</em> <del>삭제되고</del> <ins>추가되는</ins><br>
        신기한 글자들 <sup>위</sup> <sub>아래</sub> <sup>위</sup> <sup>위</sup><sub>아래</sub></p>
      <p style="color:pink; font-size:90%; text-align:center; font-family:courier" >색깔, 폰트, 크기, 정렬방식도 바꿀 수 있다!</p>
    </div>
    <div class="col-sm-4">
      <h3>표 Table</h3>
      <p>
        <table style="width:100%">
          <tr>
            <th>Name</th>
            <th colspan="2">Telephone</th>
          </tr>
          <tr>
            <td>신희주</td>
            <td>010-4058-4022</td>
            <td>053-264-4022</td>
          </tr>
        </table>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Iframe</h3>
      <p><iframe scr="iframe_demo.htm" name="iframe_demo" style="height:200px;width:200px"></iframe></p>
      <p><button><a href="https://hisnet.handong.edu" target="iframe_demo">Click me to change above iframe!</a></button></p>
    </div>
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Form</h3>
      <form action="./html_ex1_action.php">
        First name:<br>
        <input type="text" name="firstname" value="heeju">
        <br>
        Last name:<br>
        <input type="text" name="lastname" value="Shin">
        <br><br>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="col-sm-4">
      <h3>Block-level Tag</h3>
      <p>
        항상 새로운 줄에서 시작<br>
        100% witdh를 잡음<br>
        개발자가 조정 가능<br>
        full width available
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Inline Tag</h3>
      <p>새로운 줄에서 시작하지 않음<br>
        필요한 가로 공간만 차지<br>
        컨텐츠만큼만 공간을 잡음<br>
        margin, padding 사용 X
      </p>
      <p></p>
    </div>
  </div>
</div>
<p style="text-align:center"><a href="./index.php">홈으로</a>
</p>
</body>
</html>
