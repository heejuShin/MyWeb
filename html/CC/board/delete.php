<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  <h2>글 삭제</h2>
  <form method="post" name="form" align=left action="./delete_ok.php">
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
        <th>글 제목 </th>
        <th><?=$row["subject"];?></th>
     </tr>
     <tr>
       <th>비밀번호 </th>
       <th><input id="password" type="password"></th>
    </tr>
</table>
      <p align = center>
      <input type="submit" value="삭제">
      <a href="./list.php">목록</a>
    </p>
    </form>
</body>
</html>
