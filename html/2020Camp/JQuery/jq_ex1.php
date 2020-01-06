<!DOCTYPE html>
<html>
<head>
  <title>JQuery Exercise1</title>
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
  h2{
    background-color:#ffcccc;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>JQuery Exercise 1</h1>
  <p>2020 web camp</p>
</div>

<div class="container">
  <h2 style="text-align:center">JQuery Tutorial</h2><br>

  <div class="row">
    <div class="col-sm-4">
      <h3>JQuery Example</h3>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $(".p").click(function(){
          $(this).hide();
        });
      });
      </script>
      </head>
      <body>

      <p class="p">If you click on me, I will disappear.</p>
      <p class="p">Click me away!</p>
      <p class="p">Click me too!</p>
    </div>
    <div class="col-sm-4">
      <h3>Downloading jQuery1</h3>
      <ul>
      <li>JQuery.com에서 라이브러리 다운</li>
      &lt;head>
      &lt;script src="jquery-3.4.1.min.js">&lt;/script>
      &lt;/head>
    </ul>
    </div>
    <div class="col-sm-4">
      <h3>Downloading jQuery2</h3>
      <p>
        <ul>
        <li>Google과 같은 CDN의 JQuery 포함</li>
          <ul>
            <li>Google CDN</li>
            &lt;head>
            &lt;script src="https://ajax.googleapis.com/ajax/libs/<br>jquery/3.4.1/jquery.min.js">&lt;/script>
            &lt;/head>
            <li>Microsoft CDN</li>
            &lt;head>
            &lt;script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js">&lt;/script>
            &lt;/head>
          </ul>
      </ul>
      </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Syntax</h3>
      <p>$(selector).action()
        <ul>
          <li>jQuery를 정의 / 액세스하기위한 $ 부호</li>
          <li>HTML 요소를 "쿼리 (또는 찾기)" 하는 A ( selector )</li>
          <li>요소에서 수행 할 jQuery 작업 ()</li>
        </ul>

      </p>

      </p>
    </div>
    <div class="col-sm-4">
      <h3>jQuery Selectors</h3>
      <p>
        <ul>
          <li>$(this).hide()</li> -현재 요소를 숨깁니다.
          <li>$("p").hide()</li> -모든 &lt;p> 요소를 숨깁니다.
          <li>$(".test").hide()</li> -class = "test"인 모든 요소를 ​​숨깁니다.
          <li>$("#test").hide()</li> -id = "test"로 요소를 숨깁니다.
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>The Document Ready Event</h3>
      <p>
        이는 문서로드가 완료되기 전에 모든 jQuery 코드가 실행되지 않도록하기위한 것
        <pre>
$(document).ready(function(){
  // jQuery methods go here...
});

=>짧은 버전
  $(function(){
    // jQuery methods go here...
  });
</pre>
      </p>
    </div>
  </div>
</div>
<div class="container">
    <h3>Here are some common DOM events:</h3>
        <img width="945" alt="스크린샷 2020-01-06 오전 11 26 47" src="https://user-images.githubusercontent.com/49302519/71791228-8b07b100-3077-11ea-8c6e-141b7012202c.png">
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery Event Methods</h3>
      <p>
        <ul>
          <li>click()</li>
          <li>dblclick()</li>
          <li>mouseenter()</li>
          <li>mouseleave()</li>
          <li>mousedown()</li>
          <li>mouseup()</li>
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>jQuery Event Methods</h3>
      <p>
        <ul>
          <li>hover()</li>
          <li>focus()</li>
          <li>blur()</li>
          <li>on()</li>
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>코드 연습 </h3>
      <p>
        <textarea rows="10" cols="30" placeholder="코드연습을 해보세요"></textarea>
      </p>
    </div>
  </div>
