import ch.comem.cours.ap.WinConsole;

/**
 * Tableau de base
 *
 * T00 - partie a
 *
 * @author
 *
 * @date 19 avr. 2016 at 13:46:42
 *
 */
public class T00_Base {
    // Entrées: 
    int [] tableau;
    int N;
    
    // Sorties: 
    
	 
    public void lancer() {
       lirelesDonnees();
       WinConsole.writeLine("A l'endroit : " + afficheTableau(tableau,true));
       WinConsole.writeLine("A l'envers  : " + afficheTableau(tableau,false));

    }

    // Le lanceur du programme
    public static void main(String args[]) {
        T00_Base programme = new T00_Base();
        programme.lancer();
    }

    private void lirelesDonnees() {
        WinConsole.write("Taille du tableau: ");
        N = WinConsole.readInt();
        
        // Allouer la mémoire nécessaire pour le tableau
        tableau = new int[N];
        
        // Lecture du tableau
        for(int index=0; index<N; index++){
            WinConsole.write("Valeur n° " + (index+1) + " : ");
            tableau[index] = WinConsole.readInt();
        }
    }

    private String afficheTableau(int[] tab, boolean aLendroit) {
        String s;
        if (aLendroit) {
            s = "{" + tab[0];
            for (int index=1; index<tab.length; index++){
                s = s + " ; " + tab[index];
            }
        }
        else {
            s = "{" + tab[tab.length-1];
            for (int index=tab.length-2; index>=0; index--)
                s = s + " ; " + tab[index];
            }
        
        s = s + "}";
        return s;
        }
}
