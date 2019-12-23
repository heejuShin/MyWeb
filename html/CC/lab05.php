<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
  table, th, td {
    border: 1px solid black;
  }
  </style>
</head>
<body>
<form method="post" name="form">
    <table style="width:100%">
      <tr>
        <th colspan="2">회원가입</th>
      </tr>
      <tr>
        <th>id</th>
        <td><input class= 'input-text' id="id"> 4~12자의 영문 대소문와 숫자로만 입력</td>
      </tr>
      <tr>
        <th>password</th>
        <td><input class= 'input-text' id="password" type="password"> 4~12자의 영문 대소문와 숫자로만 입력</td>
      </tr>
      <tr>
        <th>confirm password</th>
        <td><input class= 'input-text' id="con_password" type="password"></td>
      </tr>
      <tr>
        <th>name</th>
        <td><input class= 'input-text' id="name"></td>
      </tr>
      <tr>
        <th>birthday</th>
        <td><input id="birthday">년
          <select class="month" name="month">
          <?php
          for($i = 1; $i <= 12; $i++)
          echo '<option value="'.$i.'"month">'.$i.'</option>';
          ?>
        </select>월
          <select class="day" name="day">
          <?php
          for($i = 1; $i <= 31; $i++)
          echo '<option value="'.$i.'"day">'.$i.'</option>';
          ?>
        </select>일
          </td>
      </tr>
      <tr>
        <th>like</th>
        <td> <input class= "input-radio" type="checkbox" name="like" value="독서">독서
            <input class= "input-radio" type="checkbox" name="like" value="음악">음악
            <input class= "input-radio" type="checkbox" name="like" value="영화">영화
            <input class= "input-radio" type="checkbox" name="like" value="운동">운동
            <input class= "input-radio" type="checkbox" name="like" value="기타">기타</td>
      </tr>
      <tr>
        <th>introduction</th>
        <td><textarea id="contents" name="contents" cols="60" rows="10"></textarea></td>
      </tr>
    </table>
    <p align = center>
    <input type="button" onclick="register()" value="가입"> <!--type = submin"-->
    <input type="reset" value="취소">
  </p>
  </form>
  <br>
  <p align=center id = "time"></p><br>
  <p align=center> <button id='add' onclick='addWord()'>단어 추가</button></p>
  <div id="plus" align=center></div>
  <div id="word" hidden>
    <input type="text" value="단어"><br>
    <input type="text" value="뜻"><br>
    <button onclick=remove(this)>삭제</button><br><br>
  </div>
</form>
</body>
</html>



<script>

var date=Date();
var dateresult="";
var words=date.split(' ');
words=words[4].split(':');
if(words[0]>12){
  dateresult=dateresult+"오후 "+words[0]-12;
}
else{
  dateresult=dateresult+"오전 "+words[0];
}
dateresult=dateresult+":"+words[1]+":"+words[2];
document.getElementById('time').innerHTML=dateresult;
var wordcount=0;

function addWord(){
  var form = document.getElementById('word');
  var insert = form.cloneNode(true);
  insert.hidden=false;
  insert.id=`${wordcount}`;
  wordcount++;
  document.getElementById("plus").appendChild(insert);
}

function remove(t){
  var element = document.getElementById(t.parentNode.id);
  element.parentNode.removeChild(element);
}
function register(){
  var id = document.form.id.value;
  var password = document.form.password.value;
  var con_password = document.form.con_password.value;
  var name = document.form.name.value;
  var bir_year = document.form.birthday.value;
  var bir_month = document.form.month.value;
  var bir_day = document.form.day.value;
  var contents = document.form.contents.value;
  var like = "";
  /*
  if ($('input[name=like]').is(":checked")) {
    $('input[name=like]').val('Y');
    like=like+$('input[name=like]').value;
}*/

  var num = /[0-9]/;
  var eng = /[a-zA-Z]/;
  if(id==""){
    alert("아이디를 입력하지 않았습니다.");
    document.getElementById("id").focus();
    return false;
  }
  if(id.length<4 || id.lenght>12 || (!num.test(id))&&(!eng.test(id))){
    alert("아이디는 4-12자의 영문 대소문자와 숫자로만 입력되어야합니다.");
    document.getElementById("id").focus();
    return false;
  }
  if(password==""){
    alert("패스워드를 입력하지 않았습니다.");
    document.getElementById("password").focus();
    return false;
  }
  if(password.length<4 || password.lenght>12 || (!num.test(password))&&(!eng.test(password))){
    alert("패스워드는 4-12자의 영문 대소문자와 숫자로만 입력되어야합니다.");
    document.getElementById("password").focus();
    return false;
  }
  if(con_password==""){
    alert("확인용 패스워드를 입력하지 않았습니다.");
    document.getElementById("con_password").focus();
    return false;
  }
  if(password!=con_password){
    alert("확인용 패스워드와 패스워드가 일치하지 않습니다");
    document.getElementById("con_password").focus();
    return false;
  }
  if(name==""){
    alert("이름을 입력하지 않았습니다.");
    document.getElementById("name").focus();
    return false;
  }
  if(bir_year==""){
    alert("생일을 입력하지 않았습니다.");
    document.getElementById("birthday").focus();
    return false;
  }
  if(!num.test(bir_year)){
    alert("생일은 숫자로만 이루어져야합니다.");
    document.getElementById("birthday").focus();
    return false;
  }
  var check = document.getElementsByName("like");
  var count=0;
  for(var i=0; i<check.length; i++){
    if(check[i].checked==true){
      count+=1;
    }
  }
  var count2=0;
  for(var i=0; i<check.length; i++){
    if(check[i].checked==true){
      if(count2==count-1)
        like=like+check[i].value;
      else {
        like=like+check[i].value+", ";
        count2+=1;
      }
    }
  }
  if(count==0){
    alert("취미가 선택되지 않았습니다.");
    return true;
  }
  if(contents.length==0){
    alert("소개를 입력하지 않았습니다.");
    document.getElementById("contents").focus();
    return false;
  }
  alert("id: "+id +"\npassword: "+password+"\nconfirm password: "+con_password+"\nname: "+name+"\nbirthday: "+bir_year+"-"+bir_month+"-"+bir_day+"\nlike: "+like+"\nintroduction: "+contents+"\n\nSubmitted");
  return true;
}

</script>
