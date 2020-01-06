<!DOCTYPE html>
<html>
<head>
  <title>Ajax Note</title>
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
  <h1>JS Ajax Exercise</h1>
  <p>2020 web camp</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>What is AJAX?</h3>
      <p>
        AJAX = <b>A</b>synchronous <b>J</b>avaScript <b>A</b>nd <b>X</b>ML.
        <br>
        AJAX is not a programming language.
        <br>
        AJAX just uses a combination of:
        <br><ul>
        <li>A browser built-in XMLHttpRequest object (to request data from a web server)</li>
        <li>JavaScript and HTML DOM (to display or use the data)</li>
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
        Things you can do using AJAX.
        <ul>
          <li>Read data from a web server - after the page has loaded</li>
          <li>Update a web page without reloading the page</li>
          <li>Send data to a web server - in the background</li>
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>How AJAX Works</h3>
      <p>
        <img src="https://www.w3schools.com/js/pic_ajax.gif" width="350" height="200">
      </p>
    </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Get data</h3>
      <div id="demo">
      <h5>The XMLHttpRequest Object</h5>

      <div style="margin-bottom:20px">
      <button type="button" onclick="loadDoc()">Change Content</button>
      </div>
      <script>
      function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
          }
        };
        xhttp.open("GET", "info.html", true);
        xhttp.send();
      }
      </script>
    </div>
  </div>
    <div class="col-sm-4">
      <h3>Get selected Data</h3>
      <select id="kind">
        <option value="">인사를 선택하세요
        <option value="1">영어인사
        <option value="2">한국인사
      </select>
      <button type="button" onclick="loadDoc2()">인사 선택</button>

      <div id="demo2">
      </div>

      <script>
      function loadDoc2() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo2").innerHTML =
            this.responseText;
          }
        };
        var kind = document.getElementById("kind").value;
        xhttp.open("GET", "info.php?kind="+kind, true);
        xhttp.send();
      }
      </script>
    </div>
    <div class="col-sm-4">
      <h3>XMLHttpRequest Object</h3>
      <p>AJAX의 핵심은 XMLHttpRequest 객체입니다.<br>
      XMLHttpRequest오브젝트는 장면 뒤에 웹 서버와 데이터를 교환 할 수 있습니다. <br>즉, 전체 페이지를 다시로드하지 않고도 웹 페이지의 일부를 업데이트 할 수 있습니다.
      <br><Br>
    <code>
      variable = new XMLHttpRequest();
    </code></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>AJAX- 서버에 요청 보내기</h3>
      <p>서버에 요청을 보내기 위해 XMLHttpRequest객체 의 open () 및 send () 메소드를 사용 합니다.
      <code>
        xhttp.open("GET", "ajax_info.txt", true);<br>
        xhttp.send();
      </code>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>GET or POST?</h3>
      <p>
        GET - 보다 간단하고 빠름<br>
        POST - 대부분의 경우에 사용할 수 있습니다.

        그러나 다음과 같은 경우 항상 POST 요청을 사용하십시오.
        <ul>
        <li>캐시 된 파일은 옵션이 아닙니다 (서버에서 파일 또는 데이터베이스를 업데이트).
        <li>서버에 대량의 데이터 전송 (POST에는 크기 제한이 없습니다).
        <li>알 수없는 문자를 포함 할 수있는 사용자 입력을 보내는 POST는 GET보다 강력하고 안전합니다.
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>GET Request</h3>
      <p>
        <code>
          xhttp.open("GET", "demo_get.asp", true);<br>
          xhttp.send();
        </code><br><br>
        <code>
          xhttp.open("GET", "demo_get2.asp?fname=Henry&lname=Ford", true);<br>
          xhttp.send();
        </code>
      </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>POST Request</h3>
      <p>
        <code>
          xhttp.open("POST", "demo_post.asp", true);<br>
          xhttp.send();
        </code><br><Br>
          HTML 양식과 같은 데이터를 POST하려면을 사용하여 HTTP 헤더를 추가하십시오 setRequestHeader(). <br>send()메소드 에서 보내려는 데이터를 지정하십시오 .<br>
          <code>
            xhttp.open("POST", "ajax_test.asp", true);<br>
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");<br>
            xhttp.send("fname=Henry&lname=Ford");
          </code>

      </p>
    </div>
    <div class="col-sm-4">
      <h3>Asynchronous - True or False?</h3>
      <p>
        서버 요청은 비동기 적으로 보내야합니다.<br>
        open () 메소드의 비동기 매개 변수는 true로 설정해야합니다.<br>
        <code>
          xhttp.open("GET", "ajax_test.asp", true);
        </code>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>onreadystatechange 속성</h3>
      <p>
        XMLHttpRequest객체를 사용하면 요청이 응답을받을 때 실행될 함수를 정의 할 수 있습니다.<br><br>

        함수는 객체 의 onreadystatechange속성 에서 정의됩니다 XMLHttpResponse.<Br><Br>

        <a href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_ajax_first">예시</a>
      </p>
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
