<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
    body{
      text-align:center;
    }
    #itemList{
      text-align:center;
      margin-bottom:30px;
    }
    .tr{
      border:solid 1px gray;
      display:flex;
    }
    .th, .td{
      text-align:left;
      font-weight:bold;
      border:solid 1px gray;
      padding:10px;
    }
    .td{
      font-weight:normal;
      border-top:0;
    }
    .itemname, .quantity{
        width:35%;
    }
    .unit{
        width:20%;
    }
    .plus{
        width:10%;
    }
    input, select{
      width:100%;
      height:100%;
    }
    .td{
    }
    .add{
      border:0;
      border-radius: 5px;
      background:green;
      color:white;
      width:25px;
      height:25px;
    }
    .delete{
      border:0;
      border-radius: 5px;
      background:red;
      color:white;
      width:25px;
      height:25px;
    }
    #element{
      display:none;
    }
    button{
      width:100px;
      height:50px;
      font-size:1.3em;
    }
    button#check{
      height:30px;
      font-size:0.8em;
    }

  </style>
</head>

<body>
  <h1 class="title">Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</h1>
  <h3 class="title">Enter Item Details</h3>


  <div id="itemList">
    <div class="tr">
      <div class="th itemname">Enter Item Name</div>
      <div class="th quantity">Enter Quantity</div>
      <div class="th unit">Select Unit</div>
      <div class="th plus"><button class="add" type="button" onclick="add()">+</button></div>
    </div>
<form method="POST" action="dynamic2_action.php">
    <input id="count" name="count" type="hidden" value="0"></input>
    <div id="plus"></div>
  </div>
  <button class="submit">Insert</button><br><br>
  <button type="button" id="check" onclick="alert(elecount+'개 있어용')">how many?</button><br><br>
  <button typd="button" id="check"><a href="../index.php">Go Back</a></button>
</form>


  <div class="tr" id="element">
    <div class="td itemname" id="hey"><input name="itemname"></input></div>
    <div class="td quantity"><input name="quantity"></input></div>
    <div class="td unit">
      <select name="unit">
        <option value="option1">option1</option>
        <option value="option2">option2</option>
      </select>
    </div>
    <div class="td plus"><button class="delete" type="button" onclick="remove(this)">-</button></div>
  </div>


</body>
</html>
<script>
  var elecount=0;
  function add(){
    var form = document.getElementById('element');
    var insert = form.cloneNode(true);
    insert.hidden=false;
    insert.id="element"+`${elecount}`;
    insert.children[0].children[0].name="itemname"+`${elecount}`;
    insert.children[1].children[0].name="quantity"+`${elecount}`;
    insert.children[2].children[0].name="unit"+`${elecount}`;
    elecount++;
    document.getElementById("plus").appendChild(insert);
    Recount();
  }
  function remove(t){
    var element = document.getElementById(t.parentNode.parentNode.id);
    element.parentNode.removeChild(element);
    elecount--;
    Recount();
  }
  function Recount(){
    document.getElementById('count').value=elecount;
  }
</script>
