<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  <p id="timer">00:00:00</p>
  <p>
    <button id="start">start</button>
    <button id="stop">stop</button>
  </p><br>
  <button id="animate">Click me</button><br><br>
  <canvas id="move" width="300" height="300">
  </canvas>

  <p id="demo"></p>

  <p style="text-align:center"><a href="./index.php">홈으로</a>
</body>
</html>


<script>
  var hour=0;
  var minute = 0;
  var second = 0;
  var timerld = 0;

  var Shour;
  var Sminute;
  var Ssecond;

  var i=0;

  var timerld;
  var timerld2;

  var color=['white', '#cc99ff', '#ccffff', '#ffffcc'];

  var E_start = document.getElementById('start');
  var E_stop = document.getElementById('stop');
  var E_animate=document.getElementById('animate');
  var canvas = document.getElementById('move');
  var ctx=canvas.getContext("2d");
  ctx.fillStyle="yellow";
  ctx.fillRect(0,0,canvas.width, canvas.height);

  ctx.rect(i,i,30,30);
  ctx.fillStyle="red";
  ctx.fill();

  function initial(){
    document.getElementById('timer').innerHTML=hour+":"+minute+":"+second;
  }
  E_start.addEventListener('click', function(){
    timerld=setInterval("timeGo()", 1000);
  })
  E_stop.addEventListener('click', function(){
    clearInterval(timerld);
  })
  function timeGo(){
    second++;
    Shour=String(hour);
    Sminute=String(minute);
    Ssecond=String(second);
    if(Shour.length<2)
      Shour='0'+Shour;
    if(Sminute.length<2)
      Sminute='0'+Sminute;
    if(Ssecond.length<2)
      Ssecond='0'+Ssecond;
    document.getElementById('timer').innerHTML=Shour+":"+Sminute+":"+Ssecond;
    document.body.style.background=color[second%4];
  }

  E_animate.addEventListener('click', function(){
    if(i==canvas.width-30){
      clearInterval(timerld2);
    }
    timerld2=setInterval("animateR()",10);

  })
  function animateR(){
    i++;
    //document.getElementById('timer').innerHTML=i;
    if(i==canvas.width-30)
      clearInterval(timerld2);
    ctx.fillStyle="yellow";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.beginPath();
    ctx.rect(i,i,30,30);
    ctx.fillStyle="red";
    ctx.fill();
    ctx.closePath();
  }
</script>
