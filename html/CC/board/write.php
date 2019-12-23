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
  <form method="post" name="form" align=left action="./write_ok.php">
    <table>
      <tr>
        <th>아이디 </th>
        <th><input id="id" name="writer"></th>
     </tr>
     <tr>
       <th>비밀번호 </th>
       <th><input id="password" type="password"></th>
    </tr>
    <tr>
      <th>제목 </th>
      <th><input id="title" name="subject"></th>
   </tr>
   <tr>
     <th>내용 </th>
     <th><textarea id="Contents" name="Contents" cols="60" rows="10"></textarea></th>
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
