<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  <h4>자유게시판</h4>

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

    <h4><?=$row["subject"];?>
    <hr style="border: solid 1.2px;">
    </h4>
    <p align=right>작성자: <?=$row["writer"];?> 작성일: <?=$row["regdate"];?> 조회: <?=$row["readcnt"];?><br><br></p>
      <p><?=$row["Contents"];?></p>

    <hr style="border: solid 1.2px;">

    <p align=right>
      <a href="./modify.php?id=<?=$no?>">수정</a>
      <a href="./delete.php?id=<?=$no?>">삭제</a>
      <a href="./list.php">목록</a>
    </p>

   </body>
 </html>
