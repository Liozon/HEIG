package ch.comem;

import java.util.Set;

public class ProgrammeGestionnaireNotesMatieres {

    public static void main(String[] args) {
        GestionnaireNotes gest = new GestionnaireNotes();
        gest.ajoute("Math",5.5);
        gest.ajoute("Info",3.5);
        gest.ajoute("Info",5.5);
        gest.afficheMatieres();
        double moyenne=gest.rendMoyenne("Info");
        System.out.println("Moyenne info : " + moyenne);
        Set<Double> notesInfo = gest.rendNotes("Info");
        for (double note : notesInfo) {
            System.out.println(note);
        }
    } 
}
 