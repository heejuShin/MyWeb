<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3>welcome to index page</h3>  
<%  
session.setAttribute("user","sonoo");  
%>  
  
<a href="process1.jsp">visit</a>  
</body>
</html>