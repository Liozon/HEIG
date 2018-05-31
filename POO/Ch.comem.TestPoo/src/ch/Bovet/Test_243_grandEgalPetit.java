
import ch.comem.cours.ap.WinConsole;

/**
 * @title
 * 
* Écrire un programme qui, à partir de deux tableaux de même taille (N, saisi
 * par l utilisateur) d entiers aléatoires compris entre 150 et 160, construit
 * un troisième tableau de caractères (char) de même longueur et qui contient
 * les caractères <, = ou >, selon que le ième élément du tableau 1 est <, = ou
 * > que le ième élément du tableau 2.
 * 
* @author Julien Muggli
 * 
* @date 24 avr. 2015 at 20:10:49
 * 
*/
public class Test_243_grandEgalPetit {
// Entrées:

    int N; // taille des tableaux
    int[] tab1, tab2;
// Sorties:
    char compa[];
    int grand = 0, egal = 0, petit = 0;

    public void lancer() {
        initialiser();
        construire();
    }
// Le lanceur du programme

    public static void main(String args[]) {
        Test_243_grandEgalPetit programme = new Test_243_grandEgalPetit();
        programme.lancer();
    }

    private void initialiser() {
        WinConsole.write("Taille du tableau = ");
        N = WinConsole.readInt();
        tab1 = new int[N];
        tab2 = new int[N];
        for (int i = 0; i < N; i++) {
            tab1[i] = (int) (Math.random() * 11) + 150;
            tab2[i] = (int) (Math.random() * 11) + 150;
        }
        afficheTabEnt("Tableau 1 :", tab1);
        afficheTabEnt("Tableau 2 :", tab2);
    }

    private void afficheTabEnt(String texte, int[] tab) {
        WinConsole.write(texte + tab[0]);
        for (int index = 1; index < tab.length; index++) {
            WinConsole.write("," + tab[index]);
        }
        WinConsole.writeLine("");
    }

    private void construire() {
        compa = new char[N];
        for (int i = 0; i < N; i++) {
            if (tab1[i] < tab2[i]) {
                compa[i] = '<';
                petit++;
            } else if (tab1[i] == tab2[i]) {
                compa[i] = '=';
                egal++;
            } else {
                compa[i] = '>';
                grand++;
            }
        }
        afficheTabChar("Les signes:", compa);
        WinConsole.writeLine(petit + " valeurs plus petites, " + egal
                + " valeurs égales, " + grand + " valeurs plus grandes");
    }

    private void afficheTabChar(String texte, char[] tab) {
        WinConsole.write(texte + " " + tab[0]);
        for (int index = 1; index < tab.length; index++) {
            WinConsole.write(" , " + tab[index]);
        }
        WinConsole.writeLine("");
    }
}
