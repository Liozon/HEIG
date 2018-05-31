import ch.comem.cours.ap.WinConsole;

/**
 * Essai Fonction 
 *
 * Création d'une fonction permettant de calculer la surface d'un triangle
 *
 * Julien Muggli
 *
 * @date 6 avr. 2016 at 13:54:34
 *
 */
public class essaiFonction {
    // Entrées: 
    double base, hauteur;
    // Sorties: 
    double surface;
	  
    public void lancer() {
        lectureDesDonnes();
        traiterLesDonnes();
        afficherLesResultats();
        
    }

    // Le lanceur du programme
    public static void main(String args[]) {
        essaiFonction programme = new essaiFonction();
        programme.lancer();
    }

    private void lectureDesDonnes() {       
        WinConsole.write("Base du triangle: ");
        base = WinConsole.readDouble();
        WinConsole.write("Hauteur du triangle: ");
        hauteur = WinConsole.readDouble();
    }

    private void traiterLesDonnes() {
        surface = calculSurface(base, hauteur);
    }

    private void afficherLesResultats() {
        WinConsole.writeLine("La surface d'un triangle " + base + " et de hauteur " + hauteur + " vaut " + surface);
    }

    private double calculSurface(double b, double h) {
        double s = b * h / 2;
        return s;
    }
}