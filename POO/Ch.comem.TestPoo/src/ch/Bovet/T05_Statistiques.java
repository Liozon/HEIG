import ch.comem.cours.ap.WinConsole;
/**
 * T09 Statistiques
 * 
* à partir d'un tableau de 1000 chiffres entre 1 et 9, compter le nombre
 * d'occurrences de chacun de ces nombres utilisation de la fonction "random"
 * 
* @author Julien Muggli
 * 
* @date 9 avr. 2014 at 08:37:28
 * 
*/
public class T05_Statistiques {
// Entrées:
    int[] tableau = new int[1000];
// Sorties:
    int[] compte = new int[9];
    public void lancer() {
        initialiserTableau();
        statistiques();
        afficherResultats();
    }
// Le lanceur du programme

    public static void main(String args[]) {
        T05_Statistiques programme = new T05_Statistiques();
        programme.lancer();
    }

    private void initialiserTableau() {
// Math.random() est une fonction qui génère aléatoirement
// un nombre reel compris entre 0 et 1 (1 non compris)
        for (int index = 0; index < tableau.length; index++) {
            tableau[index] = hasard(1, 9);
        }
        afficherTableau("Tableau de départ", tableau);
    }

    private void afficherTableau(String titre, int[] tab) {
        WinConsole.writeLine(titre);
        WinConsole.write("{" + tab[0]);
        for (int index = 1; index < tab.length; index++) {
            WinConsole.write("," + tab[index]);
        }
        WinConsole.writeLine("}");
    }

    private void statistiques() {
// initialiser le tableau "compte" à 0
        for (int n = 0; n < compte.length; n++) {
            compte[n] = 0;
        }
// balayer les valeurs du tableau
        for (int index = 0; index < tableau.length; index++) {
            compte[tableau[index] - 1]++;
        }
    }

    private void afficherResultats() {
        int controle = 0;
        for (int n = 0; n < compte.length; n++) {
            WinConsole.writeLine("Nombre de valeurs " + (n + 1)
                    + " dans le tableau = " + compte[n]);
            controle = controle + compte[n];
        }
        WinConsole.writeLine("Nombre total de valeurs : " + controle);
    }

    private int hasard(int min, int max) {
// cette fonction génère un entier aléatoire compris
// entre min et max
        return min + (int) (Math.random() * (max - min + 1));
    }
}