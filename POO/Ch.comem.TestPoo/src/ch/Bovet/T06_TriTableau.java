import ch.comem.cours.ap.WinConsole;

/**
 * T17_TriTableau Trier les nombres d'un tableau dans l'ordre croissant
 * 
* @author Jean Bovet
 * 
* @date 19 avr. 2014 at 20:19:30
 * 
*/
public class T06_TriTableau {
// intervalle des valeurs admises dans le tableau

    final int min = 1, max = 1000;
// Entrées:
    int NTableau; // taille du tableau de départ
// Auxiliaires
    int[] tableau;
// Sorties:
// le même tableau, trié

    public void lancer() {
        lireLesDonnees();
        genererTableau();
        afficherTableau("Tableau de départ", tableau);
        trierTableau();
        afficherTableau("Tableau trié", tableau);
    }
// Le lanceur du programme

    public static void main(String args[]) {
        T06_TriTableau programme = new T06_TriTableau();
        programme.lancer();
    }

    private void afficherTableau(String titre, int[] tab) {
        WinConsole.writeLine(titre);
        WinConsole.write("{" + tab[0]);
        for (int index = 1; index < tab.length; index++) {
            WinConsole.write("," + tab[index]);
        }
        WinConsole.writeLine("}");
    }

    private void lireLesDonnees() {
        WinConsole.write("Taille du tableau : ");
        NTableau = WinConsole.readInt();
    }

    private void genererTableau() {
// allouer la mémoire du tableau
        tableau = new int[NTableau];
// générer aléatoirement des entiers entre min et max
        for (int index = 0; index < NTableau; index++) {
            tableau[index] = min
                    + (int) ((max - min + 1) * Math.random());
        }
    }

    private void trierTableau() {
// méthode très basique, consistant à trouver la plus
// petite valeur, la mettre en position zéro, puis de
// répéter l'opération pour la position 1, etc
        int posOpt; // position de la plus petite valeur trouvée
        int reserve;
        for (int posMin = 0; posMin < NTableau - 1; posMin++) {
            posOpt = posMin;
            for (int pos = posMin + 1; pos < NTableau; pos++) {
                if (tableau[pos] < tableau[posOpt]) {
                    posOpt = pos;
                }
            }
            if (posOpt > posMin) {
                reserve = tableau[posMin];
                tableau[posMin] = tableau[posOpt];
                tableau[posOpt] = reserve;
            }
        }
    }
}
