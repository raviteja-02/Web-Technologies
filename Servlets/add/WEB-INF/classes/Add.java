import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.*;
import javax.servlet.http.*;

public class Add extends HttpServlet {
    public int a, b, result;

    public Add() {
        
    }

    public void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
        res.setContentType("text/html");
        PrintWriter pw = res.getWriter();
        a = Integer.parseInt(req.getParameter("fno"));
        b = Integer.parseInt(req.getParameter("sno"));
        result = a + b;
        pw.println("<h1>Result=" + result + "</h1>");
        pw.close();
    }
}