<html>

<head>
    <title>
        Process
    </title>
</head>

<body>
    <%@ page errorPage="error.jsp"%>
    <%
        int x = Integer.parseInt(request.getParameter("n1"));
        int y = Integer.parseInt(request.getParameter("n2"));
        float div = x / y;
        out.println("divison = " + div);
    %>
</body>

</html>