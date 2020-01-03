<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
    body{
      background-color:#998fc4;
      height:100%;
      color:white;
    }
    section.dividor{
      display:flex;
      height:100%;
    }
    nav{
      text-align:center;
      width:40%;
      //border: solid gray 3px;
      padding-top:50px;
    }
    main{
      width:60%;
      color:white;
      text-align:center;
      //border: solid yellow 3px;
    }
    button.add{
      background-color:white;
      box-shadow: 5px 3px #424242;
      width:80%;
      height:30px;
      margin: 10px 10px;
      font-family:'고딕';
      font-size:1.1em;
    }
    button.add#goback{
      width:20%;
      border-radius: 10px;
    }
    input, textarea{
      margin-top:20px;
    }
    input{
      width:200px;
      height:30px;
    }
    #submit{
      width:200px;
    }
    button.delete{
      display:inline;
      background:white;
      border-radius: 20px;
      color:#9783eb;
      font-weight:bold;
    }
  </style>
</head>

<body>
  <section class="dividor">
    <nav class="col-4 col-s-4 menu">
      <button class="add" id="name">Name</button>
      <button class="add" id="email">Email</button>
      <button class="add" id="number">Contact Number</button>
      <button class="add" id="message">Message</button>
      <button class="add" id="date">Date</button>
      <div style="height:200px;"></div>
      <p>1)div에 input 태그 추가 & 삭제<br>2)input type hidden </p>
      <button class="add" id="goback"><a href="../index.php">Go Back</a></button>
    </nav>

    <main class="col-6 col-s-6">
      <p>왼쪽 버튼을 누르면 아래에 입력란이 추가됩니다</p>
      <form method="POST" action="dynamic1_action.php">
        <div class="added" id="add1"></div>
        <div class="added" id="add2"></div>
        <div class="added" id="add3"></div>
        <div class="added" id="add4"></div>
        <div class="added" id="add5"></div>
        <div class="added" id="add6"></div>

        <input type="submit" id="submit" value="Send Message">
      </form>
    </main>
  </section>
</body>

<script>

  var isNameExist = false;
  var isEmailExist = false;
  var isNumberExist = false;
  var isMessageExist = false;
  var isDateExist = false;
  document.getElementById("name").onclick = addName;
  document.getElementById("email").onclick = addEmail;
  document.getElementById("number").onclick = addNumber;
  document.getElementById("message").onclick = addMessage;
  document.getElementById("date").onclick = addDate;

  function deletethis(ele){
    var get=ele.parentNode.id;
    var id=get[get.length-1];
    for(var i=Number(id)-1; i<5; i++){
        document.getElementById("add"+String(i+1)).innerHTML=document.getElementById("add"+String(i+2)).innerHTML;
    }

    if(ele.id=="name")  isNameExist=false;
    else if(ele.id=="email")  isEmailExist=false;
    else if(ele.id=="number")  isNumberExist=false;
    else if(ele.id=="message")  isMessageExist=false;
    else if(ele.id=="date")  isDateExist=false;
  }

  function addName(){
    if(isNameExist){
      alert("이미 추가된 항목입니다");
      return;
    }
    var add = document.getElementsByClassName("added");
    for(var i=0; i<5; i++){
      if(add[i].innerHTML==""){
        add[i].innerHTML = "<input id='name' placeholder='name' required></input> <button type='button' id='name' class='delete' onclick='deletethis(this)'>x</button>";
        break;
      }
    }
    isNameExist=true;
  }
  function addEmail(){
    if(isEmailExist){
      alert("이미 추가된 항목입니다");
      return;
    }
    var add = document.getElementsByClassName("added");
    for(var i=0; i<5; i++){
      if(add[i].innerHTML==""){
        add[i].innerHTML = "<input id='email' type='email' placeholder='email' required></input> <button type='button' id='email' class='delete' onclick='deletethis(this)'>x</button>";
        break;
      }
    }
    isEmailExist = true;
  }
  function addNumber(){
    if(isNumberExist){
      alert("이미 추가된 항목입니다");
      return;
    }
    var add = document.getElementsByClassName("added");
    for(var i=0; i<5; i++){
      if(add[i].innerHTML==""){
        add[i].innerHTML = "<input id='number' typd='tel' pattern='[0-9]{3}-[0-9]{4}-[0-9]{4}' placeholder='contact number' required></input> <button type='button' id='number' class='delete' onclick='deletethis(this)'>x</button>";
        break;
      }
    }
    isNumberExist = true;
  }

  function addMessage(){
    if(isMessageExist){
      alert("이미 추가된 항목입니다");
      return;
    }
    var add = document.getElementsByClassName("added");

    for(var i=0; i<5; i++){
      if(add[i].innerHTML==""){
        add[i].innerHTML = "<textarea name='expectations' rows='10' cols='35' placeholder='message' required></textarea> <button type='button' class='delete' id='message' onclick='deletethis(this)'>x</button>";
        break;
      }
    }
    isMessageExist = true;
  }
  function addDate(){
    if(isDateExist){
      alert("이미 추가된 항목입니다");
      return;
    }
    var add = document.getElementsByClassName("added");
    for(var i=0; i<5; i++){
      if(add[i].innerHTML==""){
        add[i].innerHTML = "<input id='date' type='date' placeholder='date' required></input> <button type='button' id='date' class='delete' onclick='deletethis(this)'>x</button>";
        break;
      }
    }
    isDateExist = true;
  }

</script>
</html>
