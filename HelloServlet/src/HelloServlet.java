
import java.io.PrintWriter;

import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;

@WebServlet("/HelloServlet")
public class HelloServlet extends HttpServlet {

	public HelloServlet() {
		super();
	}

protected void doGet(HttpServletRequest request, HttpServletResponse response) throws
ServletException, I0Exception{
	PrintWriter out=response,getWriter();
	out.println("<HTML>");
	out.println("<BODY>");
	out.println("<H3>Hello Servlet!</H3>");
	out.println("</BODY>");
	out.println("</HTML>");
}
}