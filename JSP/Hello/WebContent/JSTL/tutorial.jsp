<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>JSTL Tutorial</title>
<style>
table, th, td {
	border: 1px solid black;
}

.code {
	border: 1px solid black;
	padding: 10px;
	background-color: #e8c47b;
}

.result {
	border: 1px solid black;
	padding: 10px;
	background-color: #f0e3c9;
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
<h1>JSTL</h1>

	<h3 style="color:#e8c47b;">JSTL Tutorial</h3>
	The JSP Standard Tag Library (JSTL) represents a set of tags to simplify the JSP development.<br><br>
	<b>Advantage of JSTL</b>
	<ol>
	<li>Fast Development</li>
	<li>Code Reusability</li>
	<li>No need to use scriptlet tag</li>
	</ol>
	
	<h4>JSTL Tags</h4>
	<table>
	<tr><th>Tag Name</th><th>Description</th></tr>
	<tr><td>Core tags</td><td>JSTL 코어 태그는 변수 지원, URL 관리, 흐름 제어 등을 제공합니다. 코어 태그의 URL은 http://java.sun.com/jsp/jstl/core 입니다. 핵심 태그의 접두사는 c 입니다.</td></tr>
	<tr><td>Function tags</td><td>함수 태그는 문자열 조작 및 문자열 길이를 지원합니다. 함수 태그의 URL은 http://java.sun.com/jsp/jstl/functions 이고 접두사는 fn 입니다.</td></tr>
	<tr><td>Formatting tags</td><td>형식화 태그는 메시지 형식화, 번호 및 날짜 형식화 등을 지원합니다. 형식화 태그의 URL은 http://java.sun.com/jsp/jstl/fmt 이며 접 두부는 fmt 입니다.</td></tr>
	<tr><td>XML tags</td><td>XML 태그는 흐름 제어, 변환 등을 제공합니다. XML 태그의 URL은 http://java.sun.com/jsp/jstl/xml 이고 접두사는 x 입니다.</td></tr>
	<tr><td>SQL tags</td><td>JSTL SQL 태그는 SQL 지원을 제공합니다. SQL 태그의 URL은 http://java.sun.com/jsp/jstl/sql 이며 접두사는 sql 입니다.</td></tr>
	</table>
	<br>
	
	
	<h3 style="color: #e8c47b;">JSTL Core Tags</h3>
	JSP에 JSTL 코어 라이브러리를 포함하는 데 사용되는 구문은 다음과 같습니다.
	<br>
	Syntax:<br>
	<div class="code">
	<code>
	&lt; % @ taglib  uri = "http://java.sun.com/jsp/jstl/core" 접두사 = "c"  % >   
	</code>
	</div><br>
	<h4>JSTL 핵심 태그 목록</h4>
	<table>
	<tr><th>Tags</th><th>Description</th></tr>
	<tr><td><a href="./out.jsp">c:out</a></td><td>It display the result of an expression, similar to the &lt;%=...%> tag work.</td></tr>
	<tr><td><a href="./import.jsp">c:import</a></td><td>It Retrives relative or an absolute URL and display the contents to either a String in 'var',a Reader in 'varReader' or the page.</td></tr>
	<tr><td><a href="./set.jsp">c:set</a></td><td>It sets the result of an expression under evaluation in a 'scope' variable.</td></tr>
	<tr><td><a href="./remove.jsp">c:remove</a></td><td>It is used for removing the specified scoped variable from a particular scope.</td></tr>
	<tr><td><a href="./catch.jsp">c:catch</a></td><td>It is used for Catches any Throwable exceptions that occurs in the body.</td></tr>
	<tr><td><a href="./if.jsp">c:if</a></td><td>It is conditional tag used for testing the condition and display the body content only if the expression evaluates is true.</td></tr>
	<tr><td><a href="./choose.jsp">c:choose</a><br><a href="./choose2.jsp">c:when</a><br>c:otherwise</td><td>It is the simple conditional tag that includes its body content if the evaluated condition is true.</td></tr>
	<tr><td><a href="./for_each.jsp">c:forEach</a></td><td>It is the basic iteration tag. It repeats the nested body content for fixed number of times or over collection.</td></tr>
	<tr><td><a href="./for_tokens.jsp">c:forTokens</a></td><td>It iterates over tokens which is separated by the supplied delimeters.</td></tr>
	<tr><td><a href="./param.jsp">c:param</a></td><td>It adds a parameter in a containing 'import' tag's URL.</td></tr>
	<tr><td><a href="./redirect.jsp">c:redirect</a></td><td>It redirects the browser to a new URL and supports the context-relative URLs.</td></tr>
	<tr><td><a href="./url.jsp">c:url</a></td><td>It creates a URL with optional query parameters.</td></tr>
	
	</table><br>
	태그 이름을 눌러 예시 코드를 확인해보세요!
	
	
	
	<h3 style="color: #e8c47b">JSTL Function Tags</h3>
	<b>syntax:</b><br>
	<div class="code">
	<code>
	&lt;%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn" %>  
	</code>
	</div><br>
	<h4>JTSL Function Tags List</h4>
	<table>
	<tr><th>Tags</th><th>Description</th></tr>
	<tr><td>fn:contains()</td><td>It is used to test if an input string containing the specified substring in a program.</td></tr>
	<tr><td>fn:containsIgnoreCase()</td><td>It is used to test if an input string contains the specified substring as a case insensitive way.</td></tr>
	<tr><td>fn:endsWith()</td><td>It is used to test if an input string ends with the specified suffix.</td></tr>
	<tr><td>fn:escapeXml()</td><td>It escapes the characters that would be interpreted as XML markup.</td></tr>
	<tr><td>fn:indexOf()</td><td>It returns an index within a string of first occurrence of a specified substring.
	</td></tr>
	<tr><td>fn:trim()</td><td>It removes the blank spaces from both the ends of a string.</td></tr>
	<tr><td>fn:startsWith()</td><td>It is used for checking whether the given string is started with a particular string value.</td></tr>
	<tr><td>fn:split()</td><td>It splits the string into an array of substrings.</td></tr>
	<tr><td>fn:toLowerCase()</td><td>It converts all the characters of a string to lower case.</td></tr>
	<tr><td>fn:toUpperCase()</td><td>It converts all the characters of a string to upper case.</td></tr>
	<tr><td>fn:substring()</td><td>It returns the subset of a string according to the given start and end position.</td></tr>
	<tr><td>fn:substringAfter()</td><td>It returns the subset of string after a specific substring.</td></tr>
	<tr><td>fn:substringBefore()</td><td>It returns the subset of string before a specific substring.</td></tr>
	<tr><td>fn:length()</td><td>It returns the number of characters inside a string, or the number of items in a collection.</td></tr>
	<tr><td>fn:replace()</td><td>It replaces all the occurrence of a string with another string sequence.</td></tr>
	</table>
	
	
	<h3 style="color: #e8c47b;">JSTL Formatting</h3>
	<b>syntax:</b><br>
	<div class="code">
	<code>
	boolean contains(java.lang.String, java.lang.String)  
	</code>
	</div><br>
	Example:<br>
	<div class="code">
	<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>  
	<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn" %>  
	<code>
		&lt;%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>  <br>
		&lt;%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn" %>  <br><br>
		&lt;html>  <br>
		&lt;head>  <br>
		&lt;title>Using JSTL Functions&lt;/title>  <br>
		&lt;/head>  <br>
		&lt;body>  <br><br>
		  
		&lt;c:set var="String" value="Welcome to javatpoint"/><br>  
		  
		&lt;c:if test=&quot;${fn:contains(String, 'javatpoint')}"><br>
		   &lt;p>Found javatpoint string&lt;p>  <br>
		&lt;/c:if>  <br><br>
		  
		&lt;c:if test=&quot;${fn:contains(String, 'JAVATPOINT')}"><br>  
		   &lt;p>Found JAVATPOINT string&lt;p>  <br>
		&lt;/c:if>  <br><br>
		  
		&lt;/body>  <br>
		&lt;/html>  <br>
	</code>
	</div>
	<br>
	<b>Result:</b><br>
	<div class="result">
	Found javatpoint string  
	</div>
	<img src="https://static.javatpoint.com/jsppages/jstl/images/jstl-function-tags1.png">
	<h4 style="color: #e8c47b;">Tags</h4>
	<b>Syntax:</b><br>
	<div class="code">
	<code>
	&lt;%@ taglib uri="http://java.sun.com/jsp/jstl/fmt" prefix="fmt"  %>  
	</code>
	</div><br>
	<Table>
	<tr><th>Tags</th><th>Description</th></tr>
	<tr><td>fmt:parseNumber</td><td>It is used to Parses the string representation of a currency, percentage or number.</td></tr>
	<tr><td>fmt:timeZone</td><td>It specifies a parsing action nested in its body or the time zone for any time formatting.</td></tr>
	<tr><td>fmt:formatNumber</td><td>It is used to format the numerical value with specific format or precision.</td></tr>
	<tr><td>fmt:parseDate</td><td>It parses the string representation of a time and date.</td></tr>
	<tr><td>fmt:bundle</td><td>It is used for creating the ResourceBundle objects which will be used by their tag body</td></tr>
	<tr><td>fmt:setTimeZone</td><td>It stores the time zone inside a time zone configuration variable.</td></tr>
	<tr><td>fmt:setBundle</td><td>It loads the resource bundle and stores it in a bundle configuration variable or the named scoped variable.</td></tr>
	<tr><td>fmt:message</td><td>It display an internationalized message.</td></tr>
	<tr><td>fmt:formatDate</td><td>It formats the time and/or date using the supplied pattern and styles.</td></tr>
	</Table>

	<h3 style="color: #e8c47b;">JSTL XML Tags</h3>
	<b>syntax:</b><br>
	<div class="code">
	<code>
	&lt;%@ taglib uri="http://java.sun.com/jsp/jstl/xml" prefix="x" %>   
	</code>
	</div><br>	
	<Table>
	<tr><th>Tags</th><th>Description</th></tr>
	<tr><td>x:out</td><td>Similar to &lt;%= ... > tag, but for XPath expressions.</td></tr>
	<tr><td>x:parse</td><td>It is used for parse the XML data specified either in the tag body or an attribute.</td></tr>
	<tr><td>x:set</td><td>It is used to sets a variable to the value of an XPath expression.</td></tr>
	<tr><td>x:choose</td><td>It is a conditional tag that establish a context for mutually exclusive conditional operations.</td></tr>
	<tr><td>x:when</td><td>It is a subtag of that will include its body if the condition evaluated be 'true'.</td></tr>
	<tr><td>x:otherwise</td><td>It is subtag of that follows tags and runs only if all the prior conditions evaluated be 'false'.</td></tr>
	<tr><td>x:if</td><td>It is used for evaluating the test XPath expression and if it is true, it will processes its body content.</td></tr>
	<tr><td>x:transform</td><td>It is used in a XML document for providing the XSL(Extensible Stylesheet Language) transformation.</td></tr>
	<tr><td>x:param</td><td>It is used along with the transform tag for setting the parameter in the XSLT style sheet.</td></tr>
	</Table>
	
	
	<h3 style="color: #e8c47b;">JSTL SQL Tags</h3>
	<b>syntax:</b><br>
	<div class="code">
	<code>
	&lt;%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql" %>  
	</code>
	</div><br>
	<Table>
	<tr><th>Tags</th><th>Description</th></tr>
	<tr><td>sql:setDataSource</td><td>It is used for creating a simple data source suitable only for prototyping.</td></tr>
	<tr><td>sql:query</td><td>It is used for executing the SQL query defined in its sql attribute or the body.</td></tr>
	<tr><td>sql:update</td><td>It is used for executing the SQL update defined in its sql attribute or in the tag body.</td></tr>
	<tr><td>sql:param</td><td>It is used for sets the parameter in an SQL statement to the specified value.</td></tr>
	<tr><td>sql:dateParam</td><td>It is used for sets the parameter in an SQL statement to a specified java.util.Date value.</td></tr>
	<tr><td>sql:transaction</td><td>It is used to provide the nested database action with a common connection.</td></tr>
	</Table>
</body>
</html>