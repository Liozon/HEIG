package myGame;

/**
 * Permet de simuler une serrure ayant un numéro unique pouvant
 * être ouverte ou fermée par une clé (ayant le même numéro)
 */
public class Serrure {
    
    private static int compteur = 0;
    /**
     * Numéro de la serrure
     */
    public final int NUMERO;
    private boolean estOuverte;
    
    /**
     * Crée une serrure ouverte
     */
    public Serrure() {
        Serrure.compteur++;
        this.NUMERO = Serrure.compteur;
        this.estOuverte = true;
    }
    
    /**
     * Permet d'ouvrir la serrure avec la clé spécifiée
     * (Le numéro de la clé et de la serrure doivent correspondre)
     * @param cle Une clé
     * @return true si a été ouverte, false sinon
     */
    public boolean ouvre(Cle cle) {
        boolean aEteOuverte = false;
        if (cle != null && cle.NUMERO == this.NUMERO) {
            this.estOuverte = true;
            aEteOuverte = true;
        }
        return aEteOuverte;
    }
    /**
     * Permet de fermer la serrure avec la clé spécifiée
     * (Le numéro de la clé et de la serrure doivent correspondre)
     * @param cle Une clé
     * @return true si a été fermée, false sinon
     */
    public boolean ferme(Cle cle) {
        boolean aEteFermee = false;
        if (cle != null && cle.NUMERO == this.NUMERO) {
            this.estOuverte = false;
            aEteFermee = true;
        }
        return aEteFermee;
    }
    
    /**
     * Permet de savoir si la porte est ouverte ou non
     * @return true si ouverte, false si fermée
     */
    public boolean estOuverte() {
        return this.estOuverte;
    }
}