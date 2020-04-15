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

  // @Override
  public void doGet(HttpServletRequest request, HttpServletResponse response)
    throws ServletException, IOException{
      // HTTP session = request.getSession();
      String user = request.getParameter("EnterU");
      // String pass = request.getParameter("Enter password");

      try (
        Connection conn = DriverManager.getConnection(
            "jdbc:mysql://localhost:3306/gamebase",
            "user1", "4444");   // For MySQL
             // The format is: "jdbc:mysql://hostname:port/databaseName", "username", "password"

        // Statement stmt = conn.createStatement();

        PreparedStatement upd = conn.prepareStatement("SELECT * FROM data username=?;");
        // upd.setString(1,user.getText());
      ) {
        ResultSet rs = upd.executeQuery();
        // upd.executeQuery();
        // ResultSet rs = upd.getResultSet();

        // response.sendRedirect("http://localhost:9999/chatroom/homepage.html");

        // while(rs.next()){
        //   String checkUser = rs.getString("username");
        //   // String checkPass = rs.getString("password");
        //   if (user.equals(checkUser)) {
            response.sendRedirect("homepage.html");
        //     break;
        //   }
        // }
        // response.sendRedirect("http://localhost:9999/chatroom/login-create.html");
      } catch (Exception ex) {
        ex.printStackTrace();
      }
  }

}
