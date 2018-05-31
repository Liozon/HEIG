
import ch.comem.cours.ap.WinConsole;

/**
 * T02_ConversionBinaire On utilise un tableau pour représenter un nombre
 binaire de 8 bits (une suite de huit nombres de valeur 0 ou 1). Convertir ce
 * nombre binaire en sa valeur équivalente en base 10.
 * 
* @author Julien Muggli
 * 
* @date 2 avr. 2014 at 11:33:26
 * 
*/
public class T02_ConversionBinaire {
// Entrées:

    int[] binaire = new int[8];
// Sorties:
    long nombreD;

    public void lancer() {
        lireLaDonnee();
        nombreD = decimal(binaire);
        afficherResultat();
    }
// Le lanceur du programme

    public static void main(String args[]) {
        T02_ConversionBinaire programme = new T02_ConversionBinaire();
        programme.lancer();
    }

    private void lireLaDonnee() {
// lecture du nombre
        for (int noBit = 0; noBit < 8; noBit++) {
            WinConsole.write("entrez le nombre binaire "
                    + (noBit + 1) + " : ");
            binaire[noBit] = WinConsole.readInt();
        }
    }

    private long decimal(int[] b) {       
long valeurDecimale = b[0];
        for (int index = 1; index < 8; index++) {
            valeurDecimale = 2 * valeurDecimale + b[index];
        }
        return valeurDecimale;
    }

    private void afficherResultat() {
        WinConsole.writeLine("Sa conversion décimale vaut " + nombreD);
    }
}
