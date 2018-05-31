import ch.comem.cours.ap.WinConsole;

/**
 * Panier 
 *
 * Calcul du prix total d'un panier de 3 articles avant et après un rabais.
 *
 * Elli
 *
 * 22 mars 2016 at 15:49:51
 *
 */
public class I2_Panier {
    // Entrées:
    double prix1, prix2, prix3, rabais;
    
    // Sorties: 
    double totalAvantRabais, totalApresRabais;
    
	  
    public void lancer() {
        // Lecture des données:
        WinConsole.write("Indiquez le prix du premier article: ");
        prix1 = WinConsole.readDouble();
        WinConsole.write("Indiquez le prix du 2nd article: ");
        prix2 = WinConsole.readDouble();
        WinConsole.write("Indiquez le prix du 3ème article: ");
        prix3 = WinConsole.readDouble();
        WinConsole.write("Indiquez le rabais à appliquer: ");
        rabais = WinConsole.readDouble();

        // Calculs
        totalAvantRabais = prix1 + prix2 + prix3;
        totalApresRabais = totalAvantRabais-totalAvantRabais*rabais/100;
        
        // Affichage des résultats
        WinConsole.writeLine("Le prix total du panier avant rabais: " + totalAvantRabais + " CHF.");
        WinConsole.writeLine("Le prix total du panier après rabais: " + totalApresRabais + " CHF.");
    }

    // Le lanceur du programme
    public static void main(String args[]) {
        I2_Panier programme = new I2_Panier();
        programme.lancer();
    }
}