<%@ page import="java.io.*" %>
<%@ page import="java.util.*" %>
<%@ page import="javax.servlet.*" %>
<%@ page import="javax.servlet.http.*" %>

<html>
  <body>
    <%
      String name = request.getParameter("name");
      String email = request.getParameter("email");

      session.setAttribute("name", name);
      application.setAttribute("email", email);
    %>

    <%= "Hello, " + name + "!" %><br>
    Your email address is <%= email %>.<br><br>

    Session ID: <%= session.getId() %><br>
    Servlet context path: <%= application.getContextPath() %><br>
    Servlet name: <%= config.getServletName() %><br>
    Page class: <%= page.getClass().getName() %><br>
    Page context attribute "name": <%= pageContext.findAttribute("name") %><br>
    Servlet context attribute "email": <%= application.getAttribute("email") %><br><br>

    <%! Exception exception; %>
    <%
      try {
        throw new Exception("Testing exception object");
      } catch (Exception e) {
        exception = e;
      }
    %>

    Exception message: <%= exception.getMessage() %>
  </body>
</html>
