package dbproject2part3;
import java.sql.*;
import java.io.*;
import java.util.*;
import java.lang.String;


public class dbproject2part3 {

		   Connection conn;
		   public boolean OpenConnection() throws SQLException, IOException {

		      try {
		            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/vaccination_tracking_system","root","");  
		         return true;
		      }
		      catch (SQLException Sql) {
		         Sql.printStackTrace();
		         return false;
		      }
		   }

		   public void CloseConnection() throws SQLException {
		      conn.close();
		   }

		   public void Insert() {
		      try {
		         File csv;
		         Scanner scanner;
		         Statement st = conn.createStatement();
		         String Sql;

		         csv= new File( "C:\\Users\\Nikitha Chennamaneni\\Desktop\\edunikki\\MS-Texas\\4th Sem\\db\\project2_part3\\manufactures.csv");
		         scanner = new Scanner(csv);
		         while (scanner.hasNextLine()) {
		        	 
		             String str = scanner.nextLine();
		             String[] arrvalue = str.split(",");
		             Sql = "INSERT INTO manufacturers " +
		                     "VALUES (" + arrvalue[0] + ", '" + arrvalue[1] + "', '" + arrvalue[2] + "', '" + arrvalue[3] + "' ," + arrvalue[4]+",'" + arrvalue[5]+"')"+";";
		             System.out.println(Sql);
		             st.executeUpdate(Sql);

		         }
		         
		         csv = new File("C:\\Users\\Nikitha Chennamaneni\\Desktop\\edunikki\\MS-Texas\\4th Sem\\db\\project2_part3\\tot_doses_distributed.csv");
		         scanner = new Scanner(csv);
		         while (scanner.hasNextLine()) {
		            String str = scanner.nextLine();
		            String[] arrvalue = str.split(",");
		            Sql = "INSERT INTO tot_doses_distributed " +
		            		"VALUES ('"+ arrvalue[0] +"', '"+ arrvalue[1] +"', '"+ arrvalue[2]+"', "+ arrvalue[3] +", '"+ arrvalue[4] +"')"+";";
		            System.out.println(Sql);
		            st.executeUpdate(Sql);
		         }
		         
		         csv = new File("C:\\Users\\Nikitha Chennamaneni\\Desktop\\edunikki\\MS-Texas\\4th Sem\\db\\project2_part3\\federal_data.csv");
		         scanner = new Scanner(csv);
		         while (scanner.hasNextLine()) {
		            String str = scanner.nextLine();
		            String[] arrvalue = str.split(",");

		            Sql = "INSERT INTO federal_data " +
		                   "VALUES ('"+ arrvalue[0] +"', '"+ arrvalue[1] +"', "+ arrvalue[2]+", '"+ arrvalue[3] +"', '"+ arrvalue[4] +"')"+";";
		            System.out.println(Sql);
		            st.executeUpdate(Sql);
		         }
		         csv = new File("C:\\Users\\Nikitha Chennamaneni\\Desktop\\edunikki\\MS-Texas\\4th Sem\\db\\project2_part3\\unit_distribution.csv");
			       scanner = new Scanner(csv);
			       while (scanner.hasNextLine()) {
			          String str = scanner.nextLine();
			          String[] arrvalue = str.split(",");
			
			          Sql = "INSERT INTO unit_distribution " +
			                 "VALUES ('"+ arrvalue[0] +"', '"+ arrvalue[1] +"', '"+ arrvalue[2]+"', '"+ arrvalue[3] +"', "+ arrvalue[4] +", "+ arrvalue[5] +", '"+ arrvalue[6] +"')"+";";
			          System.out.println(Sql);
			          st.executeUpdate(Sql);
			       }
		      
			       csv = new File("C:\\Users\\Nikitha Chennamaneni\\Desktop\\edunikki\\MS-Texas\\4th Sem\\db\\project2_part3\\doses_datawise.csv");
			       scanner = new Scanner(csv);
			       while (scanner.hasNextLine()) {
			          String str = scanner.nextLine();
			          String[] arrvalue = str.split(",");
			
			          Sql = "INSERT INTO doses_datewise " +
			                 "VALUES ('"+ arrvalue[0] +"','"+ arrvalue[1] +"', "+ arrvalue[2] +", '"+ arrvalue[3]+"', '"+ arrvalue[4] +"')"+";";
			          System.out.println(Sql);
			          st.executeUpdate(Sql);
			       }
		         
			       csv = new File("C:\\Users\\Nikitha Chennamaneni\\Desktop\\edunikki\\MS-Texas\\4th Sem\\db\\project2_part3\\doses_administered.csv");
			       scanner = new Scanner(csv);
			       while (scanner.hasNextLine()) {
			          String str = scanner.nextLine();
			          String[] arrvalue = str.split(",");
			
			          Sql = "INSERT INTO doses_administered " +
			                 "VALUES ("+ arrvalue[0] +",'"+ arrvalue[1] +"', '"+ arrvalue[2] +"', '"+ arrvalue[3]+"', '"+ arrvalue[4] +"', '"+ arrvalue[5] +"', "+ arrvalue[6] +", '"+ arrvalue[7] +"', '"+ arrvalue[8] +"', '"+ arrvalue[9] +"', '"+ arrvalue[10] +"', '"+ arrvalue[11] +"', '"+ arrvalue[12] +"', '"+ arrvalue[13] +"')"+";";
			          System.out.println(Sql);
			          st.executeUpdate(Sql);
			       }
		         scanner.close();

		         return;
		      }
		      catch (SQLException Sql) {
		    	 System.out.println(Sql);
		         Sql.printStackTrace();
		         return;
		      }
		      catch (FileNotFoundException e) {
		         System.out.println("Exception :" + e.getMessage());
		      }
		      catch (Exception e) {
		         System.out.println("Exception : " + e.getMessage());
		      }
		   }

		   public static void main( String args[] )
		   {
		  
		      try {
		    	  dbproject2part3 connect = new dbproject2part3();
		         if ( connect.OpenConnection() ) {
		            connect.Insert();
		         }
		         connect.CloseConnection();
		      }
		      catch (SQLException exception) {
		         System.out.println("\nSQLException" + exception.getMessage()+"\n");
		      }
		      catch ( IOException e) {
		         e.printStackTrace();
		      }
		   }

}
