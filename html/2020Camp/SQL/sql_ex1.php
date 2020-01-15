<!DOCTYPE html>
<html>
<head>
  <title>SQL Tutorial</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 5px;
    text-align: left;
  }
  .table{
    padding:10px;
    border: 1px solid black;
  }
  .code{
    border: 1px solid pink;
    padding:10px;
  }
  .code2{
    border: 1px solid dodgerblue;
  }
  code .code1{
    color:dodgerblue;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>SQL Tutorial Exercise</h1>
  <p>2020 web camp</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>What is SQL?</h3>
      <p>
        <ul>
          <li>SQL stands for Structured Query Language
          <li>SQL을 통해 데이터베이스에 액세스하고 조작 할 수 있습니다
          <li>SQL은 1986 년 미국 표준 협회 (ANSI)와 1987 년 국제 표준화기구 (ISO)의 표준이되었습니다.
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>What Can SQL do?</h3>
      <p>
      <ul>
        <li>SQL은 데이터베이스에 대해 쿼리를 실행할 수 있습니다
        <li>SQL은 데이터베이스에서 데이터를 검색 할 수 있습니다
        <li>SQL은 데이터베이스에 레코드를 삽입 할 수 있습니다
        <li>SQL은 데이터베이스에서 레코드를 업데이트 할 수 있습니다
        <li>SQL은 데이터베이스에서 레코드를 삭제할 수 있습니다
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
      <li>SQL은 새로운 데이터베이스를 만들 수 있습니다
      <li>SQL은 데이터베이스에서 새 테이블을 만들 수 있습니다
      <li>SQL은 데이터베이스에서 저장 프로 시저를 만들 수 있습니다
      <li>SQL은 데이터베이스에서 뷰를 만들 수 있습니다
      <li>SQL은 테이블, 프로 시저 및 뷰에 대한 권한을 설정할 수 있습니다
      </p>
    </ul>
    </div>
  </div>
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Database Tables</h3>
      <p>데이터베이스는 대부분 하나 이상의 테이블을 포함합니다. 각 테이블은 이름으로 식별됩니다
      ex)Customers, Orders </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL Statements</h3>
      <p>
      데이터베이스에서 수행해야하는 대부분의 조치는 SQL Statements로 수행됩니다.<br>
      아래 SQL Statement는 'Customers' 테이블의 모든 records를 선택합니다.
      <br><br>
      <div class="code">
      <code>
        SELECT * FROM Customers;
      </code>
    </div>
      <br>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>기억할 것</h3>
      <p>
        <ul>
        <li>SQL 키워드는 대소 문자를 구분하지 않습니다. select는 SELECT와 동일합니다.<br>
        <li>일부 데이터베이스 시스템은 각 SQL 문 끝에 세미콜론이 필요합니다.<br>
      </ul>
      </p>
    </div>
  </div>
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Some of The Most Important SQL Commands</h3>
      <table>
        <tr><td>SELECT</td><td> 데이터베이스에서 데이터를 추출</td></tr>
        <tr><td>UPDATE</td><td>데이터베이스의 데이터를 업데이트</td></tr>
        <tr><td>DELETE</td><td>데이터베이스에서 데이터를 삭제</td></tr>
        <tr><td>INSERT INTO</td><td>데이터베이스에 새 데이터를 삽입</td></tr>
      </table>
    </div>
    <div class="col-sm-4">
      <h3><br><br></h3>
      <table>
        <tr><td>CREATE DATABASE</td><td> 새 데이터베이스를 만듭니다.</td></tr>
        <tr><td>ALTER DATABASE</td><td>데이터베이스 수정</td></tr>
        <tr><td>CREATE TABLE</td><td>새 테이블을 만듭니다</td></tr>
        <tr><td>ALTER TABLE</td><td>테이블 수정</td></tr>
      </table>
    </div>
    <div class="col-sm-4">
      <h3><br><br></h3>
      <table>
        <tr><td>DROP TABLE</td><td>테이블을 삭제합니다</td></tr>
        <tr><td>CREATE INDEX</td><td>색인을 만듭니다 (검색 키).</td></tr>
        <tr><td>DROP INDEX</td><td>색인을 삭제합니다</td></tr>
      </table>
    </div>
  </div>
