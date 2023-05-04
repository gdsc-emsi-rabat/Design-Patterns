package models.DAO;




import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DbConnexion {

    private static DbConnexion instance;
    private Connection db;
    private String url = "jdbc:mysql://localhost:3306/db35";
    private String username = "nano";
    private String password = "147";
    private String dr = "com.mysql.jdbc.Driver";

    private DbConnexion() throws SQLException {
        try {
            Class.forName(dr);
            this.db = DriverManager.getConnection(url, username,password);
            System.out.println("good");
        } catch (ClassNotFoundException ex) {
            System.out.println("Database Connection Creation Failed : " + ex.getMessage());
        }
    }

    public Connection getConnexion() {
        return db;
    }

    public static DbConnexion getInstance() throws SQLException {
        if (instance == null) {
            instance = new DbConnexion();
        } else if (instance.getConnexion().isClosed()) {
            instance = new DbConnexion();
        }

        return instance;
    }

    public Connection getDb() {
        return db;
    }


}