</div>
<br><br>
<div class="container">
  <h2 style="text-align:center">JQuery Effects</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery hide() and show()</h3>
      <script>
      $(document).ready(function(){
        $("#hide").click(function(){
          $(".p0").hide();
        });
        $("#show").click(function(){
          $(".p0").show();
        });
      });
      </script>
      <p class="p0">If you click on the "Hide" button, I will disappear.</p>

      <button id="hide">Hide</button>
      <button id="show">Show</button>
      <br>
    </div>
    <div class="col-sm-4">
      <h3>Hide Show 시간 옵션</h3>
      <button id="my">Hide</button>

      <p class="p1">This is a paragraph with little content.</p>
      <p class="p1">This is another small paragraph.</p>
    </div>
    <script>
    var check=false;
    function checking(){
      if(check){
        document.getElementById('my').innerHTML="Show";
      }
      else
        document.getElementById('my').innerHTML="Hide";
    }
    $(document).ready(function(){
      $("#my").click(function(){
        if(!check){
        $(".p1").hide(1000);
        check=true;
        checking();
        }
        else{
          $(".p1").show(1000);
          check=false;
          checking();
        }
      });
    });
    </script>
    <div class="col-sm-4">
      <h3>Toggle</h3>
      <script>
      $(document).ready(function(){
        $("#button2").click(function(){
          $(".p3").toggle();
        });
      });
      </script>
      </head>
      <body>

      <button id="button2">Toggle between hiding and showing the paragraphs</button>

      <p class="p3">This is a paragraph with little content.</p>
      <p class="p3">This is another small paragraph.</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery Fading Methods</h3>
      <p>
        <ul>
          <li>fadeIn()</li>
          <li>fadeOut()</li>
          <li>fadeToggle()</li>
          <li>fadeTo()</ li>
        </ul>

      </p>
    </div>
    <div class="col-sm-4">
      <h3>Fade Toggle</h3>
      <p>
        <script>
        $(document).ready(function(){
          $("#butt").click(function(){
            $("#div1").fadeToggle();
            $("#div2").fadeToggle("slow");
            $("#div3").fadeToggle(3000);
          });
        });
        </script>
        <p>Demonstrate fadeToggle() with different speed parameters.</p>

        <button id="butt">Click to fade in/out boxes</button><br><br>

        <div id="div1" style="width:80px;height:80px;background-color:red;"></div>
        <br>
        <div id="div2" style="width:80px;height:80px;background-color:green;"></div>
        <br>
        <div id="div3" style="width:80px;height:80px;background-color:blue;"></div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Fade To()</h3>
      <p>jQuery fadeTo()메소드를 사용하면 지정된 불투명도로 페이딩 할 수 있습니다 (0과 1 사이의 값).</p>
      <script>
      $(document).ready(function(){
        $("#butto").click(function(){
          $("#div12").fadeTo("slow", 0.15);
          $("#div22").fadeTo("slow", 0.4);
          $("#div32").fadeTo("slow", 0.7);
        });
      });
      </script>
      <button id="butto">Click to fade boxes</button><br><br>

      <div id="div12" style="width:80px;height:80px;background-color:red;"></div><br>
      <div id="div22" style="width:80px;height:80px;background-color:green;"></div><br>
      <div id="div32" style="width:80px;height:80px;background-color:blue;"></div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery Sliding Methods</h3>
      <p>
        <ul>
          <li>slideDown()</li>
          <li>slideUp()</li>
          <li>slideToggle()</li>
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Slide Toggle()</h3>
      <p>
        <script>
        $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideToggle("slow");
          });
        });
        </script>
        <style>
        #panel, #flip {
          padding: 5px;
          text-align: center;
          background-color: #e5eecc;
          border: solid 1px #c3c3c3;
        }

        #panel {
          padding: 50px;
          display: none;
        }
        </style>
        <div id="flip">Click to slide the panel down or up</div>
        <div id="panel">Hello world!</div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>JQuery Animate</h3>
      <script>
      $(document).ready(function(){
        $("#hehe").click(function(){
          $(".div1").animate({
            left: '+=25px',
            height: '+=10px',
            width: '+=25px'
          });
        });
      });
      </script>

      <button id="hehe">Start Animation</button><br>

      <div class="div1" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
    </div>
  </div>
</div>
<br><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Using Pre-defined Values</h3>
      <script>
      $(document).ready(function(){
        $(".he1").click(function(){
          $("#he1").animate({
            height: 'toggle'
          });
        });
      });
      </script>

      <p>Click the button multiple times to toggle the animation.</p>

      <button class="he1">Start Animation</button>

      <div id="he1" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
    </div>

    <div class="col-sm-4">
      <h3>Uses Queue Functionality</h3>
      <script>
      $(document).ready(function(){
        $("#hello").click(function(){
          var div = $("#hell");
          div.animate({height: '300px', opacity: '0.4'}, "slow");
          div.animate({width: '300px', opacity: '0.8'}, "slow");
          div.animate({height: '100px', opacity: '0.4'}, "slow");
          div.animate({width: '100px', opacity: '0.8'}, "slow");
        });
      });
      </script>
      </head>
      <body>

      <button id="hello">Start Animation</button>

      <div id="hell" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
    </div>
    <div class="col-sm-4">
      <h3>Uses Queue Functionality2</h3>
      <script>
      $(document).ready(function(){
        $(".button3").click(function(){
          var div = $("#div34");
          div.animate({left: '100px'}, "slow");
          div.animate({fontSize: '3em'}, "slow");
        });
      });
      </script>
      </head>
      <body>

      <button class="button3">Start Animation</button>

      <p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

      <div id="div34" style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery stop() Method</h3>
      <p>Syntax:<br>
        $(selector).stop(stopAll,goToEnd);</p>
    </div>
    <div class="col-sm-4">
      <h3>jQuery Callback Functions</h3>
      <p>
        콜백 기능은 현재 효과가 100 % 완료된 후에 실행됩니다.<br>
        syntax: $ ( selector ) .hide ( speed, callback );
      </p>
    </div>
    <div class="col-sm-4">
      <h3>jQuery - Chaining</h3>
      <p>
체인을 사용하면 단일 명령문 내에서 동일한 요소에서 여러 jQuery 메소드를 실행할 수 있습니다.<br>
동작을 연결하려면 단순히 이전 동작에 동작을 추가하면됩니다.
<script>
$(document).ready(function(){
  $("#button4").click(function(){
    $("#p3").css("color", "red").slideUp(2000).slideDown(2000);
  });
});
</script>
</head>
<body>

