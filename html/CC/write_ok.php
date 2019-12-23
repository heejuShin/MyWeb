<?php

  $servername = "localhost";
  $username="dughdhk321";
  $password = "gmlwn!23";

  //Create connection
  $conn = new mysqli($servername, $username, $password, $username);

  //Check connetcion
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>

  <?php
  $subject = $_POST['subject'];
  $writer = $_POST['writer'];
  $contents = $_POST['contents'];
  echo $subject."<br>";
  echo $writer."<br>";
  echo $contents."<br>";

  //phpmyadmin접속 : mysqlnd_ms_dump_servers
  //id/mgtPassword
  //database 선택
  //SQL 창에 들어가서
  //insert into
  //실행


  //쿼리 만들고
  $sql = " insert into hisnet_board
  (subject,writer, contents,regdate) values ('".$subject."','".$writer."','".$contents."',now())";
  echo $sql;
  //쿼리 실행하고
  if(!$conn->query($sql)){
    echo "데이터 입력 실패".$conn->error;
  }
  if($conn->query($sql)){

  }
  //연결 끊고!
  $conn->close();


  //  $conn->close();
?>

<br>
<html>
</html>
