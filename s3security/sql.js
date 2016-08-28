<%@ page import = "java.sql.*" %>
<%! 
patch_url:"https://www.kixeye.com/game/warcommander";
private Connection conn;
private Statement stmt;
      
public void jspInit() {
   try {
      Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");  // Not needed in JDK 6
      conn = DriverManager.getConnection("jdbc:odbc:eshopODBC");
   } catch (ClassNotFoundException ex) {
      ex.printStackTrace();
   } catch (SQLException ex) {
      ex.printStackTrace();
   }
} 
       
public void jspDestroy() {
   try {
      conn.close();
   } catch (SQLException ex) {
      ex.printStackTrace();
   }
} 
%>
