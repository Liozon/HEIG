import ch.comem.cours.ap.WinConsole;

/**
 * S1_Signe:
 *
 *
 * Réaliser un programme qui demande à l’utilisateur de saisir un nombre quelconque, 
 * et qui affiche si ce nombre est positif, négatif ou nul, ainsi que sa valeur absolue.
 *
 * Julien Muggli
 *
 * @date 23 mars 2016 at 14:05:43
 *
 */
public class S1_Signe {
    // Entrées: 
    double nombre;
    // Sorties: 
    
	  
    public void lancer() {
        // Le code ici...
        WinConsole.write("Entrez un nombre au hasard: ");
        nombre = WinConsole.readDouble();
        if (nombre > 0) { // Nombre plus grand que 0
            WinConsole.writeLine("Le nombre " + nombre +" que vous avez choisi est positif!");
            }
            else if (nombre < 0) { // Nombre égal à 0
            WinConsole.writeLine("Le nombre " + nombre +" que vous avez choisi est négatif!");
            }            
        else { // Nombre négatif
        WinConsole.writeLine("Le nombre " + nombre +" que vous avez choisi est égal à zéro hihi!!");
        }
        }



    // Le lanceur du programme
    public static void main(String args[]) {
        S1_Signe programme = new S1_Signe();
        programme.lancer();
    }
}