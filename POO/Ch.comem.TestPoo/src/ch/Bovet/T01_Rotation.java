import ch.comem.cours.ap.WinConsole;

/**
 * T04_Rotation: Effectuer une rotation des éléments d'un tableau de N nombres
 * d'un cran vers la droite.
 * 
* @author Julien Muggli
 * 
* @date 17 avr. 2014 at 13:41:01
 * 
*/
public class T01_Rotation {
// Entrées:

    int N; // taille du tableau
    int[] tableau;
// Sorties:
// le même tableau

    public void lancer() {
        lireLesDonnees();
        afficherTableau("Tableau de départ...", tableau);
        rotation();
        afficherTableau("après rotation...", tableau);
    }
// Le lanceur du programme

    public static void main(String args[]) {
        T01_Rotation programme = new T01_Rotation();
        programme.lancer();
    }

    private void lireLesDonnees() {
// lire la taille du tableau
        WinConsole.write("Veuillez introduire la taille du tableau : ");
        N = WinConsole.readInt();
// réserver la mémoire
        tableau = new int[N];
// lire les valeurs contenues dans le tableau
        for (int index = 0; index < N; index++) {
            WinConsole.write("Donnez la valeur no. "
                    + (index + 1) + " du tableau : ");
            tableau[index] = WinConsole.readInt();
        }
    }

    private void afficherTableau(String titre, int[] leTableau) {
        WinConsole.writeLine(titre);
        WinConsole.write("{" + leTableau[0]);
        for (int index = 1; index < leTableau.length; index++) {
            WinConsole.write("," + leTableau[index]);
        }
        WinConsole.writeLine("}");
    }

    private void rotation() {
        int reserve = tableau[N - 1];
        for (int index = N - 2; index >= 0; index--) {
            tableau[index + 1] = tableau[index];
        }
        tableau[0] = reserve;
    }
}
