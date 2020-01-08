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
	background-color: #dae6ed;
}
</style>
</head>
<body>

	<h1>JSP Tutorial</h1>

	<h3 style="color: dodgerblue;">JSP scripting elements</h3>
	There are three types of scripting elements:
	<ul>
		<li>scriptlet tag</li>
		<li>expression tag</li>
		<li>declaration tag</li>
	</ul>

	<h4>JSP Scriptlet tag</h4>
	You can write like this.
	<br>
	<br>
	<div class="code">
		<code>
			&lt;% out.print("Welcome to jsp"); %><br>
		</code>
		<%
			out.print("welcome to jsp");
		%><br>
	</div>
	<br>

	<div class="code">
		<code>
			&lt;% String name=request.getParameter("uname");<br>
			out.print("welcome"+name);%>
		</code>
		<br>
		<%
			String name = request.getParameter("uname");
			if (name == null)
				name = "guest";
			out.print("welcome " + name);
		%><br>
	</div>

	<h4>JSP expression tag</h4>
	syntax :
	<code>&lt;= statement %></code>
	<br>
	<br>
	<div class="code">
		<code>&lt;%= "welcome to jsp"%></code>
		<br>
		<%="welcome to jsp"%><br>
	</div>
	<br>
	<div class="code">
		<code>Current Time: &lt;%=
			java.util.Calendar.getInstance().getTime() %></code>
		Current Time:
		<%=java.util.Calendar.getInstance().getTime()%><br>
	</div>
	<br>

	<h4>JSP Declaration Tag</h4>
	syntax:
	<code>&lt;%! field or method declaration %></code>
	<br>
	<br>
	<div class="code">
		<code>
			&lt;%! int data=50; %><br> &lt;%= "Value of the variable is: "+
			data %>
		</code>
		<br>
		<%!int data = 50;%>
		<%="Value of the variable is: " + data%><br>
	</div>
	<br>
	<div class="code">
		<code>
			&lt;%! int cube(int n){<br> return n*n*n;<br> }%><br>
			&lt;%= "Cube of 3 is: "+cube(3) %><Br> <br>
		</code>
		<%!int cube(int n) {
		return n * n * n;
	}%>
		<%="Cube of 3 is: " + cube(3)%><br>
	</div>
	<br>

	<h3 style="color: dodgerblue;">9 implicit Objects</h3>
	There are 9 jsp implicit objects.
	<br> These objects are created by the web container that are
	available to all the jsp pages.
	<br> The available implicit objects are out, request, config,
	session, application etc.
	<br>
	<br> A list of the 9 implicit objects is given below:
	<br>
	<br>

	<table id="9objects">
		<tr>
			<th>Object</th>
			<th>Type</th>
		</tr>
		<tr>
			<td>out</td>
			<td>JspWriter</td>
		</tr>
		<tr>
			<td>request</td>
			<td>HttpServletRequest</td>
		</tr>
		<tr>
			<td>response</td>
			<td>HttpServletResponse</td>
		</tr>
		<tr>
			<td>config</td>
			<td>ServletConfig</td>
		</tr>
		<tr>
			<td>application</td>
			<td>ServletContext</td>
		</tr>
		<tr>
			<td>session</td>
			<td>HttpSession</td>
		</tr>
		<tr>
			<td>pageContext</td>
			<td>PageContext</td>
		</tr>
		<tr>
			<td>page</td>
			<td>Object</td>
		</tr>
		<tr>
			<td>exception</td>
			<td>Throwable</td>
		</tr>
	</table>
	<br>

	<h4>1) JSP out implicit object</h4>
	<div class="code">
		<code>
			PrintWriter out=response.getWriter();<br>
		</code>
	</div>
	In JSP, you don't need to write this code.
	<br>
	<br>

	<div class="code">
		<%
			out.print("Today is: " + java.util.Calendar.getInstance().getTime());
		%>
	</div>
	<br>
	<h4>2) JSP request implicit object</h4>
	JSP 요청은 웹 컨테이너에 의해 각 JSP 요청에 대해 생성 유형 HttpServletRequest의 즉의 내장 객체이다.
	<br> 매개 변수, 헤더 정보, 원격 주소, 서버 이름, 서버 포트, 컨텐츠 유형, 문자 인코딩 등과 같은 요청
	정보를 얻는 데 사용할 수 있습니다.
	<br> 또한 jsp 요청 범위에서 속성을 설정, 가져 오기 및 제거하는 데 사용할 수 있습니다.
	<br>
	<Br>
	<div class="code">
		<%
			name = request.getParameter("uname");
			out.print("welcome " + name);
		%><br>
	</div>

	<h4>3) JSP response implicit object</h4>

	JSP에서 response는 HttpServletResponse 유형의 암시 적 객체입니다.
	<br> HttpServletResponse의 인스턴스는 각 jsp 요청에 대해 웹 컨테이너에 의해 작성됩니다.
	<br> 다른 자원으로의 응답 재전송, 오류 전송 등과 같은 응답을 추가하거나 조작하는 데 사용할 수 있습니다.
	<br>
	<Br>
	<div class="code">
		<code>&lt;% response.sendRedirect("http://www.google.com"); %></code>
		<br>
		<form action="response_ex1.jsp">
			<input type="submit" value="go"><br>
		</form>
	</div>

	<h4>4) JSP config implicit object</h4>
	JSP에서 config는 ServletConfig 유형의 암시 적 객체입니다 .
	<br> 이 객체는 특정 JSP 페이지에 대한 초기화 매개 변수를 가져 오는 데 사용할 수 있습니다.
	<br> 구성 오브젝트는 각 jsp 페이지의 웹 컨테이너에 의해 작성됩니다.
	<br>
	<br> 일반적으로 web.xml 파일에서 초기화 매개 변수를 가져 오는 데 사용됩니다.
	<br>
	<br>

	<form action="config_ex1.jsp">
		<input type="text" name="uname"> <input type="submit"
			value="go">
	</form>
	<h4>5) JSP application implicit object</h4>
	JSP에서 application은 ServletContext 유형의 암시 적 객체입니다 .
	<br> ServletContext의 인스턴스는 애플리케이션 또는 프로젝트가 서버에 배치 될 때 웹 컨테이너에 의해 한
	번만 작성됩니다.
	<br> 이 객체는 구성 파일 (web.xml)에서 초기화 매개 변수를 가져 오는 데 사용할 수 있습니다.
	<br> 또한 응용 프로그램 범위에서 특성을 가져 오거나 설정하거나 제거하는 데 사용할 수 있습니다.
	<br>
	<Br>

	<div class="code">
		<code>
			&lt;%<br> <br> out.print("Welcome
			"+request.getParameter("uname")); <br> <Br> String
			driver=application.getInitParameter("dname");<br>
			out.print("driver name is="+driver);<br> <Br> %>
		</code>
	</div><br>
	Output
	<br>
	<img src="https://static.javatpoint.com/images/jsp/config1.jpg">
	<img src="https://static.javatpoint.com/images/jsp/config2.jpg">
	<h4>6) JSP session implicit object</h4>
	JSP에서 session은 HttpSession 유형의 암시 적 객체입니다.
	<br> Java 개발자는이 객체를 사용하여 속성을 설정, 가져 오기 또는 제거하거나 세션 정보를 얻을 수 있습니다.
	<br>
	<br> welcome.jsp
	<br>
	<div class="code">
		<code>
			&lt;html><br> &lt;body><br> &lt;%<br> <br> String
			name=request.getParameter("uname"); <br> out.print("Welcome
			"+name); <br> <br> session.setAttribute("user",name); <br>
			<br> %><br><br> &lt;a href="second.jsp">second jsp page&lt;/a>
			&lt;/body><br> &lt;/html>
		</code>
	</div>
	<br> second.jsp
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> &lt;% String
			name3=(String)session.getAttribute("user"); out.print("Hello
			"+name3); %> &lt;/body><br> &lt;/html><br> <br>

			<%
				String name3 = (String) session.getAttribute("user");
				out.print("Hello " + name3);
			%>
		</code>
	</div><br>
	Output
	<br>
	<img src="https://static.javatpoint.com/images/jsp/session1.jpg">
	<img src="https://static.javatpoint.com/images/jsp/session2.jpg">
	<img src="https://static.javatpoint.com/images/jsp/session3.jpg">

	<h4>7) JSP pageContext implicit object</h4>
	In JSP, pageContext is an implicit object of type PageContext class.
	<br> The pageContext object can be used to set,get or remove
	attribute from one of the following scopes:
	<br>
	<br> JSP에서 pageContext는 PageContext 클래스 유형의 암시 적 객체입니다.
	<br> pageContext 객체는 다음 범위 중 하나에서 속성을 설정, 가져 오기 또는 제거하는 데 사용할 수
	있습니다.
	<br>
	<ul>
		<li>page</li>
		<li>request</li>
		<li>session</li>
		<li>application</li>
	</ul>
	In JSP, page scope is the default scope.
	<br>
	<Br> index.html
	<br>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> &lt;form
			action="welcome.jsp"> <br> &lt;input type="text" name="uname"> <br>
			&lt;input type="submit" value="go">&lt;br/> <br> &lt;/form> <br>
			&lt;/body> <br> &lt;/html> <br>
		</code>
	</div>

	welcome.jsp
	<br>
	<div class="code">
		<code>
			&lt;html><br> &lt;body> <br> &lt;% <br>
			<br> String name=request.getParameter("uname"); <br>
			out.print("Welcome "+name); <br>
			<br>

			pageContext.setAttribute("user",name,PageContext.SESSION_SCOPE);<br>
			<br> %>
			<br> &lt;a href="second.jsp">second jsp page&lt;/a> <br>
			<br> &lt;/body> <br> &lt;/html> <br>
		</code>
	</div>

	second.jsp
	<br>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> &lt;% <br>
			<br> String
			name=(String)pageContext.getAttribute("user",PageContext.SESSION_SCOPE);<br>
			out.print("Hello "+name); <br>
			<br> %> <br> &lt;/body> <br> &lt;/html> <br>
		</code>
	</div>
	<br> Output
	<br>
	<img src="https://static.javatpoint.com/images/jsp/session1.jpg">
	<img src="https://static.javatpoint.com/images/jsp/session2.jpg">
	<img src="https://static.javatpoint.com/images/jsp/session3.jpg">

	<h4>8) JSP page implicit object</h4>
	In JSP, page is an implicit object of type Object class.
	<br> This object is assigned to the reference of auto generated
	servlet class.
	<br> It is written as:
	<div class="code">Object page=this;</div>
	For using this object it must be cast to Servlet type.
	<br> For example:
	<br>
	<div class="code">
		<code> &lt;% (HttpServlet)page.log("message"); %></code>
	</div>
	<br> Since, it is of type Object it is less used because you can
	use this object directly in jsp.
	<br> For example:
	<br>
	<div class="code">
		<code> &lt;% this.log("message"); %></code>
	</div>
	<br>

	<h4>9) JSP exception implicit object</h4>
	In JSP, exception is an implicit object of type java.lang.Throwable
	class.<br>
	This object can be used to print the exception.<Br>
	But it can only be used in error pages.<br>
	It is better to learn it after page directive.<br><br>
	Let's see a simple example:<br><Br>
	
	<b>Example of exception implicit object:</b><br>
	error.jsp
	<div class="code"><code>
		&lt;%@ page isErrorPage="true" %>  <br>
		&lt;html>  <br>
		&lt;body>  <br><br>
		  
		Sorry following exception occured:&lt;%= exception %><br><br>  
		  
		&lt;/body>  <br>
		&lt;/html>  <br>	
	</code></div><br>
	To get the full example, click here 
	<a href="https://www.javatpoint.com/exception-handling-in-jsp">
	full example of exception handling in jsp.</a> But, it will be better to learn it after the JSP Directives.
</body>
</html>
