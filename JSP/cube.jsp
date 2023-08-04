<html>

<body>
    <form method="post">
        <p>
            Enter the number:<br>
            <input type="number" name="num">
            <input type="submit" value="Submit">
        </p>
    </form>
    <%! 
        int cube(int n) {
            return n * n * n;
        }
    %>
    <%
        String strNum = request.getParameter("num");
        if (strNum != null) {
            int number = Integer.parseInt(strNum);
            out.println("Cube of " + number + " is " + cube(number));
        }
    %>
</body>

</html>