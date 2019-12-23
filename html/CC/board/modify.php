<!DOCTYPE html>
<html>
<head>
  <title>Mywrite</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <div class="jumbotron text-center">
  <h1>글쓰기</h1>
  <p>히즈넷에 글을 써주세요</p>
</div>
<div class="container">
  <h2>글쓰기</h2>
  <form method="post" name="form" align=left action="modify_ok.php">
    <?php
      //sql
      //include "./inc/dbcon.php";
      $servername = "localhost";
      $username="dughdhk321";
      $password = "gmlwn!23";

      //Create connection
      $conn = new mysqli($servername, $username, $password, $username);
      $no = $_GET['id'];
      $sql = "select * from hisnet_board where id='".$no."' ";
      $result = $conn->query($sql);

      $row = $result->fetch_assoc();
        ?>
<input type = "hidden" name = "id" value = "<?=$no;?>">
    <table>
      <tr>
        <th>아이디 </th>
        <th><input id="id" name="writer" value=<?=$row["writer"];?>></th>
     </tr>
     <tr>
       <th>비밀번호 </th>
       <th><input id="password" type="password"></th>
    </tr>
    <tr>
      <th>제목 </th>
      <th><input id="title" name="subject" value=<?=$row["subject"];?>></th>
   </tr>
   <tr>
     <th>내용 </th>
     <th><textarea id="contents" name="Contents" cols="60" rows="10"><?=$row["Contents"];?></textarea></th>
  </tr>
</table>
      <p align = center>
      <input type="submit" value="작성">
      <a href="./list.php">목록</a>
    </p>
    </form>
  </div>
</body>
</html>
