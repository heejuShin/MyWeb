<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial</title>
<style>
table, th, td {
	border: 1px solid black;
}

.code {
	border: 1px solid black;
	padding: 10px;
	background-color: #c5e8c3;
	margin-bottom:20px;
}

.result {
	border: 1px solid black;
	padding: 10px;
	background-color:#c5dbcb;
}

h4 {
	text-decoration: underline;
}

h4.sub {
	text-decoration: none;
}
</style>
</head>
<body>
<h1>Development in JSP</h1>

<h3 style="color: #81d67c;">Registration Form</h3>
<p>For creating registration form, you must have a table in the database. You can write the database logic in JSP file, but separating it from the JSP page is better approach. Here, we are going to use DAO, Factory Method, DTO and Singletion design patterns. There are many files:</p>
<ul>
<li><b>index.jsp</b> for getting the values from the user
<li><b>User.java</b>, a bean class that have properties and setter and getter methods.
<li><b>process.jsp</b>, a jsp file that processes the request and calls the methods
<li><b>Provider.java</b>, an interface that contains many constants like DRIVER_CLASS, CONNECTION_URL, USERNAME and PASSWORD
<li><b>ConnectionProvider.java</b>, a class that returns an object of Connection. It uses the Singleton and factory method design pattern.
<li><b>RegisterDao.java</b>, a DAO class that is responsible to get access to the database
<br><br>
<b>Example:</b><br>
<div class="code">
<code>
CREATE TABLE  "USER432"   <br>
   (    "NAME" VARCHAR2(4000), <br>  
    "EMAIL" VARCHAR2(4000),   <br>
    "PASS" VARCHAR2(4000)  <br>
   )  <br>
/  <br>
</code>
</div>
<b>index.jsp</b><br>
<div class="code">
<code>
&lt;form action="process.jsp">  
&lt;input type="text" name="uname" value="Name..." onclick="this.value=''"/><br/>  
&lt;input type="text" name="uemail"  value="Email ID..." onclick="this.value=''"/><br/>  
&lt;input type="password" name="upass"  value="Password..." onclick="this.value=''"/><br/>  
&lt;input type="submit" value="register"/>  
&lt;/form>  
</code>
</div>

<b>process.jsp</b><br>
<div class="code">
<code>
&lt;%@page import="bean.RegisterDao"%>  <br/> 
&lt;jsp:useBean id="obj" class="bean.User"/>  <br/> <br/> 
  
&lt;jsp:setProperty property="*" name="obj"/>  <br/> <br/> 
  
&lt;%  <br/> 
int status=RegisterDao.register(obj);  <br/> 
if(status>0)  <br/> 
out.print("You are successfully registered"); <br/>  
  
%>  
</code>
</div>

<b>User.java</b><br>
<div class="code">
<code><pre>
package bean;  
  
public class User {  
private String uname,upass,uemail;  
  
public String getUname() {  
    return uname;  
}  
  
public void setUname(String uname) {  
    this.uname = uname;  
}  
  
public String getUpass() {  
    return upass;  
}  
  
public void setUpass(String upass) {  
    this.upass = upass;  
}  
  
public String getUemail() {  
    return uemail;  
}  
  
public void setUemail(String uemail) {  
    this.uemail = uemail;  
}  
  
}  
</pre>
</code>
</div>

<b>Provider.java</b><br>
<div class="code">
<code><pre>
package bean;  
  
public interface Provider {  
String DRIVER="oracle.jdbc.driver.OracleDriver";  
String CONNECTION_URL="jdbc:oracle:thin:@localhost:1521:xe";  
String USERNAME="system";  
String PASSWORD="oracle";  
  
}   
</pre>
</code>
</div>

<b>ConnectionProvider.java</b><br>
<div class="code">
<code><pre>
package bean;  
import java.sql.*;  
import static bean.Provider.*;  
  
public class ConnectionProvider {  
private static Connection con=null;  
static{  
try{  
Class.forName(DRIVER);  
con=DriverManager.getConnection(CONNECTION_URL,USERNAME,PASSWORD);  
}catch(Exception e){}  
}  
  
public static Connection getCon(){  
    return con;  
}  
  
}  
</pre>
</code>
</div>

<b>RegisterDao.java</b><br>
<div class="code">
<code><pre>
package bean;  
  
import java.sql.*;  
  
