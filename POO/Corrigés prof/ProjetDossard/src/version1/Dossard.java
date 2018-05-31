package version1;

/**
 * Permet de simuler un dossard ayant un numéro (attribué automatiquement)
 * Le 1er dossard créé aura le numéro 1,
 * le 2e  dossard créé aura le numéro 2, etc.
 */
public class Dossard {
    private static int compteur = 0;
    private final int NUMERO;
    
    /**
     * Crée un dossard et lui attribue un numéro unique (automatiquement)
     */
    public Dossard() {
        Dossard.compteur++;
        this.NUMERO = Dossard.compteur;
    }
    
    /**
     * Rend le numéro du dossard
     * @return Le numéro
     */
    public int rendNumero() {
        return this.NUMERO;
    }
}