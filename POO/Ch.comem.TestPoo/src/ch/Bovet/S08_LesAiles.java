
import ch.comem.cours.ap.WinConsole;

/**
 * Les Ailes
 * 
* voir énoncé de l'exercice
 * 
* @author Jean Bovet
 * 
* @date 30 juil. 2014 at 21:34:29
 * 
*/
public class S08_LesAiles {
// Entrées:

    double prixBase;
    int typeVoyageur;
    int nbVols;
// Sorties:
    double prixNet;
// Intermédiaires :
    double rabaisType = 0, rabaisVols = 0;

    public void lancer() {
        lireLesDonnees();
        calculRabaisType();
        calculRabaisVols();
        prixNet = prixBase - rabaisType - rabaisVols;
        affichageResultat();
    }
// Le lanceur du programme

    public static void main(String args[]) {
        S08_LesAiles programme = new S08_LesAiles();
        programme.lancer();
    }

    private void lireLesDonnees() {
        WinConsole.write("Prix de base du vol = ");
        prixBase = WinConsole.readDouble();
        WinConsole.write("Type de voyageur (1, 2 ou 3) = ");
        typeVoyageur = WinConsole.readInt();
        WinConsole.write("Nombre de vols déjà effectués dans l'année = ");
        nbVols = WinConsole.readInt();
       
    }
private void calculRabaisType() {
        switch (typeVoyageur) {
            case 1:
                rabaisType = prixBase * 0.2;
                break;
            case 2:
                rabaisType = prixBase * 0.1;
                break;
            
        }
    }

    private void calculRabaisVols() {
        if (nbVols > 4) {
            rabaisVols = prixBase * 0.2;
        } else if (nbVols > 1) {
            rabaisVols = prixBase * 0.15;
        } else if (nbVols == 1) {
            rabaisVols = prixBase * 0.1;
        }
    }

    private void affichageResultat() {
        WinConsole.writeLine("Prix net à payer = " + prixNet);
    }
}
