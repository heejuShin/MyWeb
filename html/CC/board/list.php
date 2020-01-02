<!DOCTYPE html>
<html>
<head>
  <style>
    table, th, td {
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  <h2>자유게시판</h2>
  <hr style="border: solid 1.5px;">

  <table width=100%>
    <tr>
      <th width=10%>번호</th>
      <th width=52%>제목</th>
      <th width=10%>작성자</th>
      <th width=15%>작성일</th>
      <th width=10%>조회</th>
    </tr>

<?php
  //sql
  //include "./inc/dbcon.php";
  $servername = "localhost";
  $username="dughdhk321";
  $password = "gmlwn!23";

  //Create connection
  $conn = new mysqli($servername, $username, $password, $username);
  $sql = "select * from hisnet_board";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    $no = $result->num_rows;
    while($row = $result->fetch_assoc()){
    ?>
    <tr>
      <th><?=$no?></th>
      <th><a href="./read.php?id=<?=$row["id"]?>"><?=$row["subject"];?></a></th>
      <th><?=$row["writer"];?></th>
      <th><?=$row["regdate"];?></th>
      <th><?=$row["readcnt"];?></th>
    <?php
      $no--;
    }
  } else{
    echo "데이터가 존재하지 않습니다.";
  }
 ?>

</table>
<hr style="border:solid 1.2px;">
<p align=right><a href="./write.php">글쓰기</a></p>

<div align=center>
 <select class="select" name="select">
   <option value="제목">제목</option>
   <option value="내용">내용</option>
   <option value="작성자">작성</option>
   <input id="search" type="search">
   <button>검색</button>
</select>
</div>

  <p style="text-align:center"><a href="../index.php">홈으로</a>
</body>
</html>
