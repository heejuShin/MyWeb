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

  //phpmyadmin���� : mysqlnd_ms_dump_servers
  //id/mgtPassword
  //database ����
  //SQL â�� ����
  //insert into
  //����


  //���� �����
  $sql = " insert into hisnet_board
  (subject,writer, contents,regdate) values ('".$subject."','".$writer."','".$contents."',now())";
  echo $sql;
  //���� �����ϰ�
  if(!$conn->query($sql)){
    echo "������ �Է� ����".$conn->error;
  }
  if($conn->query($sql)){

  }
  //���� ����!
  $conn->close();


  //  $conn->close();
?>

<br>
<html>
</html>