</div>
<br>
<Br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SELECT</h3>
      <p>SELECT 문은 데이터베이스에서 데이터를 선택하는 데 사용됩니다.<br></p>
      <b>SYNTAX:</b><br>
      <div class="code">
      <code>
        SELECT column1, column2, ... <br>
        FROM table_name;
      </code>
    </div>
    column1,2 - 필드네임<br>
    table_name - 테이블 이름<br>
    모든 필드를 선택하고 싶다면 아래의 구문을 사용하라.
    <div class="code">
    <code>
      SELECT * FROM Customers;
    </code>
  </div>
    </div>
    <div class="col-sm-4">
      <h3>The SQL SELECT DISTINCT Statement</h3>
      <p>
      SELECT DISTINCT 문은 구별되는 (다른) 값만 리턴하는 데 사용됩니다.<br>
      테이블 내에서 열에는 종종 많은 중복 값이 ​​포함됩니다. 때로는 다른 (고유한) 값만 나열하려고합니다.
      </p>
      <b>SYNTAX:</b><br>
      <div class="code">
      <code>
        SELECT DISTINCT column1, column2, ... <br>
        FROM table_name;
      </code>
    </div>
      column이 두 개 이상이면 column이 모두 같은 것만 제외됨
    </div>
    <div class="col-sm-4">
      <h3>고유한 필드 요소 수 알아내기</h3>
      <p>
        Country의 DISTINCT 값만 알아내기
        <div class="code">
          <code>
            SELECT COUNT(DISTINCT Country) FROM Customers;
          </code>
        </div>
        위 예는 Firefox, Microsoft Edge에서 작동하지 않음<br>
        <b>대체 코드:</b>
        <div class="code">
        <code>
          SELECT Count(*) AS DistinctCountries<br>
          FROM (SELECT DISTINCT Country FROM Customers);
        </code>
      </div>
      </p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The SQL WHERE Clause</h3>
      <p>WHERE 절은 레코드를 필터링하는 데 사용됩니다.<br>
        WHERE 절은 지정된 조건을 충족하는 레코드 만 추출하는 데 사용됩니다.<br>
        <b>Example:</br></b>
        <div class="code">
          <code>
            SELECT * FROM Customers<br>
            WHERE Country='Mexico';<br>
          </code>
        </div>
        텍스트 - 작은 따옴표로 묶기
        숫자 - 따옴표로 묶지 않기
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Operators in The WHERE Clause</h3>
      <p>
        <img src="https://user-images.githubusercontent.com/49302519/72406567-1bdd3b80-37a0-11ea-938d-c931bd7c61cd.png" width=350>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>사용예시</h3>
      <p>
        BETWEEN:<br>
        <div class="code">
          <code>
            WHERE Price BETWEEN 50 AND 60;
          </code>
        </div>
        LIKE:<br>
        <div class="code">
          <code>
            WHERE City LIKE 's%';
          </code>
        </div>
        IN:<br>
        <div class="code">
          <code>
            WEHRE City IN ('Paris', 'London');
          </code>
        </div>
      </p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL AND, OR and NOT Operators</h3>
      <p>
        AND:<br>
        <div class="code">
          <code>
            WHERE condition1 AND condition2 AND condition3;
          </code>
        </div>
        OR:<br>
        <div class="code">
          <code>
            WHERE condition1 OR condition2 OR condition3 ...;
          </code>
        </div>
        NOT:<br>
        <div class="code">
          <code>
            WHERE NOT condition;
          </code>
        </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>The SQL ORDER BY Keyword</h3>
      <p>
        ORDER BY 키워드는 결과 집합을 오름차순 또는 내림차순으로 정렬하는 데 사용됩니다.<br>
        ORDER BY 키워드는 기본적으로 레코드를 오름차순으로 정렬합니다. <br>레코드를 내림차순으로 정렬하려면 DESC 키워드를 사용하십시오.<br>
        <b>Syntax:</b><br>
        <div class="code">
          <code>
            SELECT column1, column2, ...<br>
            FROM table_name<br>
            ORDER BY column1, column2, ... ASC|DESC;
          </code>
        </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>예시</h3>
      <p>
        <div class="table">
          SELECT * FROM Customers<br>
          ORDER BY Country;<br><Br>

          SELECT * FROM Customers<br>
          ORDER BY Country DESC;
        </div>
      </p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The SQL INSERT INTO Statement</h3>
      <p>INSERT INTO 문은 테이블에 새 레코드를 삽입하는 데 사용됩니다.
        <div class="table">
          //특정 field에만 값을 넣는 경우<br>
          INSERT INTO table_name (column1, column2, column3, ...)<br>
          VALUES (value1, value2, value3, ...);<br><br>
          //모든 field에 값을 넣는 경우<br>
          INSERT INTO table_name<br>
          VALUES (value1, value2, value3, ...);<br>
        </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>What is a NULL Value?</h3>
      <p>
        NULL 값을 가진 필드는 값이없는 필드입니다.<br><br>

      테이블의 필드가 선택적인 경우이 필드에 값을 추가하지 않고 새 레코드를 삽입하거나 레코드를 업데이트 할 수 있습니다. <br>그런 다음 필드는 NULL 값으로 저장됩니다.<br><br>

      <div class="table">
        WEHRE column_name IS NULL;<br><br>
        WHERE column_name IS NOT NULL;
      </div>

      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL UPDATE Statement</h3>
      <p>
        <b>SYNTAX:</b><br>
        <div class="table">
          UPDATE table_name<br>
          SET column1 = value1, column2 = value2, ...<br>
          WHERE condition;
        </div>

        <br>
        **주의**<br>
        레코드를 업데이트 할 때주의하십시오. WHERE 절을 생략하면 모든 레코드가 업데이트됩니다!
      </p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The SQL DELETE Statement</h3>
      <p>
        <b>SYNTAX:</b><br>
        <div class="table">
        DELETE FROM table_name WHERE condition;
      </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL TOP, LIMIT or ROWNUM Clause</h3>
      <p>
        Example:<Br>
          <div class="table">
            SELECT TOP 3 * FROM Customers;
          </div>
          <div class="table">
            SELECT * FROM Customers<br>
            LIMIT 3;
          </div>
          <div class="table">
            SELECT * FROM Customers<br>
            WHERE ROWNUM <= 3;
          </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>The SQL MIN() and MAX() Functions</h3>
      <p>
        <div class="table">
        SELECT MIN(column_name)<br>
        FROM table_name<br>
        WHERE condition;<br>
      </div>
      MIN or MAX
      </p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL COUNT (), AVG () 및 SUM () 함수</h3>
      <p>
        COUNT () 함수는 지정된 기준과 일치하는 행 수를 반환합니다.<br>

        AVG () 함수는 숫자 열의 평균값을 반환합니다.<br>

        SUM () 함수는 숫자 열의 총합을 반환합니다.<br><Br>

        <b>Exmaple:</b><br>
        <div class="table">
          SELECT COUNT(column_name)
          FROM table_name
          WHERE condition;
        </div>
        COUNT or AVG or SUM
      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL LIKE Operator</h3>
      <p>
        <img src="https://user-images.githubusercontent.com/49302519/72409632-ab3b1c80-37a9-11ea-9ae0-35e58ba55b91.png" width=800>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL Wildcard Characters</h3>
      <p>와일드 카드 문자는 문자열에서 하나 이상의 문자를 대체하는 데 사용됩니다.
      </p>
      <h3>SQL Aliases</h3>
      <div class="table">
        //Alias Column Syntax<br>
        SELECT column_name AS alias_name<br>
        FROM table_name;<br><br>

        //Alias Table Syntax<Br>
        SELECT column_name(s)<br>
        FROM table_name AS alias_name;<br>
      </div>
    </div>
    <div class="col-sm-4">
      <h3>The SQL IN Operator</h3>
      <p>
        IN 연산자를 사용하면 WHERE 절에 여러 값을 지정할 수 있습니다.<br>
        <b>SYNTAX:</b><br>
        <div class="table">
        SELECT column_name(s)<br>
         FROM table_name<br>
         WHERE column_name IN (value1, value2, ...);<br><br>

         SELECT column_name(s)<br>
         FROM table_name<br>
         WHERE column_name IN (SELECT STATEMENT);
        </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>예시</h3>
      <p>
        <div class="table">
          SELECT o.OrderID, o.OrderDate, c.CustomerName<br>
          FROM Customers AS c, Orders AS o<Br>
          WHERE c.CustomerName="Around the Horn" AND<br> c.CustomerID=o.CustomerID;<br>

        </div>
      </p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL Joins</h3>
      <p>
        JOIN 절은 둘 사이의 관련 열을 기반으로 둘 이상의 테이블의 행을 결합하는 데 사용됩니다.<br>
        <b>Example:</b><br>
        <div class="table">
        SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate<br>
        FROM Orders
        INNER JOIN Customers<br>
        ON Orders.CustomerID=Customers.CustomerID;

        </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>다른 유형의 SQL JOIN</h3>
      <p>
        다음은 SQL에서 다른 유형의 JOIN입니다.<br>
        <ul>
          <li>(INNER) JOIN : 두 테이블에서 일치하는 값을 가진 레코드를 리턴합니다.
          <li>LEFT (OUTER) JOIN : 왼쪽 테이블의 모든 레코드와 오른쪽 테이블의 일치하는 레코드를 반환합니다
          <li>RIGHT (OUTER) JOIN : 오른쪽 테이블의 모든 레코드와 왼쪽 테이블의 일치하는 레코드를 반환합니다
          <li>FULL (OUTER) JOIN : 왼쪽 또는 오른쪽 테이블에 일치하는 모든 레코드를 반환합니다
        </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <img src="https://www.w3schools.com/sql/img_innerjoin.gif" width="170">
      <img src="https://www.w3schools.com/sql/img_leftjoin.gif" width="170"><br>
      <img src="https://www.w3schools.com/sql/img_rightjoin.gif" width="170">
      <img src="https://www.w3schools.com/sql/img_fulljoin.gif" width="170">
    </div>
  </div>
  <br>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL UNION Operator</h3>
      <p>
        UNION 연산자는 둘 이상의 SELECT 문의 결과 집합을 결합하는 데 사용됩니다.
        <ul>
        <li>UNION 내의 각 SELECT 문은 동일한 수의 열을 가져야합니다.
        <li>열의 데이터 형식도 비슷해야합니다.
        <li>각 SELECT 문의 열 순서도 동일해야합니다
      </ul>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL GROUP BY Statement
