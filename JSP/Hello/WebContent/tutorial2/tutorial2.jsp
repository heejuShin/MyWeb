
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial2</title>
<style>
table, th, td {
	border: 1px solid black;
}

.code {
	border: 1px solid black;
	padding: 10px;
	background-color: #e2daf2;
}

.result {
	border: 1px solid black;
	padding: 10px;
	background-color: #feffde;
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
	<h1>JSP Tutorial2</h1>

	<h3 style="color: #a18ad4;">JSP Directive Elements</h3>

	jsp directive는 JSP페이지를 해당하는 서블릿으로 변환하는 방법을 알려주는 메세지입니다.
	<br> 세 가지 유형의 directives가 있습니다.
	<br>
	<ul>
		<li>page directive</li>
		<li>include directive</li>
		<li>taglib directive</li>
	</ul>

	<b>syntax</b>
	<br>
	<div class="code">
		<code> &lt;%@ directive attribute="value" %> </code>
	</div>
	<br>

	<h4>JSP page directive</h4>

	page directive는 전체 JSP 페이지에 적용되는 속성들을 정의합니다.
	<br>
	<br>
	<B>syntax</B>
	<div class="code">
		<code> &lt;%@ page attribute="value" %> </code>
		<br>
	</div>
	<br> JSP page directives의 요소들
	<ul>
		<li>import</li>
		<li>content Type</li>
		<li>extends</li>
		<li>info</li>
		<li>buffer</li>
		<li>language</li>
		<li>isElIgored</li>
		<li>isThreadSafe</li>
		<li>autoFlush</li>
		<li>session</li>
		<li>page Encoding</li>
		<li>errorPage</li>
		<li>isErrorPage</li>

	</ul>
	<br>

	<h4 class="sub">1) import</h4>

	import 요소는 클래스, 인터페이스, 또는 패키지의 모든 요소들을 import하는데 사용됩니다.
	<br> 이것은 자바의 import keyword와 비슷합니다.
	<br>
	<br> Example:
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;%@ page
			import="java.util.Date" %> <br> Today is: &lt;%= new Date() %> <br>
			<br> &lt;/body> <br> &lt;/html> <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<%@ page import="java.util.Date"%>
		Today is:
		<%=new Date()%>
	</div>
	<br>
	<br>


	<h4 class="sub">2) content Type</h4>

	contentType 요소는 HTTP응답의 MIME(Multipurpose Internet Mail Extension) 유형을
	정의합니다.
	<br> 기본값은 "text / html; charset = ISO-8859-1"입니다.
	<br>
	<br> Example:
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;%@ page
			contentType=application/msword %> <br> Today is: &lt;%= new
			java.util.Date() %> <br> <br> &lt;/body> <br>
			&lt;/html> <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		Today is:
		<%=new java.util.Date()%>
	</div>
	<br>
	<br>


	<h4 class="sub">3) extends</h4>
	extends 요소는 생성된 서블릿에 의해, 상속될 부모 클래스를 정의합니다.
	<br> 거의 사용되지 않습니다.
	<br>
	<br>


	<h4 class="sub">4) info</h4>
	이 속성은 단순히 servlet 인터페이스의 getServletInfo() 메소드를 사용하여 후에 검색되는 JSP페이지의 정보를
	설정합니다.
	<br>
	<br>
	<br> Example:
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;%@ page
			info="composed by Sonoo Jaiswal" %> <br> Today is: &lt;%= new
			java.util.Date() %> <br> <br> &lt;/body> <br>
			&lt;/html> <br>
		</code>
	</div>
	<br> 웹 컨테이너는 메소드 getServletInfo()를 결과 서블렛에 작성합니다.
	<br> 예를 들어
	<br>
	<div class="result">
		<code>
			public String getServletInfo() { <br> return "composed by Sonoo
			Jaiswal"; <br> } <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<%@ page info="composed by Sonoo Jaiswal"%>
		Today is:
		<%=new java.util.Date()%>
	</div>
	<br>
	<br>

	<h4 class="sub">5) buffer</h4>
	buffer 속성은 JSP 페이지에서 생성된 출력을 처리하기 위해 버퍼 크기를 킬로바이트 단위로 설정합니다.
	<br> 버퍼의 기본 크기는 8Kb입니다.
	<br>
	<br> Example:
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;%@ page
			buffer="16kb" %> Today is: &lt;%= new java.util.Date() %> <br>&lt;/body>
			<br> &lt;/html> <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<%@ page buffer="16kb"%>
		Today is:
		<%=new java.util.Date()%>
	</div>
	<br>
	<br>
	<h4 class="sub">6) language</h4>
	language 속성은 JSP 페이지에서 사용되는 스크립팅 언어를 지정합니다.
	<br>기본값은 "java"입니다.
	<br>
	<Br>


	<h4 class="sub">7) isElIgored</h4>
	isELIgnored 속성으로 jsp의 EL (Expression Language)을 무시할 수 있습니다. 기본적으로이 값은
	false입니다. 즉, Expression Language는 기본적으로 사용됩니다.
	<br>나중에 표현 언어를 볼 수 있습니다.
	<br>
	<div class="code">
		<code> &lt;% @ page isELIgnored = "true" %> // 이제 EL은 무시됩니다 </code>
	</div>
	<br>
	<br>

	<h4 class="sub">8) isThreadSafe</h4>

	서블릿과 JSP는 모두 다중 스레드입니다. JSP 페이지의이 동작을 제어하려면 페이지 지시문의 isThreadSafe 속성을
	사용할 수 있습니다.
	<br> isThreadSafe 값의 값은 true입니다. False로 설정하면 웹 컨테이너가 여러 요청을
	직렬화합니다. 즉, 다른 요청을 전달하기 전에 JSP가 요청에 대한 응답을 완료 할 때까지 기다립니다.
	<br>
	<br> isThreadSafe 속성 값을 다음과 같이 설정하는 경우 :

	<div class="code">
		<code> &lt;%@ page isThreadSafe="false" %> </code>
	</div>
	<br>
	<br> 이 경우 웹 컨테이너는 다음과 같이 서블릿을 생성합니다.
	<br>
	<div class="result">
		<code> public class SimplePage_jsp extends HttpJspBase
			implements SingleThreadModel{ ....... } </code>
	</div>
	<br>
	<Br>


	<h4 class="sub">9) errorPage</h4>
	errorPage 속성은 오류 페이지를 정의하는 데 사용되며 현재 페이지에서 예외가 발생하면 오류 페이지로 리디렉션됩니다.
	<br>
	<br> Example:
	<div class="code">
		<code>
			//index.jsp &lt;html> <br> &lt;body> <br> <br> &lt;%@
			page errorPage="myerrorpage.jsp" %> <br>
			<br> &lt;%= 100/0 %> <br> <br>&lt;/body> <br>
			&lt;/html> <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<a href="./index.jsp">Go to index.jsp</a>
	</div>
	<br>
	<br>

	<h4 class="sub">10) isErrorPage</h4>
	isErrorPage 속성은 현재 페이지가 오류 페이지임을 선언하는 데 사용됩니다.
	<br> *참고 : 예외 개체는 오류 페이지에서만 사용할 수 있습니다.


	<br>
	<br> Example:
	<div class="code">
		<code>
			//myerrorpage.jsp &lt;html> <br> &lt;body> <br> <br>
			&lt;%@ page isErrorPage="true" %> <br>
			<Br> Sorry an exception occured!<br /> The exception is: &lt;%=
			exception %> <br> <br>&lt;/body> <br> &lt;/html> <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<a href="./myerrorpage.jsp">Go to myerrorpage.jsp</a>
	</div>
	<br>
	<br>


	<h4>JSP include directive</h4>
	include directive는 jsp 파일, html 파일 또는 텍스트 파일일 수 있는 모든 자원의 내용을 포함하는 데
	사용됩니다.
	<br> include directive는 페이지 변환시 포함 된 자원의 원래 컨텐츠를 포함합니다. (jsp 페이지는
	한 번만 변환되므로 정적 자원을 포함하는 것이 좋습니다).
	<br>
	<br>
	<b>Include directive의 장점</b>
	<br> ->Code Reusability
	<br> ->코드 재사용성
	<br>
	<br>

	<b>syntax:</b>
	<br>
	<div class="code">&lt;%@ include file="resourceName" %></div>
	<br> Example:
	<br>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br>
			<br> &lt;%@ include file="header.html" %> <br>
			<br> Today is: &lt;%= java.util.Calendar.getInstance().getTime()
			%> <br>
			<br>&lt;/body> <br> &lt;/html>
		</code>

	</div>
	<br>이 예제는 header.html 파일의 내용을 포함합니다. 이 예제를 실행하려면 header.html파일을
	생성하세요. *참고 : include 지시문에는 원본 내용이 포함되므로 실제 페이지 크기는 런타임에 커집니다.
	<br>

	<br>header.html
	<br>
	<div class="code">
		<code>
			&lt;html><br> &lt;body><br> It's is header.html
			file.&lt;br><br> Can you include me?&lt;br><br> &lt;/body><br>
			&lt;/html>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<%@ include file="header.html"%>

		Today is:
		<%=java.util.Calendar.getInstance().getTime()%>

	</div>
	<br>
	<br>


	<h4>JSP taglib directive</h4>
	JSP taglib directive는 많은 태그를 정의하는 태그 라이브러리를 정의하는 데 사용됩니다.
	<Br> TLD (Tag Library Descriptor) 파일을 사용하여 태그를 정의합니다.
	<Br> 맞춤 태그 섹션에서는이 태그를 사용하므로 맞춤 태그에서 배우는 것이 좋습니다.
	<br>
	<br>
	<b>Syntax:</b>
	<Br>
	<div class="code">
		<code> &lt;%@ taglib uri="uriofthetaglibrary"
			prefix="prefixoftaglibrary" %> </code>
	</div>
	<Br>
	<br> Example:
	<Br>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br>
			<br> &lt;%@ taglib uri="http://www.javatpoint.com/tags"
			prefix="mytag" %> <br>
			<br>&lt;mytag:currentDate/> <br>
			<br> &lt;/body> <br> &lt;/html> <br>
		</code>
	</div><br>
	이 예에서는 currentDate라는 태그를 사용하고 있습니다. 이 태그를 사용하려면 컨테이너가 태그에 대한 정보를 얻을 수 있도록 taglib 지시문을 지정해야합니다.

	<br><br>
	<h3 style="color: #a18ad4;">Action Elements</h3>

	<h4>jsp: forward</h4>
	<h4>jsp: include</h4>
	<h4>Java Been class</h4>
	<h4>jsp: useBean</h4>
	<h4>set & getProperty</h4>
	<h4>Displaying applet in JSP</h4>

	<h3 style="color: #a18ad4;">Expression Language</h3>

	<h4>Concept</h4>
	<h4>Example</h4>


</body>
</html>