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
      <h3>AJAX - Server Response</h3>
      <p>
        이 readyState속성은 XMLHttpRequest의 상태를 유지합니다.
        <br>
        이 onreadystatechange속성은 readyState가 변경 될 때 실행될 함수를 정의합니다.
        <br>
        status속성과 statusText속성은 XMLHttpRequest의 객체의 상태를 보유하고 있습니다.
      </p>
    </div>
    <div class="col-sm-4">
      <h3>The onreadystatechange Property</h3>
      <p>
        <img width="800" alt="스크린샷 2020-01-06 오후 3 47 55" src="https://user-images.githubusercontent.com/49302519/71800613-eb104e80-309b-11ea-89f8-11a128f6fd15.png">
      </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The XMLHttpRequest Object</h3>
      <button type="button" onclick="loadDoc11()">Get my CD collection</button>
      <br><br>
      <table id="demo3"></table>

      <script>
      function loadDoc11() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            myFunction11(this);
          }
        };
        xhttp.open("GET", "https://www.w3schools.com/js/cd_catalog.xml", true);
        xhttp.send();
      }
      function myFunction11(xml) {
        var i;
        var xmlDoc = xml.responseXML;
        var table="<tr><th>Artist</th><th>Title</th></tr>";
        var x = xmlDoc.getElementsByTagName("CD");
        for (i = 0; i <x.length; i++) {
          table += "<tr><td>" +
          x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
          "</td><td>" +
          x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
          "</td></tr>";
        }
        document.getElementById("demo3").innerHTML = table;
      }
      </script>


    </div>
    <div class="col-sm-4">
      <h3>Server Response Properties</h3>
      <p><img width="700" alt="스크린샷 2020-01-06 오후 3 50 08" src="https://user-images.githubusercontent.com/49302519/71800739-3b87ac00-309c-11ea-8c38-f127ec8204dd.png"><br><br><img width="700" alt="스크린샷 2020-01-06 오후 3 50 33" src="https://user-images.githubusercontent.com/49302519/71800755-493d3180-309c-11ea-86b0-96fc6b6da4b3.png"></p>
    </div>
    <div class="col-sm-4">
      <h3>Server Response Methods</h3>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>AJAX PHP</h3>
      <h5>Start typing a name in the input field below:</h5>

      <p>Suggestions: <span id="txtHint"></span></p>

      <p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

      <script>
      function showHint(str) {
        var xhttp;
        if (str.length == 0) {
          document.getElementById("txtHint").innerHTML = "";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "gethint.php?q="+str, true);
        xhttp.send();
      }
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
