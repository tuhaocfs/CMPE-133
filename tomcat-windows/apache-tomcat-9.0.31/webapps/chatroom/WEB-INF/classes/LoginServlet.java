// To save as "<TOMCAT_HOME>\webapps\chatroom\WEB-INF\classes\LoggerServlet.java".
import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.annotation.*;

@WebServlet("/login")
public class LoginServlet extends HttpServlet{
  // public LoginServlet(){
  //   super();
  // }

  @Override
  public void doGet(HttpServletRequest request, HttpServletResponse response)
    throws ServletException, IOException{
      // HTTP session = request.getSession();
      String username = request.getParameter("name");
      String password = request.getParameter("pass");

      Connection conn = DriverManager.getConnection(
          "jdbc:mysql://localhost:9999/gamebase?allowPublicKeyRetrieval=true&useSSL=false&serverTimezone=UTC",
          "user1", "4444");   // For MySQL
           // The format is: "jdbc:mysql://hostname:port/databaseName", "username", "password"

      Statement stmt = conn.createStatement();



      response.sendRedirect("http://localhost:9999/chatroom/homepage.html");
  }

  // public void doPost(HttpServletRequest request, HttpServletResponse response)
  //   throws ServletException, IOException{
  //   doGet(request, response);
  //
    // String username = request.getParameter("");
    // String password = request.getParameter("");
  //
  //   response.sendRedirect("http://localhost:9999/chatroom/homepage.html");
  // }
}
