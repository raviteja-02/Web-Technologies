<%@ page import="java.sql.*" %>
<html>
<head>
    <title>JDBC Program in JSP</title>
</head>
<body>
    <h1>Student List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>City</th>
        </tr>
        <% 
        try { 
            // Step 1: Register the JDBC driver (You may need to download and add the MySQL JDBC driver to your project)
            Class.forName("com.mysql.jdbc.Driver"); 
            // Step 2: Establish the connection to the database
            String url = "jdbc:mysql://localhost:3306/20_a9";
            String username = "root";
            String password = "";
            Connection conn = DriverManager.getConnection(url, username, password);
            // Step 3: Execute the query 
            String query = "SELECT * FROM students";
            Statement statement = conn.createStatement();
            ResultSet resultSet = statement.executeQuery(query);
            // Step 4: Process the results
            while (resultSet.next()) {
                int id = resultSet.getInt("id");
                String first_name = resultSet.getString("first_name");
                String last_name = resultSet.getString("last_name");
                int age = resultSet.getInt("age");
                String grade = resultSet.getString("grade");
                String city = resultSet.getString("city");
        %>
        <tr>
            <td><%= id %></td>
            <td><%= first_name %></td>
            <td><%= last_name %></td>
            <td><%= age %></td>
            <td><%= grade %></td>
            <td><%= city %></td>
        </tr>
        <% 
            }
            // Step 5: Close the resources
            resultSet.close();
            statement.close();
            conn.close();
        } catch (Exception e) { 
            // Handle any exceptions that may occur during the database connection or query execution 
            out.println("Error: " + e);
        }
        %>
    </table>
</body>
</html>
