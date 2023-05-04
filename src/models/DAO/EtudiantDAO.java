package models.DAO;

import models.etd.Etudiant;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class EtudiantDAO {


    public static boolean save(Etudiant et){

        String sql= "INSERT INTO `etudiant`( `nom`, `prenom`, `cne`) VALUES (?,?,?)";
        try{

            PreparedStatement ps = DbConnexion.getInstance().getDb().prepareStatement(sql);
            ps.setString(1,et.getNom());
            ps.setString(2,et.getPrenom());
            ps.setInt(3,et.getCne());



            ps.executeUpdate();

        }catch(SQLException e){System.out.println("3");
        return false;}


        return true;
    }

    public  static List<Etudiant> getAllEtd(){
        List<Etudiant> l = new ArrayList<Etudiant>();

        try {

            String sql="SELECT * FROM  `etudiant`";
            PreparedStatement ps = DbConnexion.getInstance().getDb().prepareStatement(sql);

            ResultSet rs=ps.executeQuery();
            while(rs.next()){
                Etudiant et = new Etudiant(rs.getString("nom"),rs.getString("prenom"),rs.getInt("cne"));

                l.add(et);
            }
        }catch (SQLException e){
            System.out.println("8");
        }
        return l;
    }
}
