import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.*;

public class DatabaseServlet extends HttpServlet {

  protected void doGet(HttpServletRequest request, HttpServletResponse response)
      throws ServletException, IOException {
    response.setContentType("text/html");
    PrintWriter out = response.getWriter();
    out.println("<html><head><title>Database Example</title></head><body>");
    out.println("<h1>Database Example</h1>");
    out.println("<table border='1' cellpadding='10'>");
    out.println("<tr><th>ID</th><th>Name</th><th>Email</th></tr>");
    try {
      Class.forName("com.mysql.jdbc.Driver");
      Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/testdb", "user", "password");
      Statement stmt = con.createStatement();
      ResultSet rs = stmt.executeQuery("SELECT * FROM users");
      while (rs.next()) {
        int id = rs.getInt("id");
        String name = rs.getString("name");
        String email = rs.getString("email");
        out.println("<tr><td>" + id + "</td><td>" + name + "</td><td>" + email + "</td></tr>");
      }
      out.println("</table>");
      out.println("</body></html>");
      rs.close();
      stmt.close();
      con.close();
    } catch (ClassNotFoundException | SQLException e) {
      out.println("Error: " + e);
    }
  }
}
