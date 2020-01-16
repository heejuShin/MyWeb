<%@page import="java.io.FileInputStream"%>
<%@page import="java.io.File"%>


<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%request.setCharacterEncoding("utf-8");%>
<% 
ServletContext scontext = getServletContext();
String id = request.getParameter("id");
String subject = request.getParameter("subject");
String fileName1 = request.getParameter("fileName1");
String fileName2 = request.getParameter("fileName2");
String orgfileName1 = request.getParameter("orgfileName1");
String orgfileName2 = request.getParameter("orgfileName2");
%>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	아이디 : <%=id%><br>
	제목 : <%=subject%><br>
	첨부파일(클릭시 다운로드)<br>
		
	- 파일1 : <a href="download.jsp?fileName=<%=fileName1%>"><%=orgfileName1 %></a><br>
	<img src="/Users/heeju/Desktop/<%=fileName1 %>" width="200"/><br>
	- 파일2 : <a href="download.jsp?fileName=<%=fileName2%>"><%=orgfileName2 %></a><br>
	<img src="/Users/heeju/Desktop/<%=fileName2 %>" width="200"/>
</body>
</html>