</h3>
      <p>
        <b>SYNTAX:</b><br>
        <div class="table">
        SELECT column_name(s)<br>
         FROM table_name<br>
         WHERE condition<br>
         GROUP BY column_name(s)<br>
         ORDER BY column_name(s);
        </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL HAVING Clause
</h3>
      <p>
        <b>SYNTAX:</b><br>
        <div class="table">
        SELECT column_name(s)<br>
         FROM table_name<br>
         WHERE condition<br>
         GROUP BY column_name(s)<br>
         HAVING condition<br>
         ORDER BY column_name(s);
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL EXISTS Operator</h3>
      <p>
        <b>SYNTAX:</b><br>
        <div class="table">
        SELECT column_name(s)<br>
         FROM table_name<br>
         WHERE EXISTS (SELECT column_name FROM table_name WHERE condition);
    </div>
    <div class="col-sm-4">
      <h3>SQL Stored Procedures for SQL Server</h3>
      <p>
        <b>SYNTAX:</b><br>
        <div class="table">
          CREATE PROCEDURE procedure_name<br>
          AS<br>
          sql_statement<br>
          GO;
      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL Comments</h3>
      <p>
Single line comments start with --.<br>
Multi-line comments start with /* and end with */.<br>
      </p>
    </div>
  </div>
</div>
<!--
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Form</h3>
      <p></p>
    </div>
    <div class="col-sm-4">
      <h3>Block-level Tag</h3>
      <p>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Inline Tag</h3>
      <p></p>
    </div>
  </div>
</div>-->


<p style="text-align:center"><a href="../index.php">홈으로</a>
</p>

</body>
</html>
