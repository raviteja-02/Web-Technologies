<%@ page import="java.util.*,java.io.*" %>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Set Cookie</title>
    </head>

    <body>
        <% 
        String name=request.getParameter("name"); 
        String age=request.getParameter("age");
        int age1=Integer.parseInt(age);
        Cookie c1 = new Cookie("age",age);
        Cookie c = new Cookie("name",name);
        c.setMaxAge(60*60*24);
        response.addCookie(c);
        response.addCookie(c1);
        %>
        <h1>Cookie Set Successfully</h1>
        <br>
        <form action="getcookie.jsp">
            <input type="submit" value="Get Cookie!">
        </form>
    </body>

</html>