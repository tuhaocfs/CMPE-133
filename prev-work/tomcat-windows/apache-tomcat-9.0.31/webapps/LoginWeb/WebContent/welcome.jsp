<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<%-- <% 
request.getSession(false);
if (session == null) { %>
  <a href="http://localhost:8080/LoginWeb/home.jsp"> Home</a>
  <a href="http://localhost:8080/loginWeb/login.jsp"> Login</a>
  <% 
} else {
    // Already created.
    %>
  <a href="http://localhost:8080/LoginWeb/logout.jsp"> Logout</a><% 
}
String name = request.getParameter("name");
%>
<br><br>
<%
	out.println("Welcome: "+ name);
%> --%>

<h1>You successfully login </h1>
<a href="http://localhost:9999/LoginWeb/logout.jsp"> Logout</a>
</body>

</html>