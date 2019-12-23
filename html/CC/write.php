<html>
<head>
  <title>Mywrite</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="jumbotron text-center">
  <h1>Mysql �ǽ�</h1>
  <p>������������</p>
</div>

<div class="container">
  <form action="write_ok.php" method="post">
    <table>
      <tr>
        <td>����</td>
        <td><input type="text" name="subject"></td>
      </tr>

      <tr>
        <td>�ۼ���</td>
        <td><input type="text" name="writer"></td>
      </tr>

      <tr>
        <td>����</td>
        <td><textarea name="contents" cols="60" rows="10"></textarea></td>
      </tr>

      <tr>
        <td colspan="2" align="center"><input type="reset", value='Reset'><input type="submit", value="submit"></td>
      </tr>
      

  </form>
</div>
</body>
</html>
