import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Subtraction extends HttpServlet
{
    // public Subtraction()
    // {
    //     System.out.print("Hello");
    // }

    public void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException
    {
        PrintWriter pw = res.getWriter();
        res.setContentType("text/html");
        int first = req.getParameter("first");
        int second = req.getParameter("second");
        int sub = first - second;
        pw.println("<h1>Subtraction:<h1>");
        pw.print(pw);
    }
}