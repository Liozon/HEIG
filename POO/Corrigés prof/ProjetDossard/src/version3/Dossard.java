package version3;

import java.util.ArrayList;

/**
 * Permet de simuler un dossard ayant un numéro (attribué automatiquement)
 * Le 1er dossard créé aura le numéro 1,
 * le 2e  dossard créé aura le numéro 2, etc.
 * Cette version permet de choisir son numéro de dossard (s'il n'existe pas déjà)
 * ainsi que de pouvoir rapporter un dossard "à la fabrique"
 */
public class Dossard {
    private final static ArrayList<Dossard> dossardsDisponibles = new ArrayList<>();
    private final static ArrayList<Integer> listeNumerosExistants = new ArrayList<>();
    private static int compteur = 0;
    private final int NUMERO;
    
    /**
     * Crée un dossard et lui attribue un numéro unique (automatiquement)
     */
    private Dossard() {
        do {
            Dossard.compteur++;
        } while (Dossard.listeNumerosExistants.contains(Dossard.compteur));
        this.NUMERO = Dossard.compteur;
        Dossard.listeNumerosExistants.add(Dossard.compteur);
    }
    
    private Dossard(int numero) {
        this.NUMERO = numero;
        Dossard.listeNumerosExistants.add(numero);
    }
    
    /**
     * Permet de rapporter le dossard
     * @param dossard Le dossard
     * @return null
     */
    public static Dossard rapporteDossard(Dossard dossard) {
        if (dossard != null) {
            Dossard.dossardsDisponibles.add(dossard);
        }
        return null;
    }
    
    /**
     * Rend le dossard ayant le numéro désiré ou le crée (s'il n'existe pas déjà)
     * @param numeroDesire Le numéro désiré
     * @return Le dossard désiré ou null
     */
    public static Dossard rendDossard(int numeroDesire) {
        Dossard dossard = null;
        if (numeroDesire >=1)
            if (!Dossard.listeNumerosExistants.contains(numeroDesire)) {
                dossard = new Dossard(numeroDesire);
            } else {
                for (Dossard dossardDisponible : Dossard.dossardsDisponibles) {
                    if (dossardDisponible.NUMERO == numeroDesire) {
                        dossard = dossardDisponible;
                        Dossard.dossardsDisponibles.remove(dossardDisponible);
                        break;
                    }
                }
            }
        return dossard;
    }
    
    public static Dossard rendDossard() {
        Dossard dossard;
        // S'il y a des dossards disponibles, on rend le 1er
        if (!Dossard.dossardsDisponibles.isEmpty()) {
            dossard = Dossard.dossardsDisponibles.remove(0);
        // sinon on en crée un
        } else {
            dossard = new Dossard();
        }
        return dossard;
    }
    
    /**
     * Rend le numéro du dossard
     * @return Le numéro
     */ 
    public int rendNumero() {
        return this.NUMERO;
    }
}