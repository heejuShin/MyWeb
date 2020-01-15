<!DOCTYPE html>
<html>
<head>
  <title>SQL Table</title>
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
  </style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>SQL Table Exercise</h1>
  <p>2020 web camp</p>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The SQL CREATE DATABASE Statement</h3>
      <p>
        <b>SYNTAX:</b><br>
          <div class="table">
          CREATE DATABASE datsabasename;
        </div>
      </p>
      <h3>SQL DROP DATABASE Statement</h3>
      <p>
        <b>SYNTAX:</b><br>
          <div class="table">
          DROP DATABASE databasename;
        </div>
      </p>
      <h3>SQL BACKUP DATABASE Statement</h3>
      <p>
        <b>SYNTAX:</b><br>
          <div class="table">
            BACKUP DATABASE databasename<br>
            TO DISK = 'filepath';
        </div>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL CREATE TABLE Statement</h3>
      <p>
        <b>SYNTAX:</b><br>
          <div class="table">
            CREATE TABLE table_name (<br>
                column1 datatype,<br>
                column2 datatype,<br>
                column3 datatype,<br>
               ....<br>
            );
        </div>

        The column parameters specify the names of the columns of the table.<br><Br>

        The datatype parameter specifies the type of data the column can hold (e.g. varchar, integer, date, etc.).<br><Br>

        Tip: For an overview of the available data types, go to our complete <a href="https://www.w3schools.com/sql/sql_datatypes.asp">Data Types Reference.</a>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL DROP TABLE Statement</h3>
      <p>
        <b>SYNTAX:</b><br>
          <div class="table">
            DROP TABLE table_name;
        </div>
      </p>
    <h3>SQL ALTER TABLE Statement</h3>
    <p>
      <b>SYNTAX:</b><br>
        <div class="table">
          ALTER TABLE table_name<br>
          ADD column_name datatype;
      </div>
    </p>
      </div>
  </div>
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL Constraints</h3>
      <b>SYNTAX:</b><br>
        <div class="table">
          CREATE TABLE table_name (<br>
              column1 datatype constraint,<br>
              column2 datatype constraint,<br>
              column3 datatype constraint,<br>
              ....<br>
          );
      </div>
    </div>
    <div class="col-sm-4">
      <h3><br></h3>
      <p>
        The following constraints are commonly used in SQL:
<ul>
  <li>NOT NULL - Ensures that a column cannot have a NULL value
  <li>UNIQUE - Ensures that all values in a column are different
  <li>PRIMARY KEY - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
  <li>FOREIGN KEY - Uniquely identifies a row/record in another table
  <li>CHECK - Ensures that all values in a column satisfies a specific condition
  <li>DEFAULT - Sets a default value for a column when no value is specified
  <li>INDEX - Used to create and retrieve data from the database very quickly
</ul>

      </p>
    </div>
    <div class="col-sm-4">
      <h3>SQL NOT NULL Constraint</h3>
      <b>SYNTAX:</b><br>
        <div class="table">
          CREATE TABLE Persons (<Br>
              ID int NOT NULL,<Br>
              LastName varchar(255) NOT NULL,<Br>
              FirstName varchar(255) NOT NULL,<Br>
              Age int<Br>
          );
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>SQL UNIQUE Constraint</h3>
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
