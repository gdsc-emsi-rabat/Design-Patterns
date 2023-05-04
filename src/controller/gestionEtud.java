package controller;

import models.DAO.EtudiantDAO;
import models.etd.Etudiant;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.HashMap;
import java.util.Map;

@WebServlet(name = "gestionEtud",urlPatterns = "/gestionEtud")
public class gestionEtud extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {





        String action = request.getParameter("action");

        switch (action) {
            case "add" :

                if (EtudiantDAO.save(new Etudiant(request.getParameter("nom"),request.getParameter("prenom"),Integer.parseInt(request.getParameter("cne"))))){


                  // tu peut utiliser une response par json
                    PrintWriter out = response.getWriter();

                    out.print("Bien ajouté");
                    out.flush();

                }else {
                    PrintWriter out = response.getWriter();

                    out.print("Il y a un probleme");
                    out.flush();
                }

                break;


            default:break;
        }



    }


}
