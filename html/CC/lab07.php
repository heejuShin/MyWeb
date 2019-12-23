<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
  .ssubmenu{
    position: absolute;
  }
  .mes{
    display:none;
  }
</style>
</head>
<body>
  <h2 id="title" align="center">Lab 07</h2>
  <p align="center">참조 : <a href="https://ironsky.tistory.com/46">히히</a></p>
  <p align="center"><img class="menu" src = "./img/click.png" onmouseover="mouseover()"></p>

<div class="container">
  <img class="submenu" id="c1" src = "./img/c1.jpeg" width=200 height=200></img>
  <img class="submenu" id="c2" src = "./img/c3.jpeg" width=200 height=200></img>
  <img class="submenu" id="c3" src = "./img/c2.jpeg" width=200 height=200></img>
  <img class="submenu" id="c4" src = "./img/c6.jpeg" width=200 height=200></img>
  <img class="submenu" id="c5" src = "./img/c5.jpeg" width=200 height=200></img>

  <p class="mes" id="c1-2">메리 크리스마스!</p>
  <p class="mes" id="c2-2">흰눈 사이로 썰매를 타고 달리는 기분 상쾌도 하다.</p>
  <p class="mes" id="c3-2">같이 눈사람 만들래?</p>
  <p class="mes" id="c4-2">창밖을 보라 창밖을 보라 흰눈이 내린다</p>
  <p class="mes" id="c5-2">종소리 울려라 종소리 울려</p>
</div>

</body>
</html>

<script>
//그냥 -> 종류
//.->class
//#->id
$(".submenu").hide();
function mouseover(){
  $(".submenu").slideDown();
}
  $(".menu").click(function(){
    $(".submenu").slideUp();
  });

  $("#c1").click(function(){
    $("#c1-1").remove();
    $("#c1").before("<img class ='ssubmenu' id='c1-1' src='./img/c4.jpeg' width=200 height=200></img>");
    $("#c1-1").animate({top:'50px'})
    $("#c1-1").fadeOut();
    $("#c1-2").show();
    $("#c1-2").slideUp(1000);

  });
  $("#c2").click(function(){
    $("#c2-1").remove();
    $("#c2").before("<img class ='ssubmenu' id='c2-1' src='./img/c4.jpeg' width=200 height=200></img>");
    $("#c2-1").animate({top:'50px'})
    $("#c2-1").fadeOut();
    $("#c2-2").show();
    $("#c2-2").slideUp(1000);
  });
  $("#c3").click(function(){
    $("#c3-1").remove();
    $("#c3").before("<img class ='ssubmenu' id='c3-1' src='./img/c4.jpeg' width=200 height=200></img>");
    $("#c3-1").animate({top:'50px'})
    $("#c3-1").fadeOut();
    $("#c3-2").show();
    $("#c3-2").slideUp(1000);
  });
  $("#c4").click(function(){
    $("#c4-1").remove();
    $("#c4").before("<img class ='ssubmenu' id='c4-1' src='./img/c4.jpeg' width=200 height=200></img>");
    $("#c4-1").animate({top:'50px'})
    $("#c4-1").fadeOut();
    $("#c4-2").show();
    $("#c4-2").slideUp(1000);
  });
  $("#c5").click(function(){
    $("#c5-1").remove();
    $("#c5").before("<img class ='ssubmenu' id='c5-1' src='./img/c4.jpeg' width=200 height=200></img>");
    $("#c5-1").animate({top:'50px'})
    $("#c5-1").fadeOut();
    $("#c5-2").show();
    $("#c5-2").slideUp(1000);
  });

</script>
