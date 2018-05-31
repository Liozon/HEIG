package ch.comem.exerciceserrure;

/**
 *
 * @author Julien Muggli
 */

public class ChComemExerciceSerrure {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        Personne charles = new Personne("Charles");
        Personne paul = new Personne("Paul");
        Serrure s1 = new Serrure(1);
        Serrure s2 = new Serrure(2);
        Porte p1 = new Porte(true, 1);
        Porte p2 = new Porte(false, -10);
        System.out.println(p1.rendAUneSerrure() + " " + p1.rendOuvreSerrure());
        System.out.println(p2.rendAUneSerrure() + " " + p2.rendOuvreSerrure());
    }
    
}
