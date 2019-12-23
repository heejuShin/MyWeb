<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>rajephon lab - 개비스콘 짤 생성기</title>
<link rel="icon" type="image/png" href="./favicon_32.png" sizes="32x32">
<link rel="icon" type="image/png" href="./favicon_196.png" sizes="196x196">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@GBSC_generator">
<meta name="twitter:creator" content="@meung_shell">
<meta name="twitter:image" content="https://rajephon.github.io/gvsc/before.jpg">
<meta name="twitter:title" content="개비스콘 짤 생성기">
<meta name="twitter:description" content="당신만의 개비스콘 짤방을 만들어보세요!">
<meta property="og:image" content="https://rajephon.github.io/gvsc/before.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1"><strong>개비스콘 짤 생성기</strong></span>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-6 col-xl-6">
                        <canvas id="mainCanvas" width="480" height="722"></canvas>
                </div>
                <div id="setting" class="col-md-6 col-md-6 col-lg-6 col-xl-6" style="padding-left:5px;">
                    <form>
                        <div class="form-group">
                            <label for="txtBefore">속쓰림 키워드</label>
                            <input type="text" class="form-control" name="" placeholder="시험,조별과제,알바,레포트,재수강,계절학기" id="txtBefore" value="시험,조별과제,알바,레포트,재수강,계절학기">
                        </div>
                        <div class="form-group">
                            <label for="txtAfter">개운함 키워드</label>
                            <input type="text" class="form-control" name="" placeholder="자퇴" id="txtAfter" value="자퇴">
                        </div>
                    </form>
                        <a class="btn btn-download" id="btnDownload">
                            <i class="fa fa-download"></i> 내려받기
                        </a>
                        <br><strong><span class="messageArea" style="color:red"></span></strong>
                </div>
            </div>
        </div>
    </main>
<script>
    const beforePositionArr = [{x:127,y:193},{x:330,y:220},{x:274,y:288},{x:245,y:148},{x:158,y:241},{x:136,y:304}];
    const beforeImg = new Image();
    const afterImg = new Image();
    const mainCanvas = document.getElementById("mainCanvas");
    const drawStroked = function (ctx, text, x, y) {
        ctx.strokeStyle = '#222';
        ctx.lineWidth = 4;
        ctx.strokeText(text, x, y);
        ctx.shadowColor = "transparent";
        ctx.fillStyle = 'white';
        ctx.fillText(text, x, y);
    }
    const fncAddKeyword = function (ctx, txt, pos, color) {
        ctx.shadowColor = color;
        ctx.font = "20pt 'Nanum Gothic'";
        ctx.lineWidth = 3;
        drawStroked(ctx, txt, pos.x, pos.y);
    }
    $(function(){
        const $txtBefore = $('#txtBefore');
        const $txtAfter = $('#txtAfter');
        $txtBefore.keyup(function(e) {
            const bf = $(this).val();
            const bfSplit = bf.split(',');
            const ctx = mainCanvas.getContext("2d");
            ctx.shadowColor = "transparent";
            ctx.drawImage(beforeImg, 0, 0);
            const length = Math.min(bfSplit.length, beforePositionArr.length);
            for (let idx = 0; idx < length; idx++) {
                fncAddKeyword(ctx, bfSplit[idx], beforePositionArr[idx], "#ff5555");
            }
        });
        $txtAfter.keyup(function() {
            const af = $(this).val();
            const ctx = mainCanvas.getContext("2d");
            ctx.shadowColor = "transparent";
            ctx.drawImage(afterImg, 0, 360);
            ctx.shadowColor = "blue";
            ctx.font = "40pt 'Nanum Gothic'";
            ctx.textAlign="center";
            drawStroked(ctx,af,240,560);
            ctx.textAlign="start";
        });
        $('#btnDownload').click(function(){
            const href = mainCanvas.toDataURL();
            this.href = href;
            this.download = "gvsc.png";
        });
        if (navigator.userAgent.indexOf('Twitter') !== -1) {
            $('.messageArea').html('트위터 앱에서는 이미지 저장이 불가합니다.<br>웹 브라우저(사파리, 크롬, 등)으로 다시 접속해주세요.');
        }
        window.onload = function(){
            const ctx = mainCanvas.getContext("2d");
            ctx.fillStyle = "white";
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 17;
            ctx.textBaseline = 'alphabetic';
            ctx.scale(1,1);
            beforeImg.onload = function(){
                ctx.drawImage(beforeImg, 0, 0);
                $txtBefore.keyup(); $txtAfter.keyup();
            };
            beforeImg.src = "./before.jpg";
            afterImg.onload = function() {
                ctx.drawImage(afterImg, 0, 360);
                $txtBefore.keyup(); $txtAfter.keyup();
            };
            afterImg.src = "./after.jpg";
        };
    });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-98733909-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
    $(function(){$('#btnDownload').click(function(){const value=JSON.stringify({before:$('#txtBefore').val(),after:$('#txtAfter').val()});ga('send','event','gvsc','download',value)})});
</script>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Developed by <a href="https://rajephon.github.io/">rajephon</a> / <a href="https://github.com/rajephon/gvsc" target="_blank">Github <i class="fab fa-github"></i></a>
                <br><a href="https://github.com/rajephon/gvsc/issues">이슈 &amp; 버그 제보</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