public class RegisterDao {  
  
public static int register(User u){  
int status=0;  
try{  
Connection con=ConnectionProvider.getCon();  
PreparedStatement ps=con.prepareStatement("insert into user432 values(?,?,?)");  
ps.setString(1,u.getUname());  
ps.setString(2,u.getUemail());  
ps.setString(3,u.getUpass());  
              
status=ps.executeUpdate();  
}catch(Exception e){}  
      
return status;  
}  
  
}   
</pre>
</code>
</div>





</ul>
<h3 style="color: #81d67c;">Login Form</h3>
<p>In this example of creating login form, we have used the DAO (Data Access Object), Factory method and DTO (Data Transfer Object) design patterns. There are many files:</p>
<ul>
<li><strong>index.jsp</strong> it provides three links for login, logout and profile</li>
<li><strong>login.jsp</strong> for getting the values from the user</li>
<li><strong>loginprocess.jsp</strong>, a jsp file that processes the request and calls the methods.</li>
<li><strong>LoginBean.java</strong>, a bean class that have properties and setter and getter methods.</li>
<li><strong>Provider.java</strong>, an interface that contains many constants like DRIVER_CLASS, CONNECTION_URL, USERNAME and PASSWORD</li>
<li><strong>ConnectionProvider.java</strong>, a class that is responsible to return the object of Connection. It uses the Singleton and factory method design pattern.</li>
<li><strong>LoginDao.java</strong>, a DAO class that verifies the emailId and password from the database.</li>
<li><strong>logout.jsp</strong> it invalidates the session.</li>
<li><strong>profile.jsp</strong> it provides simple message if user is logged in, otherwise forwards the request to the login.jsp page.</li>
</ul>
<b>Example:</b><br>
<div class="code">
<code>   
CREATE TABLE  "USER432"   <br>
   (    "NAME" VARCHAR2(4000),   <br> 
    "EMAIL" VARCHAR2(4000),    <br>
    "PASS" VARCHAR2(4000)   <br>
   )   <br>
/  
</code>
</div>

<b>index.jsp</b><br>
<div class="code">
<code><pre>&lt;a href="login.jsp">login&lt;/a>|  
&lt;a href="logout.jsp">logout&lt;/a>|  
&lt;a href="profile.jsp">profile&lt; /a>  
</pre>
</code>
</div>

<b>login.jsp</b><br>
<div class="code">
<code><pre>&lt;%@ include file="index.jsp" %>  
&lt;hr/>  
  
&lt;h3>Login Form<&lt;h3>  
&lt;%  
String profile_msg=(String)request.getAttribute("profile_msg");  
if(profile_msg!=null){  
out.print(profile_msg);  
}  
String login_msg=(String)request.getAttribute("login_msg");  
if(login_msg!=null){  
out.print(login_msg);  
}  
 %>  
 &lt;br/>  
&lt;form action="loginprocess.jsp" method="post">  
Email:&lt;input type="text" name="email"/>&lt;br/>&lt;br/>  
Password:&lt;input type="password" name="password"/>&lt;br/>&lt;br/>  
&lt;input type="submit" value="login"/>"  
&lt;/form>     
</pre>
</code>
</div>

<b>loginprocess.jsp</b><br>
<div class="code">
<code><pre>&lt;%@page import="bean.LoginDao"%>  
&lt;jsp:useBean id="obj" class="bean.LoginBean"/>  
  
&lt;jsp:setProperty property="*" name="obj"/>  
  
&lt;%  
boolean status=LoginDao.validate(obj);  
if(status){  
out.println("You r successfully logged in");  
session.setAttribute("session","TRUE");  
}  
else  
{  
out.print("Sorry, email or password error");  
%>  
&lt;jsp:include page="index.jsp">&lt;/jsp:include>  
&lt;%  
}  
%>    
</pre>
</code>
</div>

<b>LoginBean.java</b><br>
<div class="code">
<code><pre>package bean;  
  
public class LoginBean {  
private String email,pass;  
  
public String getEmail() {  
    return email;  
}  
  
public void setEmail(String email) {  
    this.email = email;  
}  
  
public String getPass() {  
    return pass;  
}  
  
public void setPass(String pass) {  
    this.pass = pass;  
}  
  
  
}     
</pre>
</code>
</div>

<b>Provider.java</b><br>
<div class="code">
<code><pre>package bean;  
  
