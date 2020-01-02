<html charset="UTF-8">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  </head>
  <body>
  </body>
  <img src="./img/survey.jpg" alt="I can't find survey.png", width = 350, height=400> <br>
  <h1> 설문조사 </h1>
  아래 항목을 채워주세요.<br>

    <h4>신상 정보 : </h4>
    <table>
    <tr>
      <td>이름</td>
      <td><input type="text" name="이름" value=""></td></tr>
    <tr>
      <td>전화번호</td>
      <td><input type="text" name="전화번호" value=""></td></tr>
    <tr>
      <td>이메일주소</td>
      <td><input type="text" name="전화번호" value=""></td></tr>
  </table>

    <h3>어떤 경로로 알게 되었습니까?</h3>
    <input type="radio" name="경로" value="기사">기사<br>
    <input type="radio" name="경로" value="광고">광고<br>
    <input type="radio" name="경로" value="기타">기타<br>

    <h3>좋아하는 스포츠는 무엇입니까?</h3>
    <input type="checkbox" name="스포츠" value="테니스">테니스
    <input type="checkbox" name="스포츠" value="골프">골프
    <input type="checkbox" name="스포츠" value="농구">농구<br>
    <input type="checkbox" name="스포츠" value="스쿼시">스쿼시
    <input type="checkbox" name="스포츠" value="볼링">볼링
    <input type="checkbox" name="스포츠" value="축구">축구<br><br>

    연락방법
    <select class="연락방법" name="연락방법">
      <option value="email">email</option>
      <option value="phone">phone</option>
    </select>


    <br><br><input type="radio" name="동의" value="동의">
    개인정보 활용에 동의합니다.
    <br><br><button>submit</button> <br>


    <p style="text-align:center"><a href="./index.php">홈으로</a>
  </html>
