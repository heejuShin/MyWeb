<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>JQuery EX2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
      *{
        box-sizing: border-box;
      }
      body{
        width:100%;
        height:100%;
        //margin:5% 30% 65% 30%;
      }
      .selected{
        background:#7e3b9c;
        text-shadow: 4px 4px #9288b3;
      }
      #main{
        margin:5% 30% 65% 30%;
          width:40%;
          height:30%;
          background:#d3c1db;
          padding:10px;
          border-radius:10px;
          border:solid 1px;
      }
      .header{
        background:#b27ecc;
        border:solid black 1px;
        font-size:1.2em;
        font-weight:bold;
        padding:10px;
        color:white;
        margin:2px;
      }
      .content{
        background:white;
        border:solid 1px;
        padding:10px;
        margin:2px;
      }
      p.start{
        color:#6c4982
      }
    </style>
  </head>
  <body>
    <div id="main">
      <div class="title" id="title1">
        <div class="header selected" id="header1">
          TITLE ONE
        </div>
        <div class="content" id="content1">
          <p class="start">This is an example accordion item</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec posuere lorem. Pellentesque hendrerit, lorem luctus porttitor vestibulum, eros sapien mattis libero, euismod congue neque nisi at ipsum. Mauris semper ipsum sit amet metus semper malesuada. Donec vel est justo, ac porta diam.</p>

          <p>In ut est in orci commodo blandit. Cras rhoncus ultricies augue. Proin quam odio, venenatis ut tempus tristique, aliquet in velit. Pellentesque volutpat facilisis orci, ut congue mi rhoncus at. Nullam vehicula dignissim neque, sed rhoncus magna ultricies et.</p>
        </div>
      </div>

      <div class="title" id="title2">
        <div class="header" id="header2">
          TITLE TWO
        </div>
        <div style="display:none"class="content" id="content2">
          <p class="start">Totally another one right here</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec posuere lorem. Pellentesque hendrerit, lorem luctus porttitor vestibulum, eros sapien mattis libero, euismod congue neque nisi at ipsum. Mauris semper ipsum sit amet metus semper malesuada. Donec vel est justo, ac porta diam.</p>

          <p>In ut est in orci commodo blandit. Cras rhoncus ultricies augue. Proin quam odio, venenatis ut tempus tristique, aliquet in velit. Pellentesque volutpat facilisis orci, ut congue mi rhoncus at. Nullam vehicula dignissim neque, sed rhoncus magna ultricies et.</p>
        </div>
      </div>

      <div class="title" id="title3">
        <div class="header" id="header3">
          TITLE THREE
        </div>
        <div style="display:none"class="content" id="content3">
          <p class="start">I think I can go on forever</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec posuere lorem. Pellentesque hendrerit, lorem luctus porttitor vestibulum, eros sapien mattis libero, euismod congue neque nisi at ipsum. Mauris semper ipsum sit amet metus semper malesuada. Donec vel est justo, ac porta diam.</p>

          <p>In ut est in orci commodo blandit. Cras rhoncus ultricies augue. Proin quam odio, venenatis ut tempus tristique, aliquet in velit. Pellentesque volutpat facilisis orci, ut congue mi rhoncus at. Nullam vehicula dignissim neque, sed rhoncus magna ultricies et.</p>
        </div>
      </div>

      <div class="title" id="title4">
        <div class="header" id="header4">
          TITLE FOUR
        </div>
        <div style="display:none"class="content" id="content4">
          <p class="start">I was wrong, I'm done</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec posuere lorem. Pellentesque hendrerit, lorem luctus porttitor vestibulum, eros sapien mattis libero, euismod congue neque nisi at ipsum. Mauris semper ipsum sit amet metus semper malesuada. Donec vel est justo, ac porta diam.</p>

          <P>In ut est in orci commodo blandit. Cras rhoncus ultricies augue. Proin quam odio, venenatis ut tempus tristique, aliquet in velit. Pellentesque volutpat facilisis orci, ut congue mi rhoncus at. Nullam vehicula dignissim neque, sed rhoncus magna ultricies et.</p>
        </div>
      </div>


    </div>
  </body>

  <script>
  var current=1;
  $(document).ready(function(){
    $("#header1").click(function(){
      $("#content"+current).slideUp("slow");
      $("#content1").slideDown("slow");
      $(this).addClass("selected");
      $("#header"+current).removeClass("selected");
      current=1;
    });
    $("#header2").click(function(){
      $("#content"+current).slideUp("slow");
      $("#content2").slideDown("slow");
      $(this).addClass("selected");
      $("#header"+current).removeClass("selected");
      current=2;
    });
    $("#header3").click(function(){
      $("#content"+current).slideUp("slow");
      $("#content3").slideDown("slow");
      $(this).addClass("selected");
      $("#header"+current).removeClass("selected");
      current=3;
    });
    $("#header4").click(function(){
      $("#content"+current).slideUp("slow");
      $("#content4").slideDown("slow");
      $(this).addClass("selected");
      $("#header"+current).removeClass("selected");
      current=4;
    });
    $(".header").mouseenter(function(){
      $(this).addClass("hover");
    });
    $(".header").mouseleave(function(){
      $(this).removeClass("hover");
    });
  });
  </script>
  <style>
  .selected{
    background:#7e3b9c;
    text-shadow: 4px 4px #9288b3;
  }
  .hover{
    background:#7e3b9c;
    text-shadow: 4px 4px #9288b3;
    cursor:pointer
  }
  </style>
</html>
