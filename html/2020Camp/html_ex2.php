<!DOCTYPE html>
<html>
<head>
  <title>HTML ex1</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    div.myTable{
      width:100%;
      padding: 5%;
      padding-left: 23%;
      padding-right: 20%;
    }
    table.myTable{
      width: 100%;
    }
    table, th, tr, td{
      <!--
      border: 1px solid black;
      border-collapse: collapse;
      -->
    }
    td.essential{
      padding-right: 2%;
      text-align: right;
      color:red;
      width: 10%;
    }
    td.name{
      font-weight: bold;
      text-align: left;
      width: 40%;
    }
    td.input{
      padding-top:0.5%;
      padding-bottom: 0.5%;
      width:100%;
      text-align:left;
      width: 50%;
    }
    input, select{
      width:60%;
    }
    input.radio{
      width:5%;
    }
    #login{
      width:40%;
      margin-left:35%;
    }
    h2{
      text-align:center;
    }
  </style>
</head>

<body>
<div class="jumbotron text-center">
  <h1>HTML Exercise2</h1>
  <p>2020 web camp</p>
</div>


<table id="login">
  <br>
  <h2>Login</h2><br>
  <form action="html_ex2_action2.php" method="get">
      <td>ID</td>
      <td><input type="text" name="userid" required></input></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" name="passwd" required></input></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="submit"/>
    </tr>
  </form>
</table>

<form action="./html_ex2_action.php" method="post">
<div class="myTable">
<table class="myTable">
  <h2>Register</h2><br>
  <tr>
    <td class="essential">*</td>
    <td class="name">Company:</td>
    <td class="input">
      <input type="text" name="company" required></input>
    </td>
  </tr>
  <tr>
    <td class="essential">*</td>
    <td class="name">First Name:</td>
    <td class="input">
      <input type="text" name="firstname" required></input>
    </td>
  </tr>
  <tr>
    <td class="essential">*</td>
    <td class="name">Second Name:</td>
    <td class="input">
      <input type="text" name="secondname" required></input>
    </td>
  </tr>
  <tr>
    <td class="essential">*</td>
    <td class="name">Email Address:</td>
    <td class="input">
      <input type="email" name="email" required></input>
    </td>
  </tr>
  <tr>
    <td class="essential">*</td>
    <td class="name">Title:</td>
    <td class="input">
      <input type="text" name="title" required></input>
    </td>
  </tr>
  <tr>
    <td class="essential">*</td>
    <td class="name">Phone:</td>
    <td class="input">
      <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required></input>
    </td>
  </tr>
  <tr>
    <td class="essential"></td>
    <td class="name">Cancel Registeration:</td>
    <td class="input">
      <input type="checkbox" name="cr"></input>
    </td>
  </tr>
  <tr>
    <td class="essential">*</td>
    <td class="name">252 Training Session 2010:</td>
    <td class="input">
      <select name="session" required>
        <option selected disabled value="">--Select a date--</option>
        <option value="s1">[S1] 2010.03.12</option>
        <option value="s2">[S2] 2010.05.10</option>
        <option value="s3">[S3] 2010.09.30</option>
      </select>
    </td>
  </tr>
  <tr>
    <td class="essential">*</td>
    <td class="name">Job Function</td>
    <td class="input">
      <input class="radio" type="radio" name="job" value="o1" required/> Campaign Management<br>
      <input class="radio" type="radio" name="job" value="o2"/> CRM Administration<br>
      <input class="radio" type="radio" name="job" value="o3"/> Email Deployment<br>
      <input class="radio" type="radio" name="job" value="o4"/> Partner<br>
      <input class="radio" type="radio" name="job" value="o5"/> Employee
    </td>
  </tr>
  <tr>
    <td class="essential"></td>
    <td class="name">Diecary Registeration: </td>
    <td class="input">
      <input type="text" name="dr"></input>
    </td>
  </tr>
  <tr>
    <td class="essential"></td>
    <td class="name">Expectations: </td>
    <td class="input">
      <textarea name="expectations" rows="10" cols="30">
      </textarea>
    </td>
  </tr>
  <tr>
    <td class="essential"></td>
    <td class="name"></td>
    <td class="input">
      <input type="submit" onclick="register()" value="submit"/>
    </td>
  </tr>

</div>
</form>

</body>
</html>

<script>
function register(){

}

</script>
