<html>


    <html>

        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">


            <font size=5 style="timesnewroman"> <b> 맞춤 요가 수업 제공 설문</b> </font> </head>
        <br>
        <br>

        <body class="col-md-6" style="background-color:ivory"> 이 설문은 개인에게 가장 적합한 요가 수업을 찾아주기 위한 설문입니다. <br>
            개인의 성향과 가장 근접한 쪽을 선택해 주세요
        <br><br><br><br><br>
        <form action="action.html" name= "form" target=_blank>
    <div>
         1. 다음 중 자신에게 가장 필요하다고 생각하는 것은?  <br><br>
        <input type= radio name="option1" id="yes" value="5">  낮은 체중  <br>
        <input type= radio name="option1" id="soso" value="3" > 근력 및 유연성 <br>
        <input type= radio name="option1" id="no" value="1"> 신체 전체의 균형 <br> <br>
    </div>

    <div>
        2. 높은 온도에서 하는 운동이 익숙하다  <br><br>

        <input type= radio name="option2" id="yes" value="5">  그렇다 <br>
        <input type= radio name="option2" id="soso" value="3"> 보통이다 <br>
        <input type= radio name="option2" id="no" value="1"> 아니다 <br> <br>
    </div>
    <div>
        3. 요가를 하는 것은 정신건강 보다는 신체의 건강을 위해서가 더 크다   <br><br>
        <input type= radio name="option3" id="yes" value="5">  그렇다 <br>
        <input type= radio name="option3" id="soso" value="3"> 정신과 신체 둘다 중요하다 <br>
        <input type= radio name="option3" id="no" value="1"> 아니다 <br> <br>
    </div>
    <div>
        4. 활동적이고 격렬한 운동에 익숙하다  <br><br>

        <input type= radio name="option4" id="yes" value="5">  그렇다 <br>
        <input type= radio name="option4" id="soso" value="3"> 보통이다 <br>
        <input type= radio name="option4" id="no" value="1"> 아니다 <br> <br>
    </div>
    <div>
        5. 요가수업을 장기적으로 할 예정이다  <br><br>

        <input type= radio name="option5" id="yes" value="5">  그렇다 <br>
        <input type= radio name="option5" id="soso" value="3"> 보통이다 <br>
        <input type= radio name="option5" id="no" value="1"> 아니다 <br> <br>

    </div>
        <br><br>
        <button class="btn btn-primary" type="button" onclick=register()> Submit </button>

        <button class="btn btn-danger" type="reset"> Reset </button>


        </form>

        <script>
            function register(){
            var count=0;
            var q1 = document.getElementsByName("option1");
            for(var i=0; i<q1.length; i++){
              if(q1[i].checked==true){
                count=count+Number(q1[i].value);
                }
              }
              //q1
              var q2 = document.getElementsByName("option2");
              for(var i=0; i<q2.length; i++){
                if(q2[i].checked==true){
                  count=count+Number(q2[i].value);
                  }
                }
                //q2
                var q3 = document.getElementsByName("option3");
                for(var i=0; i<q3.length; i++){
                  if(q3[i].checked==true){
                    count=count+Number(q3[i].value);
                    }
                  }
                  //q3
                  var q4 = document.getElementsByName("option4");
                  for(var i=0; i<q4.length; i++){
                    if(q4[i].checked==true){
                      count=count+Number(q4[i].value);
                      }
                    }
                    //q4
                    var q5 = document.getElementsByName("option5");
                    for(var i=0; i<q5.length; i++){
                      if(q5[i].checked==true){
                        count=count+Number(q5[i].value);
                        }
                      }
                      //q4
            if(count>=21&&count<=25){
              alert("5단계");
            }
            if(count>=16&&count<=20){
              alert("4단계");
            }
            if(count>=11&&count<=15){
              alert("3단계");
            }
            if(count>=6&&count<=10){
              alert("2단계");
            }
            if(count>=1&&count<=5){
              alert("1단계");
            }

            }//register


        </script>
        </body>

        </html>
