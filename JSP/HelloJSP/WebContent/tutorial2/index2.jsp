<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>  
<body>  
<h2>this is index page</h2>  
  
<jsp:forward page="printdate2.jsp" >  
<jsp:param name="name" value="javatpoint.com" />  
</jsp:forward>  
  
</body>  
</html>  