public interface Provider {  
String DRIVER="oracle.jdbc.driver.OracleDriver";  
String CONNECTION_URL="jdbc:oracle:thin:@localhost:1521:xe";  
String USERNAME="system";  
String PASSWORD="oracle";  
  
}     
</pre>
</code>
</div>

<b>ConnectionProvider.java</b><br>
<div class="code">
<code><pre>package bean;  
import java.sql.*;  
import static bean.Provider.*;  
  
public class ConnectionProvider {  
private static Connection con=null;  
static{  
try{  
Class.forName(DRIVER);  
con=DriverManager.getConnection(CONNECTION_URL,USERNAME,PASSWORD);  
}catch(Exception e){}  
}  
  
public static Connection getCon(){  
    return con;  
}  
  
}     
</pre>
</code>
</div>


<b>LoginDao.java</b><br>
<div class="code">
<code><pre>package bean;  
import java.sql.*;  
public class LoginDao {  
  
public static boolean validate(LoginBean bean){  
boolean status=false;  
try{  
Connection con=ConnectionProvider.getCon();  
              
PreparedStatement ps=con.prepareStatement(  
    "select * from user432 where email=? and pass=?");  
  
ps.setString(1,bean.getEmail());  
ps.setString(2, bean.getPass());  
              
ResultSet rs=ps.executeQuery();  
status=rs.next();  
              
}catch(Exception e){}  
  
return status;  
  
}  
}   
</pre>
</code>
</div>

<h3 style="color: #81d67c;">Uploading File</h3>

<p>There are many ways to upload the file to the server. One of the way is by the MultipartRequest class. For using this class you need to have the cos.jar file. In this example, we are providing the cos.jar file alongwith the code.</p>
<h4 class="sub">
MultipartRequest class
</h4>
<h5>Commonly used Constructors of MultipartRequest class</h5>
<ul>
<li>MultipartRequest(HttpServletRequest request, String saveDirectory) uploads the file upto 1MB.
<li>MultipartRequest(HttpServletRequest request, String saveDirectory, int maxPostSize) uploads the file upto specified post size.
<li>MultipartRequest(HttpServletRequest request, String saveDirectory, int maxPostSize, String encoding) uploads the file upto specified post size with given encoding.
</ul>

<h4>Example of File Upload in JSP</h4>

1.You must use the post request.<br>
2.encodeType should be multipart/form-data that gives information to the server that you are going to upload the file.
<br><Br>
<b>index.jsp</b><br>
<div class="code">
<code><pre>&lt;form action="upload.jsp" method="post" enctype="multipart/form-data">  
Select File:&lt;input type="file" name="fname"/>&lt;br/>  
&lt;input type="image" src="MainUpload.png"/>  
&lt;/form>  
</pre>
</code>
</div>

<b>upload.jsp</b><br>
We are uploading the incoming file to the location d:/new, you can specify your location here.<br>
<div class="code">
<code><pre>&lt;%@ page import="com.oreilly.servlet.MultipartRequest" %>  
&lt;%  
MultipartRequest m = new MultipartRequest(request, "d:/new");  
out.print("successfully uploaded");  
  
%>   
</pre>
</code>
</div>

<h3 style="color: #81d67c;">Downloading Form</h3>
<p>In this example, we are going to download the jsp file. But you may download any file. For downloading the file from the server, you should specify the content type named APPLICATION/OCTET-STREAM.</p>

<b>index.jsp</b><br>
<div class="code">
<code><pre>  &lt;a href="download.jsp">download the jsp file&lt;/a>  
</pre>
</code>
</div>

<b>download.jsp</b><br>
In this example, we are downloading the file home.jsp which is located in the e: drive. You may change this location accordingly.
<div class="code">
<code><pre>&lt;%    
  String filename = "home.jsp";   
  String filepath = "e:\\";   
  response.setContentType("APPLICATION/OCTET-STREAM");   
  response.setHeader("Content-Disposition","attachment; filename=\"" + filename + "\"");   
  
  java.io.FileInputStream fileInputStream=new java.io.FileInputStream(filepath + filename);  
            
  int i;   
  while ((i=fileInputStream.read()) != -1) {  
    out.write(i);   
  }   
  fileInputStream.close();   
%>     
</pre>
</code>
</div>
</body>
</html>

