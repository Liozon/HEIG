
import ch.comem.cours.ap.WinConsole;

/**
 * B2_Compte à rebours Afficher le compte à rebours en partant d une valeur
 * entière positive saisie par l utilisateur
 * 
* @author Julien Muggli
 * 
* @date 10 mars 2014 at 10:53:46
 * 
*/
public class B2_CompteaRebours {
// Entrées:

    int start;
// Sorties:
//

    public void lancer() {
        WinConsole.write("Entrez le départ du compte à rebours : ");
        start = WinConsole.readInt();
        for (int etape = start; etape > 0; etape--) {
            WinConsole.writeLine(etape);
        }
        WinConsole.writeLine("Boum");
    }
// Le lanceur du programme

    public static void main(String args[]) {
        B2_CompteaRebours programme = new B2_CompteaRebours();
        programme.lancer();
    }
}