<p id="p3">jQuery is fun!!</p>

<button id="button4">Click me</button>
      </p>
    </div>
  </div>
</div>
<br><br><br>

<div class="container">
  <h2 style="text-align:center">JQuery HTML</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>Get Content - text(), html(), and val()</h3>
      <p>
        Three simple, but useful, jQuery methods for DOM manipulation are:
        <ul>
        <li>text()</li> - Sets or returns the text content of selected elements
        <li>html()</li> - Sets or returns the content of selected elements (including HTML markup)
        <li>val()</li> - Sets or returns the value of form fields
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Example</h3>
      <script>
      $(document).ready(function(){
        $("#btn1").click(function(){
          alert("Text: " + $("#test").text());
        });
        $("#btn2").click(function(){
          alert("HTML: " + $("#test").html());
        });
        $("#btn3").click(function(){
        alert("Value: " + $("#test2").val());
      });
      $("#btn4").click(function(){
        alert($("#w3s").attr("href"));
      });
      });
      </script>
      </head>
      <body>

      <p id="test">This is some <b>bold</b> text in a paragraph.</p>
      <p>Name: <input type="text" id="test2" value="Mickey Mouse"></p>
      <p><a href="https://www.w3schools.com" id="w3s">W3Schools.com</a></p>

      <button id="btn1">Show Text</button>
      <button id="btn2">Show HTML</button><br><br>
      <button id="btn3">Show Value</button>
      <button id="btn4">Show href value</button>
    </div>
    <div class="col-sm-4">
      <h3>Set Content - text(), html(), and val() </h3>
      <script>
      $(document).ready(function(){
        $("#btn11").click(function(){
          $("#test11").text("Hello world!");
        });
        $("#btn21").click(function(){
          $("#test21").html("<b>Hello world!</b>");
        });
        $("#btn31").click(function(){
          $("#test31").val("Dolly Duck");
        });
      });
      </script>
      <p id="test11">This is a paragraph.</p>
      <p id="test21">This is another paragraph.</p>

      <p>Input field: <input type="text" id="test31" value="Mickey Mouse"></p>

      <button id="btn11">Set Text</button>
      <button id="btn21">Set HTML</button>
      <button id="btn31">Set Value</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Add New HTML Content</h3>
      <p>
        We will look at four jQuery methods that are used to add new content:
        <ul>
        <li>append()</li> - Inserts content at the end of the selected elements
        <li>prepend()</li> - Inserts content at the beginning of the selected elements
        <li>after()</li> - Inserts content after the selected elements
        <li>before()</li> - Inserts content before the selected elements
      </ul>

      </p>
    </div>
    <div class="col-sm-4">
      <h3>Example</h3>
      <script>
      $(document).ready(function(){
        $("#btn12").click(function(){
          $("#mymy").append(" <b>Appended text</b>.");
        });

        $("#btn22").click(function(){
          $("#olol").append("<li>Appended item</li>");
        });
      });
      </script>
      </head>
      <body>

      <p id="mymy">This is a paragraph.</p>

      <ol id="olol">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
      </ol>

      <button id="btn12">Append text</button>
      <button id="btn22">Append list items</button><br><br>
      append()는 뒤에 추가
      prepend()는 앞에 추가
    </div>
    <div class="col-sm-4">
      <h3>jQuery - Remove Elements</h3>
      <p>
        To remove elements and content, there are mainly two jQuery methods:
        <ul>
        <li>remove()</li> - Removes the selected element (and its child elements)
        <li>empty()</li> - Removes the child elements from the selected element
      </ul>
      </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>remove Example</h3>
      <script>
      $(document).ready(function(){
        $("#buttoon").click(function(){
          $("#div134").remove();
        });
      });
      </script>
      </head>
      <body>

      <div id="div134" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">

      This is some text in the div.
      <p>This is a paragraph in the div.</p>
      <p>This is another paragraph in the div.</p>

      </div>
      <br>

      <button id="buttoon">Remove div element</button>
    </div>
    <div class="col-sm-4">
      <h3>empty Example</h3>
      <script>
      $(document).ready(function(){
        $("#budd").click(function(){
          $("#div112").empty();
        });
      });
      </script>
      </head>
      <body>

      <div id="div112" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">

      This is some text in the div.
      <p>This is a paragraph in the div.</p>
      <p>This is another paragraph in the div.</p>

      </div>
      <br>

      <button id="budd">Empty the div element</button>
    </div>
    <div class="col-sm-4">
      <h3>CSS를 조작하는 jQuery</h3>
      <p>
        jQuery에는 CSS 조작을위한 몇 가지 방법이 있습니다. 다음과 같은 방법을 살펴 보겠습니다.
        <ul>
        <li>addClass()</li> -선택한 요소에 하나 이상의 클래스를 추가합니다
        <li>removeClass()</li> -선택한 요소에서 하나 이상의 클래스를 제거합니다
        <li>toggleClass()</li> -선택한 요소에서 클래스 추가 / 제거 간 전환
        <li>css()</li> -스타일 속성을 설정하거나 반환
      </ul>

      </p>
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
