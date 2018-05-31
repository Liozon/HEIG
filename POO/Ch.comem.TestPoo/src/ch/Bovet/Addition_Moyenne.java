import ch.comem.cours.ap.WinConsole;

/**
 * Addition_Moyenne 
 *
 * Calcul de la moyenne de 3 nombres.
 *
 * Julien Muggli
 *
 * 22 mars 2016 at 15:30:20
 *
 */
public class Addition_Moyenne {
    // Entrées: 
    double nombre1, nombre2, nombre3;
    
    // Sorties: 
    double addition, moyenne;
	  
    public void lancer() {
    
        // Lecure des données
        WinConsole.write("Saisissez le premier nombre: ");
        nombre1 = WinConsole.readDouble();
        WinConsole.write("Saisissez le deuxième nombre: ");
        nombre2 = WinConsole.readDouble();
        WinConsole.write("Saisissez le troisième nombre: ");
        nombre3 = WinConsole.readDouble();
        
        // Calculs
        addition = nombre1+nombre2+nombre3;
        moyenne = addition/3;
        
        // Affichage des résultats
        WinConsole.writeLine("Le résultat de l'addition vaut: " + addition + ".");
        WinConsole.writeLine("La moyenne des 3 chiffres vaut: " + moyenne + ".");
    }

    // Le lanceur du programme
    public static void main(String args[]) {
        Addition_Moyenne programme = new Addition_Moyenne();
        programme.lancer();
    }
}