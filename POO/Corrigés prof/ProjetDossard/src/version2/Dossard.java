package version2;

import java.util.ArrayList;

/**
 * Permet de simuler un dossard ayant un numéro (attribué automatiquement)
 * Le 1er dossard créé aura le numéro 1,
 * le 2e  dossard créé aura le numéro 2, etc.
 * Cette version permet de choisir son numéro de dossard (s'il n'existe pas déjà)
 * L'aventage de rendre le 2e constructeur private c'est de ne pas devoir lancer
 * d'exceptions (ce qui arrêterait le programme)
 */
public class Dossard {
    private final static ArrayList<Integer> listeNumerosExistants = new ArrayList<>();
    private static int compteur = 0;
    private final int NUMERO;
    
    /**
     * Crée un dossard et lui attribue un numéro unique (automatiquement)
     */
    public Dossard() {
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
     * Crée le dossard ayant le numéro désiré (s'il n'existe pas déjà)
     * @param numeroDesire Le numéro désiré
     * @return null si le dossard existe déjà, sinon rend le dossard désiré
     */
    public static Dossard creeDossard(int numeroDesire) {
        Dossard dossard = null;
        if (numeroDesire >=1 && !Dossard.listeNumerosExistants.contains(numeroDesire)) {
            dossard = new Dossard(numeroDesire);
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