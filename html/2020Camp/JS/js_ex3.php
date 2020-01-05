<!DOCTYPE html>
<html>
<head>
  <title>JS ex3</title>
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
  <h1>JS BOM Exercise</h1>
  <p>2020 web camp</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>What is BOM?</h3>
      <p><b>B</b>rowser <b>O</b>bject <b>M</b>odel (BOM)</p>
      <p>BOM (브라우저 객체 모델)을 사용하면 JavaScript가 브라우저와 "통신"할 수 있습니다.</p>
      <p>브라우저 창 크기 결정
        <ul>

        <li>window.innerHeight <br>-브라우저 창의 내부 높이 (픽셀)</li>
        <li>window.innerWidth <br>-브라우저 창의 내부 너비 (픽셀)</li>
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Other Window Methods</h3>
      <p>
        <ul>
          <li>window.open() -새 창을 엽니다</li>
          <li>window.close() -현재 창을 닫습니다</li>
          <li>window.moveTo() -현재 창을 이동</li>
          <li>window.resizeTo() -현재 창의 크기를 조정</li>
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>JavaScript Window Screen</h3>
      <p>
        <ul>
          <li>screen.width</li>
          <li>screen.height</li>
          <li>screen.availWidth</li>
          <li>screen.availHeight</li>
          <li>screen.colorDepth</li>
          <li>screen.pixelDepth</li>
          <br>
          <p id="screenwidth"></p>
          <p id="screenheight"></p>

          <script>
          document.getElementById("screenheight").innerHTML =
          "Screen height is " + screen.height;
          </script>

          <script>
          document.getElementById("screenwidth").innerHTML =
          "Screen width is " + screen.width;
          </script>
        </ul>
      </p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Window Screen</h3>
      <p id="asw"></p>
      <script>
      document.getElementById("asw").innerHTML =
      "Available screen width is " + screen.availWidth;
      </script>
      <p id="ash"></p>
      <script>
      document.getElementById("ash").innerHTML =
      "Available screen height is " + screen.availHeight;
      </script>
      <p id="colordepth"></p>
      <script>
      document.getElementById("colordepth").innerHTML =
      "Screen color depth is " + screen.colorDepth;
      </script>
      <p id="pixeldepth"></p>
      <script>
      document.getElementById("pixeldepth").innerHTML =
      "Screen pixel depth is " + screen.pixelDepth;
      </script>



    </div>
    <div class="col-sm-4">
      <h3>JavaScript Window Location</h3>
      <p>

        <ul>
          <li>window.location.href</li> returns the href (URL) of the current page
          <li>window.location.hostname</li> returns the domain name of the web host
          <li>window.location.pathname<li> returns the path and filename of the current page
          <li>window.location.protocol</li> returns the web protocol used (http: or https:)
          <li>window.location.assign()</li> loads a new document
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Example</h3>
      <p id="windowl"></p>
      <script>
      document.getElementById("windowl").innerHTML =
      "The full URL of this page is:<br>" + window.location.href;
      </script>
      <p id="windowl2"></p>
      <script>
      document.getElementById("windowl2").innerHTML =
      "Page hostname is: " + window.location.hostname;
      </script>
      <p id="pathname"></p>
      <script>
      document.getElementById("pathname").innerHTML =
      "Page path is: " + window.location.pathname;
      </script>
      <p id="protocol"></p>
      <script>
      document.getElementById("protocol").innerHTML =
      "The page protocol is: " + window.location.protocol;
      </script>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Example2</h3>
      <p id="lp"></p>
      <p><b>Note: </b>If the port number is default (80 for http and 443 for https), most browsers will display 0 or nothing.</p>
      <script>
      document.getElementById("lp").innerHTML =
      "The URL port number of the current page is: " + window.location.port;
      </script>

      <input type="button" value="Load new document" onclick="newDoc()">

      <script>
      function newDoc() {
        window.location.assign("https://www.w3schools.com")
      }
      </script>
    </div>
    <div class="col-sm-4">
      <h3>Window History</h3>
      <p>
        The window.history object can be written without the window prefix.

        <ul>
          <li>history.back()</li> - same as clicking back in the browser
          <li>history.forward()</li> - same as clicking forward in the browser
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Window Navigator</h3>
      <p>
        The <b>window.navigator object </b>can be written without the window prefix.

        Some examples:
        <ul>
        <li>navigator.appName</li>
        <li>navigator.appCodeName</li>
        <li>navigator.platform</li>
      </ul>

      </p>

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>JavaScript Boxes</h3>
      <p>
        <h4>Popup Box</h4>
        <button onclick="myFunction()">Try it</button>

      <script>
      function myFunction() {
        alert("I am an alert box!");
      }
      </script>
      <h4>Confirm Box</h4>
      <button onclick="myFunction2()">Try it</button>

      <p id="button"></p>

      <script>
      function myFunction2() {
        var txt;
        if (confirm("Press a button!")) {
          txt = "You pressed OK!";
        } else {
          txt = "You pressed Cancel!";
        }
        document.getElementById("button").innerHTML = txt;
      }
      </script>
    </p>
    </div>
    <div class="col-sm-4">
      <h3>JavaScript Boxes</h3>
      <p>
        <h4>Prompt Box</h4>

        <button onclick="myFunction2()">Try it</button>

        <p id="demo1"></p>

        <script>
        function myFunction2() {
          var txt;
          var person = prompt("Please enter your name:", "Harry Potter");
          if (person == null || person == "") {
            txt = "User cancelled the prompt.";
          } else {
            txt = "Hello " + person + "! How are you today?";
          }
          document.getElementById("demo1").innerHTML = txt;
        }
        </script>

        <h4>Line Breaks</h4>

        <p>Line-breaks in a popup box.</p>

        <button onclick="alert('Hello\nHow are you?')">Try it</button>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Timing event</h3>

      <p>
        <ul>
          <li>setTimeout(function, milliseconds)</li>
          지정된 밀리 초 동안 기다린 후 기능을 실행합니다.
          <li>setInterval(function, milliseconds)</li>
          setTimeout ()과 동일하지만 함수 실행을 계속 반복합니다.
        </ul>
      </p>

    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The setTimeout() Method</h3>

      <p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>

      <button onclick="setTimeout(myFunctiontime, 3000);">Try it</button>

      <script>
      function myFunctiontime() {
        alert('Hello');
      }
      </script>
    </div>
    <div class="col-sm-4">
      <h3>실행 중지하기</h3>
      <p>clearTimeout()
      </p>

      <p>Click "Try it". Wait 3 seconds. The page will alert "Hello".</p>
      <p>Click "Stop" to prevent the first function to execute.</p>
      <p>(You must click "Stop" before the 3 seconds are up.)</p>

      <button onclick="myVar = setTimeout(myFunction, 3000)">Try it</button>

      <button onclick="clearTimeout(myVar)">Stop it</button>

      <script>
      function myFunction() {
        alert("Hello");
      }
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
