import ch.comem.cours.ap.WinConsole;

/**
 * @title
 * 
* @description
 * 
* @author Julien Muggli
 * 
* @date 18 mars 2015 at 15:04:57
 * 
*/
public class Test_243bis_tresor {
// Données :
    int xtresor = (int) (Math.random() * 9) + 1;
    int ytresor = (int) (Math.random() * 9) + 1;
// Entrées:
    int x, y;
// Sorties:
    int nbEtapes = 0;

    public void lancer() {
        do {
            nbEtapes++;
            WinConsole.write("Essai no " + nbEtapes + " : position x = ");
            x = WinConsole.readInt();
            WinConsole.write("Essai no " + nbEtapes + " : position y = ");
            y = WinConsole.readInt();
            if (x < 1 || x > 9 || y < 1 || y > 9) // position impossible
            {
                WinConsole.writeLine("Erreur...");
            } else if (x == xtresor && y == ytresor) // position trouvée
            {
                WinConsole.writeLine("bingo après "
                        + nbEtapes + " essais!");
            } else {
                String indication;
                if (x < xtresor) // on est à l'ouest
                {
                    if (y < ytresor) // à l'ouest et au sud
                    {
                        indication = "au sud-ouest";
                    } else if (y == ytresor) // y correct
                    {
                        indication = "à l'ouest";
                    } else // à l'ouest et au nord
                    {
                        indication = "au nord-ouest";
                    }
                } else if (x > xtresor) // on est à l'est
                {
                    if (y < ytresor) // à l'est et au sud
                    {
                        indication = "au sud-est";
                    } else if (y == ytresor) // y correct
                    {
                        indication = "à l'est";
                    } else // à l'est et au nord
                    {
                        indication = "au nord-est";
                    }
                } else // x correct
                if (y < ytresor) {
                    indication = "au sud";
                } else {
                    indication = "au nord";
                }
                WinConsole.writeLine("Vous êtes " + indication
                        + " du trésor");
            }
        } while (x != xtresor || y != ytresor);
    }
// Le lanceur du programme

    public static void main(String args[]) {
        Test_243bis_tresor programme = new Test_243bis_tresor();
        programme.lancer();
    }
}