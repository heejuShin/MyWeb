<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
  body{
    width:100%;
    height:100%;
    background:#6facd1;
    text-align:center;
    padding-top:10%;
  }
  h1{
    color:white;
  }
  .added{
    margin:0 auto;
    width:30%;
    background:white;
    border:solid black 1px;
    border-radius:3px;
    margin-bottom:10px;
  }
  .add{
    margin:50px;
  }
  input{
    width:100px;
    height:30px;
    font-size:1.1em;
    border:solid black 1px;
    border-radius:3px;
    background:white;
  }
  button{
    width:40px;
    height:25px;
    font-size:12px;
    border:solid black 1px;
    border-radius:3px;
    background:white;
  }
  #element{
    display:none;
  }
  </style>
</head>
<body>
  <h1>To-do list</h1>

  <div id="list">
    <div class="added" onclick="check(this)">
      <h3 class="myh3">Buy movie tickets</h3>
    </div>
  </div>

  <div class="add">
    <input placeholder="Item"></input>
    <button type="button">add</button>
  </div>

  <div id="element">
    <div class="added">
      <h3 class="myh3">hello</h3>
    </div>
  </div>
</body>
<script>
  $(document).ready(function(){
    $("button").click(function(){
      $("#element").find("h3").text($("input").val());
      $('#list').append($("#element").html());
      $("input").val("");
    });
    $('#list').on('click', '.added', function() {
      $(this).remove();
    });
  });

</script>
</html>
