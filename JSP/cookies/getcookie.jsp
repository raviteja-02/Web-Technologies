<%@page import = "java.util.*, java.io.*"%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Cookie</title>
</head>
<body>
    <%
        Cookie[] cookies = request.getCookies();
        for(int i = 0; i<cookies.length; i++) {
            out.println(cookies[i].getName() + ":" + cookies[i].getValue());
        }
    %>
</body>
</html>