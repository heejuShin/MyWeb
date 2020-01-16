<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page session="false" %>
<html>
<head>
	<title>Home</title>
</head>
<body>
<h1>
	Hello world! 
</h1>

<P>  The time on the server is ${serverTime}. </P>

<form name="TransTest" id='tForm' method='post' action='http://localhost:8080/csee/nextpage'>
<p> [Annotation]<br>Enter your name: <input type= 'text' name="input_name"><button name="subject" type="submit">Go</button>
</p>
</form>

<form name="TransTest" id='tForm' method='post' action='http://localhost:8080/csee/nextpage2'>
<p> [Traditional servlet method]<br>Enter your name: <input type= 'text' name="input_name"><button name="subject" type="submit">Go</button></p>
</form>

<form name="TransTest" id='tForm' method='get' action='http://localhost:8080/csee/employee-module/getAllEmployees'>
<p> [Hello Spring Project]<br>Enter your name: <input type= 'text' name="input_name"><button name="subject" type="submit">Go</button></p>
</form>

<form name="TransTest" id='tForm' method='get' action='http://localhost:8080/csee/mainview'>
<p> [동작원]<br>Enter your name: <input type= 'text' name="input_name"><button name="subject" type="submit">Go</button></p>
</form>

</body>
</html>
