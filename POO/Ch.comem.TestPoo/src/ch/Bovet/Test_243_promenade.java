
import ch.comem.cours.ap.WinConsole;

/**
 * Excursion
 * 
* Un marcheur fait une randonnée et relève toutes les heures les coordonnées et
 * l altitude du point où il se trouve. Ayant terminé sa course, il aimerait
 * connaître les km-effort qu il a faits chaque heure. Il estime d abord la
 * distance à plat (distance calculée en fonction des coordonnées) à laquelle il
 * ajoute 1 km pour chaque 100m de montée, et 1 km pour chaque 300m de descente.
 * Le total donne le nombre de km-effort effectués dans l heure (c est une
 * manière de représenter l équivalent du nombre de kilomètres faits à plat). Il
 * souhaite élaborer une liste contenant les km-effort effectués chaque heure,
 * et connaître l heure lors de laquelle il a fourni le plus gros effort ainsi
 * que la moyenne des km-effort fournis.
 * 
* @author Julien Muggli
 * 
* @date 24 avr. 2015 at 20:56:55
 * 
*/
public class Test_243_promenade {
// Entrées:

    long[] coordX
            = {626400, 625564, 626008, 628078, 627471, 628269, 628630, 629130, 628134, 628195};
    long[] coordY
            = {105900, 107145, 108682, 109685, 110835, 109873, 109159, 109159, 110893, 112292};
    long[] altitude = {2650, 3000, 3400, 3800, 4200, 4238, 3720, 3810, 3550, 3227};
// Sorties:
    double[] kmEffort = new double[coordX.length];
    double kmEffortMax, kmEffortMoyen;
    int heureMax; // heure de l'effort max

    public void lancer() {
        calculs();
        affichage();
    }
// Le lanceur du programme

    public static void main(String args[]) {
        Test_243_promenade programme = new Test_243_promenade();
        programme.lancer();
    }

    private void calculs() {
        kmEffort[0] = 0; // non utilisé
        kmEffortMax = 0;
        kmEffortMoyen = 0;
        for (int h = 1; h < kmEffort.length; h++) {
            kmEffort[h] = Math.sqrt(
                    (coordX[h] - coordX[h - 1]) * (coordX[h] - coordX[h - 1])
                    + (coordY[h] - coordY[h - 1]) * (coordY[h] - coordY[h - 1]));
            if (altitude[h] > altitude[h - 1]) // montée
            {
                kmEffort[h] += (altitude[h] - altitude[h - 1]) / 0.1;
            } else // descente
            {
                kmEffort[h] += (altitude[h - 1] - altitude[h]) / 0.3;
            }
            kmEffort[h] /= 1000;
            kmEffortMoyen += kmEffort[h];
            if (kmEffort[h] > kmEffortMax) {
                kmEffortMax = kmEffort[h];
                heureMax = h;
            }
        }
        kmEffortMoyen = kmEffortMoyen / (kmEffort.length - 1);
// une de moins, puisqu'on ignore la valeur à l'index 0
    }

    private void affichage() {
        WinConsole.writeLine("5 h : Coordonnées ("
                + coordX[0] + "," + coordY[0]
                + "), altitude : " + altitude[0]);
        for (int heure = 1; heure < kmEffort.length; heure++) {
            WinConsole.writeLine((heure + 5) + " h : Coordonnées ("
                    + coordX[heure] + "," + coordY[heure]
                    + "), altitude : " + altitude[heure]
                    + ", km-effort dans l'heure précédente = "
                    + kmEffort[heure]);
        }
        WinConsole.writeLine("Moyenne km-effort : "
                + kmEffortMoyen + " km");
        WinConsole.writeLine("Maximum km-effort : "
                + kmEffortMax + " km entre " + (4 + heureMax) + " et "
                + (5 + heureMax) + "h");
    }
}