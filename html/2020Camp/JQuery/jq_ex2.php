<!DOCTYPE html>
<html>
<head>
  <title>JQuery Exercise 2</title>
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
  <h1>JQuery Exercise 2<</h1>
  <p>2020 web camp</p>
</div>

<div class="container">
  <h2 style="text-align:center">jQuery Traversing</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>What is Traversing?</h3>
      <p>
        "이동"을 의미하는 jQuery 트래버스는 다른 요소와의 관계에 따라 HTML 요소를 "찾기"(또는 선택)하는 데 사용됩니다.<br> 하나의 선택으로 시작하여 원하는 요소에 도달 할 때까지 해당 선택을 통해 이동하십시오.<br><br>

        아래 이미지는 HTML 페이지를 트리 (DOM 트리)로 보여줍니다.<br> jQuery 트래버 싱을 사용하면 선택한 (현재) 요소에서 시작하여 트리에서 쉽게 위 (조상), 아래로 (하위) 및 옆으로 (형제) 이동할 수 있습니다.<br> 이 움직임을 DOM 트리 통과 또는 이동이라고합니다.
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
        <img style="margin-left:20px" src="https://www.w3schools.com/jquery/img_travtree.png" width=300 height=150>
      </p>
    </div>
    <div class="col-sm-4">
      <p>
        <ul>
          Illustration explained:

          <li>The &lt;div> element is the parent of &lt;ul>, and an ancestor of everything inside of it
          <li>The &lt;ul> element is the parent of both &lt;li> elements, and a child of &lt;div>
          <li>The left &lt;li> element is the parent of &lt;span>, child of &lt;ul> and a descendant of &lt;div>
          <li>The &lt;span> element is a child of the left &lt;li> and a descendant of &lt;ul> and &lt;div>
          <li>The two &lt;li> elements are siblings (they share the same parent)
          <li>The right &lt;li> element is the parent of &lt;b>, child of &lt;ul> and a descendant of &lt;div>
          <li>The &lt;b> element is a child of the right &lt;li> and a descendant of &lt;ul> and &lt;div>
        </ul>

      </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Traversing Up the DOM Tree</h3>
      <p>
        Three useful jQuery methods for traversing up the DOM tree are:
        <ul>
        <li><code>parent()</code>
        <li><code>parents()</code>
        <li><code>parentsUntil()</code>
      </ul>

      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
        => The parent() method returns the direct parent element of the selected element.
        <code>
          $(document).ready(function(){<br>
            $("span").parent();<br>
          });
        </code><Br><Br>
        => The parents() method returns all ancestor elements of the selected element, all the way up to the document's root element (<html>).<Br><Br>

        =>You can also use an optional parameter to filter the search for ancestors.
        <code>
          $("span").parents("ul");
        </code>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
        <style>
        .ancestors * {
          display: block;
          border: 2px solid lightgrey;
          color: lightgrey;
          padding: 5px;
          margin: 15px;
        }
        </style>
        <script>
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        $(document).ready(function(){
          $(".span1").parent().css({"color": "red", "border": "2px solid red"});
        });
        </script>
        <div class="ancestors">
          <div style="width:500px;">div (great-grandparent)
            <ul>ul (grandparent)
              <li>li (direct parent)
                <span class="span1">span</span>
              </li>
            </ul>
          </div>

          <div style="width:500px;">div (grandparent)
            <p>p (direct parent)
              <span  class="span1">span</span>
            </p>
          </div>
        </div>

      </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Traversing Down the DOM Tree</h3>
      <p>
        Two useful jQuery methods for traversing down the DOM tree are:
        <ul>
        <li><code>children()</code>
        <li><code>find()</code>
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>

        => The children() method returns all direct children of the selected element.<br>
        <code>
          $("div").children();
        </code><Br><Br>
        You can also use an optional parameter to filter the search for children.

        => The following example returns all &lt;p> elements with the class name "first", that are direct children of &lt;div>:
         <code>$("div").children("p.first");</code><br><br>

         => The find() method returns descendant elements of the selected element, all the way down to the last descendant.<br>
         <code>
          $("div").find("span");<br>
          $("div").find("*");
         </code>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><Br></h3>
        <style>
        .descendants * {
          display: block;
          border: 2px solid lightgrey;
          color: lightgrey;
          padding: 5px;
          margin: 15px;
        }
        </style>
        <script>
        $(document).ready(function(){
          $("#div1").children().css({"color": "red", "border": "2px solid red"});
        });
        </script>

        <div id="div1" class="descendants" style="width:500px;">div (current element)
          <p>p (child)
            <span>span (grandchild)</span>
          </p>
          <p>p (child)
            <span>span (grandchild)</span>
          </p>
        </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery Traversing - Siblings</h3>
      <p>
        There are many useful jQuery methods for traversing sideways in the DOM tree:
        <ul>
        <li>siblings()
        <li>next()
        <li>nextAll()
        <li>nextUntil()
        <li>prev()
        <li>prevAll()
        <li>prevUntil()
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
        => The siblings() method returns all sibling elements of the selected element.
        <br><code>
        $("h2").siblings();</code><br>
        <br>
        => You can also use an optional parameter to filter the search for siblings.<br>

      The following example returns all sibling elements of &lt;h2> that are &lt;p> elements:<Br>
      <code>$("h2").siblings("p");<br></code>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <style>
      .siblings * {
        display: block;
        border: 2px solid lightgrey;
        color: lightgrey;
        padding: 5px;
        margin: 15px;
      }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $(".h2").siblings().css({"color": "red", "border": "2px solid red"});
      });
      </script>
      </head>
      <div class="siblings">

      <div>div (parent)
        <p>p</p>
        <span>span</span>
        <h2 class="h2">h2</h2>
        <h3>h3</h3>
        <p>p</p>
      </div>
    </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery next() Method</h3>
      <p>=> The next() method returns the next sibling element of the selected element.<br>

        The following example returns the next sibling of &lt;h2>:<br>
        <code>
          $("h2").next();
        </code><br>
        <br>
         => The nextAll() method returns all next sibling elements of the selected element.<br>
         <code>
           $("h2").nextAll();
         </code><br>



      </p>
    </div>
    <div class="col-sm-4">
      <h3><Br></h3>
      <p>
        => The nextUntil() method returns all next sibling elements between two given arguments.<Br>

        The following example returns all sibling elements <b>between</b> a &lt;h2> and a &lt;h6> element:<br>
        <code>
          $("h2").nextUntil("h6");
        </code><br><br>
        ** h2, h6은 미포함

        <br><Br>
        => The prev(), prevAll() and prevUntil() methods work just like the methods above but with reverse functionality: <br>they return previous sibling elements (traverse backwards along sibling elements in the DOM tree, instead of forward).
      </p>
    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>jQuery Traversing - Filtering</h3>
      <p>
        The most basic filtering methods are first(), last() and eq(), which allow you to select a specific element based on its position in a group of elements.<br><br>

        Other filtering methods, like filter() and not() allow you to select elements that match, or do not match, a certain criteria.
