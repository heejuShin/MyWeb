
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
			page errorPage="myerrorpage.jsp" %> <br> <br> &lt;%= 100/0
			%> <br> <br>&lt;/body> <br> &lt;/html> <br>
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
			&lt;%@ page isErrorPage="true" %> <br> <Br> Sorry an
			exception occured!<br /> The exception is: &lt;%= exception %> <br>
			<br>&lt;/body> <br> &lt;/html> <br>
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
			&lt;html> <br> &lt;body> <br> <br> &lt;%@ include
			file="header.html" %> <br> <br> Today is: &lt;%=
			java.util.Calendar.getInstance().getTime() %> <br> <br>&lt;/body>
			<br> &lt;/html>
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
			&lt;html> <br> &lt;body> <br> <br> &lt;%@ taglib
			uri="http://www.javatpoint.com/tags" prefix="mytag" %> <br> <br>&lt;mytag:currentDate/>
			<br> <br> &lt;/body> <br> &lt;/html> <br>
		</code>
	</div>
	<br> 이 예에서는 currentDate라는 태그를 사용하고 있습니다. 이 태그를 사용하려면 컨테이너가 태그에 대한
	정보를 얻을 수 있도록 taglib 지시문을 지정해야합니다.

	<br>
	<br>
	<h3 style="color: #a18ad4;">Action Elements</h3>

	Action 태그는 페이지간 플로우를 제어하고 Java Bean을 사용하는데 사용됩니다.
	<br>
	<br> The Jsp action tags are given below:
	<br>
	<br>
	<table>
		<tr>
			<th>JSP Action Tags</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>jsp: forward</td>
			<td>forwards the request and response to another resource.</td>
		</tr>
		<tr>
			<td>jsp: include</td>
			<td>includes another resource.</td>
		</tr>
		<tr>
			<td>jsp: useBean</td>
			<td>creates or locates bean object.</td>
		</tr>
		<tr>
			<td>jsp: setProperty</td>
			<td>sets the value of property in bean object.</td>
		</tr>
		<tr>
			<td>jsp: getProperty</td>
			<td>prints the value of property of the bean.</td>
		</tr>
		<tr>
			<td>jsp: plugin</td>
			<td>embeds another components such as applet.</td>
		</tr>
		<tr>
			<td>jsp: param</td>
			<td>sets the parameter value. It is used in forward and include
				mostly.</td>
		</tr>
		<tr>
			<td>jsp: fallback</td>
			<td>can be used to print the message if plugin is working. It is
				used in jsp:plugin.</td>
		</tr>
	</table>
	<br> jsp : useBean, jsp : setProperty 및 jsp : getProperty 태그는 Bean
	개발에 사용됩니다.
	<br> 그래서 우리는이 태그들을 bean developmentement에서 볼 것입니다.
	<br>
	<br>
	<br>
	<h4>jsp: forward</h4>
	jsp : forward 조치 태그는 요청을 다른 자원으로 전달하는 데 사용되며 jsp, html 또는 다른 자원 일 수
	있습니다.
	<br>
	<h4 class="sub">
		=> forward action tag <span style="background-color: yellow">without</span>
		parameter
	</h4>
	<b>Syntax:</b>
	<br>
	<div class="code">
		<code> &lt;jsp:forward page="relativeURL | &lt;%= expression
			%>" /> </code>
	</div>
	<br> Example: 이 예에서는 요청을 printdate.jsp 파일로 전달합니다.
	<br>
	<b>index.jsp</b>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;h2>this is
			index page&lt;/h2> <br>
			<br> &lt;jsp:forward page="printdate.jsp" /> <br> <br>&lt;/body>
			<br> &lt;/html> <br>
		</code>
	</div>
	<br>
	<b>printdate.jsp</b>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;%
			out.print("Today is:"+java.util.Calendar.getInstance().getTime()); %>
			<br>&lt;/body> <br> &lt;/html> <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<a href="./index1.jsp">Go to index.jsp</a>
	</div>
	<br>
	<h4 class="sub">
		=>forward action tag <span style="background-color: yellow">with</span>
		parameter
	</h4>
	<b>Syntax:</b>
	<br>
	<div class="code">
		<code> &lt;jsp:forward page="relativeURL | &lt;%= expression
			%>"> &lt;jsp:param name="parametername" value="parametervalue |
			&lt;%=expression%>" /> &lt;/jsp:forward> </code>
	</div>
	<br> Example: 이 예에서는 매개 변수를 사용하여 요청을 printdate.jsp 파일로 전달하고
	printdate.jsp 파일은 날짜 및 시간과 함께 매개 변수 값을 인쇄합니다.
	<br>
	<br>
	<b>index.jsp</b>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;h2>this is
			index page&lt;/h2> <br>
			<br> &lt;jsp:forward page="printdate.jsp" /> <br>
			&lt;jsp:param name="name" value="javatpoint.com" /> &lt;/jsp:forward>
			<br>&lt;/body> <br> &lt;/html> <br>
		</code>
	</div>
	<br>
	<b>printdate.jsp</b>
	<div class="code">
		<code>
			&lt;html> <br> &lt;body> <br> <br> &lt;%
			out.print("Today is:"+java.util.Calendar.getInstance().getTime()); %>
			<br> &lt;%= request.getParameter("name") %> <br>&lt;/body>
			<br> &lt;/html> <br>
		</code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<a href="./index2.jsp">Go to index.jsp</a>
	</div>
	<br>
	<br>




	<h4>jsp: include</h4>
	jsp: include는 다른 자원들의 콘텐츠(jsp, html, servlet)를 포함하도록 사용된다.
	<br> jsp 포함 조치 태그에는 요청시 자원이 포함되므로 나중에 변경 될 수 있으므로 동적 페이지에 더 좋습니다.
	<br> jsp : include 태그는 정적 페이지와 동적 페이지를 포함하는 데 사용할 수 있습니다.
	<br>
	<br>

	<b>jsp:include action tag의 장점</b>
	<br> 코드 재사용 성 : 모든 페이지에 머리글 및 바닥 글 페이지를 포함하는 등 여러 페이지를 사용할 수 있습니다.
	따라서 많은 시간이 절약됩니다.
	<br>
	<br>

	<b>jsp includ directive와 include의 차이점</b>
	<br>
	<table>
		<tr>
			<th>JSP include directive</th>
			<th>JSP include action</th>
		</tr>
		<tr>
			<td>includes resource at translation time.</td>
			<td>includes resource at request time.</td>
		</tr>
		<tr>
			<td>better for static pages.</td>
			<td>better for dynamic pages.</td>
		</tr>
		<tr>
			<td>includes the original content in the generated servlet.</td>
			<td>calls the include method.</td>
		</tr>
	</table>
	<br>

	<h4 class="sub">
		=> include action tag <span style="background-color: yellow">without</span>
		parameter
	</h4>
	<b>Syntax:</b>
	<br>
	<div class="code">
		<code> &lt;jsp:include page="relativeURL | &lt;%= expression
			%>" /> </code>
	</div>
	<br> Example: 이 예에서 index.jsp 파일에는 printdate.jsp 파일의 내용이 포함됩니다.
	<br>
	<b>index.jsp</b>
	<div class="code">
		<code> &lt;h2>this is index page&lt;/h2> &lt;jsp:include
			page="printdate.jsp" /> &lt;h2>end section of index page&lt;/h2> </code>
	</div>
	<br>
	<b>printdate.jsp</b>
	<div class="code">
		<code> &lt;% out.print("Today
			is:"+java.util.Calendar.getInstance().getTime()); %> </code>
	</div>
	<br> Result:
	<br>
	<div class="result">
		<a href="./index3.jsp">Go to index.jsp</a>
	</div>
	<img
		src="https://static.javatpoint.com/jsppages/images/jspincludetag.png">
	<br>
	<h4 class="sub">
		=>include action tag <span style="background-color: yellow">with</span>
		parameter
	</h4>
	<b>Syntax:</b>
	<br>
	<div class="code">
		<code> &lt;jsp:include page="relativeURL | &lt;%= expression
			%>"> &lt;jsp:param name="parametername" value="parametervalue |
			&lt;%=expression%>" /> &lt;/jsp:include> </code>
	</div>
	<br>
	<br>

	<h4>Java Been class</h4>
	JavaBean은 다음 규칙을 따라야하는 Java 클래스입니다.
	<br>
	<ul>
		<li>인수가없는 생성자가 있어야합니다.</li>
		<li>직렬화 가능해야합니다.</li>
		<li>getter 및 setter 메소드라고하는 특성 값을 설정하고 가져 오는 메소드를 제공해야합니다.</li>
	</ul>
	<br>
	<br>
	<b>Why use JavaBean?</b>
	<br>
	<br> ->Java 백서에 따르면 재사용 가능한 소프트웨어 구성 요소입니다. 빈은 여러 객체를 하나의 객체로
	캡슐화하여 여러 장소에서이 객체에 액세스 할 수 있습니다. 또한 유지 보수가 용이합니다.

	<br>
	<br>Example:
	<br>
	<div class="code">
		<code>
			//Employee.java <br> <br> package mypack; <br> public
			class Employee implements java.io.Serializable{ <br> private int
			id; <br> private String name; <br> public Employee(){} <br>
			public void setId(int id){this.id=id;} <br> public int
			getId(){return id;} <br> public void setName(String
			name){this.name=name;} <br> public String getName(){return
			name;} <br> } <br>
		</code>
	</div>
	<br> JavaBean 클래스에 액세스하려면 getter 및 setter 메소드를 사용해야합니다.
	<Br>
	<br>
	<div class="code">
		<code>
			package mypack; <br> public class Test{ <br> public static
			void main(String args[]){ <br> Employee e=new
			Employee();//object is created <br> e.setName("Arjun");//setting
			value to the object <br> System.out.println(e.getName()); <br>
			}} <br>
		</code>
	</div>
	* 참고 : 개체에 값을 제공하는 방법에는 두 가지가 있습니다. 하나는 생성자에 의한 것이고 두 번째는 setter 메소드에
	의한 것입니다.
	<br>
	<h4 class="sub">JavaBeen Properties</h4>
	JavaBean 특성은 오브젝트의 사용자가 액세스 할 수있는 명명 된 기능입니다.
	<br> 기능은 사용자가 정의한 클래스를 포함하는 모든 Java 데이터 유형일 수 있습니다.
	<br>
	<br> JavaBean 특성은 읽기, 쓰기, 읽기 전용 또는 쓰기 전용 일 수 있습니다.
	<br> JavaBean 기능은 JavaBean 구현 클래스의 두 가지 메소드를 통해 액세스됩니다.
	<br>
	<br>

	<b>1. getPropertyName ()</b>
	<Br> 예를 들어, 특성 이름이 firstName 인 경우 메소드 이름은 getFirstName ()으로 해당 특성을
	읽습니다. 이 메서드를 접근 자라고합니다.

	<Br>
	<br>
	<B>2. setPropertyName ()</B>
	<br> 예를 들어, 속성 이름이 firstName 인 경우 해당 속성을 쓰려면 메서드 이름이 setFirstName
	()이됩니다. 이 방법을 뮤 테이터라고합니다.

	<br>
	<br>JavaBean의 장점
	<ul>
		<li>JavaBean 등록 정보 및 메소드는 다른 응용 프로그램에 노출 될 수 있습니다.
		<li>소프트웨어 구성 요소를 쉽게 재사용 할 수 있습니다.
	</ul>

	<br>JavaBean의 단점
	<ul>
		<li>JavaBean은 변경 가능합니다. 따라서 불변 객체의 이점을 활용할 수 없습니다.
		<li>각 속성에 대해 setter 및 getter 메서드를 별도로 만들면 상용구 코드가 발생할 수 있습니다.
	</ul>



	<h4>jsp: useBean</h4>
	jsp : useBean 조치 태그는 Bean 클래스를 찾거나 인스턴스화하는 데 사용됩니다.
	<br> Bean 클래스의 Bean 오브젝트가 이미 작성된 경우 범위에 따라 Bean을 작성하지 않습니다.
	<br> 그러나 Bean의 오브젝트가 작성되지 않으면 Bean을 인스턴스화합니다.
	<br>
	<br>

	<b>Syntax:</b>
	<br>
	<div class="code">
		<code> &lt;jsp:useBean id= "instanceName" scope= "page |
			request | session | application" class= "packageName.className" type=
			"packageName.className" beanName="packageName.className | &lt;%=
			expression >" > &lt;/jsp:useBean> </code>
	</div>
	<br>
	<br>

	<h4 class="sub">jsp : useBean 조치 태그의 속성 및 사용법</h4>
	<ol>
		<li>id : 는 지정된 범위에서 Bean을 식별하는 데 사용됩니다.
		<li>scope : Bean의 범위를 나타냅니다. 페이지, 요청, 세션 또는 응용 프로그램 일 수 있습니다. 기본
			범위는 페이지입니다.
			<ul>
				<li>page : JSP 페이지 내에서이 Bean을 사용할 수 있도록 지정합니다. 기본 범위는 페이지입니다.
				<li>request : 동일한 요청을 처리하는 모든 JSP 페이지에서이 Bean을 사용할 수 있도록 지정합니다.
					페이지보다 범위가 넓습니다.
				<li>session : 동일한 요청을 처리하는지 여부에 관계없이 동일한 세션의 모든 JSP 페이지에서이
					Bean을 사용할 수 있도록 지정합니다. 요청보다 범위가 넓습니다.
				<li>application : 동일한 애플리케이션의 모든 JSP 페이지에서이 Bean을 사용할 수 있도록
					지정합니다. 세션보다 범위가 넓습니다.
			</ul>
		<li>class : 지정된 Bean 클래스를 인스턴스화합니다 (즉, Bean 클래스의 오브젝트를 작성 함). 인수가
			없거나 생성자가 없어야하며 추상적이어서는 안됩니다.
		<li>type : Bean이 이미 범위에있는 경우 Bean에 데이터 유형을 제공합니다. 주로 class 또는
			beanName 속성과 함께 사용됩니다. class 또는 beanName없이 사용하면 Bean이 인스턴스화되지 않습니다.
		<li>beanName : java.beans.Beans.instantiate () 메소드를 사용하여 Bean을
			인스턴스화하십시오.
	</ol><br>
	
	<h4 class="sub">jsp : useBean 액션 태그의 간단한 예</h4>
	<b>Calculator.java</b><br>
	<div class="code">
	<Code>
	package com.javatpoint;  <br>
	public class Calculator{ <br><br> 
	  
	public int cube(int n){return n*n*n;}  <br><br>
	  
	}  <br>
	</Code>
	</div><br><Br>
	<b>index.jsp</b><br>
	<div class="code">
	<Code>
	&lt;jsp:useBean id="obj" class="com.javatpoint.Calculator"/>  <br><br>
	  
	&lt;%  <br>
	int m=obj.cube(5);  <br>
	out.print("cube of 5 is "+m);  <br>
	%>  <br>
	</Code>
	</div><br><Br>
	Result:<br>
	<img src="https://static.javatpoint.com/images/jsp/usebean.JPG">
	
	<h4>set & getProperty</h4>
	setProperty 및 getProperty 조치 태그는 Java Bean으로 웹 애플리케이션을 개발하는 데 사용됩니다. <br>
	웹 개발에서 Bean 클래스는 데이터를 나타내는 재사용 가능한 소프트웨어 구성 요소이기 때문에 주로 사용됩니다.<br><br>
	
	jsp : setProperty 조치 태그는 setter 메소드를 사용하여 Bean에서 특성 값을 설정합니다.<br><br>
	
	<b>Syntax:</b><br>
	<div class="code"><code>
	&lt;jsp:setProperty name="instanceOfBean" property= "*"   |   <br>
	property="propertyName" param="parameterName"  |   <br>
	property="propertyName" value="{ string | &lt;%= expression %>}"   <br>
	/>  	<br>
	</code></div><br>
	Example of jsp: set Property action tag<br>
	Bean에서 수신 요청의 모든 값을 설정해야하는 경우
	<div class="code">
	<code>
	&lt;jsp:setProperty name="bean" property="*" />  
	
	</code></div>
	
	<h4>Displaying applet in JSP</h4>
	jsp : plugin 액션 태그는 jsp 파일에 애플릿을 포함시키는 데 사용됩니다.<br>
	 jsp : plugin 액션 태그는 클라이언트 측에서 플러그인을 다운로드하여 
	 애플릿 또는 Bean을 실행합니다.<br><Br>
	 
	 <b>Syntax:</b><br>
	 <div class="code">
	 <code>
		&lt;jsp:plugin type= "applet | bean" code= "nameOfClassFile"   
		codebase= "directoryNameOfClassFile"  
		&lt;/jsp:plugin>  	 
	 </code>
	 </div><br>
	 Example:<br>
	 <br>index.jsp
	 <div class="code">
	 <code>
			&lt;html> <br> 
		    &lt;head>  <br>
		        &lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  <br>
		        &lt;title>Mouse Drag&lt;/title>  <br>
		    &lt;/head>  <br>
		    &lt;body bgcolor="khaki">  <br>
		&lt;h1>Mouse Drag Example&lt;/h1>  <br><br>
		  
		 &lt;jsp:plugin align="middle" height="500" width="500"  <br>
		     type="applet"  code="MouseDrag.class" name="clock" codebase="."/>  <br>
		  
		    <br>&lt;/body>  <br>
		&lt;/html>  
	 </code>
	 </div>




	<h3 style="color: #a18ad4;">Expression Language</h3>
	
	<h4>Concept</h4>
		
	<b>The Expression Language</b>b> (EL) simplifies the accessibility of data stored in the Java Bean component, 
	and other objects like request, session, application etc.<br><br>
	
	There are many implicit objects, operators and reserve words in EL.<br><br>
	
	<b>Syntax:</b><br>
	<div class="code">
	<code>
	<pre>$</pre>{expression}
	</code>
	</div><br>
	
	Implicit Objects in Expression Language (EL)<br><br>
	<table>
	<tr><th>Implicit Objects</th><th>Usage</th></tr>
	<tr><td>pageScope</td><td>it maps the given attribute name with the value set in the page scope</td></tr>
	<tr><td>resultScope</td><td>it maps the given attribute name with the value set in the request scope</td></tr>
	<tr><td>sessionScope</td><td>it maps the given attribute name with the value set in the session scope</td></tr>
	<tr><td>applicationScope</td><td>it maps the given attribute name with the value set in the application scope</td></tr>
	<tr><td>param</td><td>it maps the request parameter to the single value</td></tr>
	<tr><td>paramValues</td><td>it maps the request parameter to an array of values</td></tr>
	<tr><td>header</td><td>it maps the request header name to the single value</td></tr>
	<tr><td>headerValues</td><td>it maps the request header name to an array of values</td></tr>
	<tr><td>cookie</td><td>it maps the given cookie name to the cookie value</td></tr>
	<tr><td>initParam</td><td>it maps the initialization parameter</td></tr>
	<tr><td>pageContext</td><td>it provides access to many objects request, session etc.
	</td></tr>
	</table>

	<h4>Example</h4>
	
	<h4 class="sub">EL param example</h4>
	index.jsp<Br>
	<div class="code">
	<code>
		&lt;form action="process.jsp">  <br>
		Enter Name:&lt;input type="text" name="name" /><br/><br/>  
		&lt;input type="submit" value="go"/>  <br>
		&lt;/form>  	
	</code>
	</div><br>
	result:
	<div class="result">
	<a href="./index4.jsp">Go to index.jsp</a>
	</div><br><br>
	
	
	<h4 class="sub">EL sessionScope example</h4>
	index.jsp<Br>
	<div class="code">
	<code>
		&lt;h3>welcome to index page&lt;/h3>  <br>
		&lt;%  <br>
		session.setAttribute("user","sonoo"); <br> 
		%>  <br><br>
		  
		&lt;a href="process.jsp">visit</a>  <br> 	
	</code>
	</div><br>
	result:
	<div class="result">
	<a href="./index5.jsp">Go to index.jsp</a>
	</div><br><br>
	
	
	
	<h4 class="sub">EL cookie example</h4>
	index.jsp<Br>
	<div class="code">
	<code>
		&lt;h1>First JSP&lt;/h1>  <br>
		&lt;%  <br>
		Cookie ck=new Cookie("name","abhishek");  <br>
		response.addCookie(ck);  <br>
		%>  <br>
		&lt;a href="process.jsp">click&lt;/a>  	<br>
	</code>
	</div><br>
	result:
	<div class="result">
	<a href="./index6.jsp">Go to index.jsp</a>
	</div><br><br>


</body>
</html>