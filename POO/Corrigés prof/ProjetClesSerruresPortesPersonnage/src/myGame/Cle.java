package myGame;

/**
 * Permet de simuler une clé ayant un numéro unique
 */
public class Cle {
    private static int compteur = 0;
    /**
     * Numéro de la clé
     */
    public final int NUMERO;
    
    /**
     * Crée une clé avec un numéro unique
     */
    public Cle() {
        Cle.compteur++;
        this.NUMERO = Cle.compteur;
    }
}