</p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
        => The first() method returns the first element of the specified elements.<br>
        <textarea rows=1 cols=15 placeholder="$('div').first();"></textarea> 처음 요소 리턴<br>
        => The last() method returns the last element of the specified elements.<br>
        <textarea rows=1 cols=15 placeholder="$('div').last();"></textarea> 마지막 요소 리턴<br>
        => The eq() method returns an element with a specific <B>index</b> number of the selected elements.
          <textarea rows=1 cols=15 placeholder="$('p').eq(1);"></textarea> 특정 인덱스 요소 리턴<br>
        => The filter() method lets you specify a criteria. Elements that do not match the criteria are removed from the selection, and those that match will be returned.<br>
          <textarea rows=1 cols=15 placeholder="$('p').filter(.intro);"></textarea> 특정 조건인 요소들 리턴<br>

        => The not() method returns all elements that do not match the criteria.<br>
          <textarea rows=1 cols=15 placeholder="$('p').not(.intro);"></textarea> 특정 조건이 아닌 요소들 리턴<br>

      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <script>
      $(document).ready(function(){
        $(".div2").first().css("background-color", "yellow");
        $(".div2").last().css("background-color", "dodgerblue");
      });
      </script>

      <h5>Welcome to My Homepage</h5>

      <p>This is a paragraph.</p>

      <div class="div2" style="border: 1px solid black;">
        <p>A paragraph in a div.</p>
        <p>Another paragraph in a div.</p>
      </div>
      <br>

      <div class="div2" style="border: 1px solid black;">
        <p>A paragraph in another div.</p>
        <p>Another paragraph in another div.</p>
      </div>
      <br>

      <div class="div2" style="border: 1px solid black;">
        <p>A paragraph in another div.</p>
        <p>Another paragraph in another div.</p>
      </div>
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
