package models.etd;

public class Etudiant {
    private String nom,prenom;
    private int cne,id;

    public Etudiant() {
    }


    public Etudiant(String nom, String prenom, int cne) {
        this.nom = nom;
        this.prenom = prenom;
        this.cne = cne;
    }


    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public int getCne() {
        return cne;
    }

    public void setCne(int cne) {
        this.cne = cne;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }
}
