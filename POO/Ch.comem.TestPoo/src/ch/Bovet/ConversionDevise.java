import ch.comem.cours.ap.WinConsole;

/**
 * Conversion 
 *
 * Conversion de CHF en Euro
 *
 * Julien Muggli
 *
 * @date 22 mars 2016 at 13:29:48
 *
 */
public class ConversionDevise {
    // Constante
    final double tauxDeChange = 0.95;
    // Entrées: 
    double montantEnCHF;
    // Sorties: 
    double montantEnEuro;
	  
    public void lancer() {
        // Lecture des données
        WinConsole.write("Donnez le montant en CHF à convertir: ");
        montantEnCHF = WinConsole.readDouble();
        // Calculs
        montantEnEuro = montantEnCHF * tauxDeChange;
        // Affichage du résultat
        WinConsole.writeLine("Le montant en Euro vaut: " + montantEnEuro);
    }

    // Le lanceur du programme
    public static void main(String args[]) {
        ConversionDevise programme = new ConversionDevise();
        programme.lancer();
    }
}