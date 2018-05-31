package Serie5;

/**
 *
 * @author Chabloz Nicolas
 */
public class Livre implements Comparable<Livre> {
    private String titre;
    private String auteur;
    private String etat;

    public Livre(String titre, String auteur, String etat) {
        this.titre = titre;
        this.auteur = auteur;
        this.etat = etat;
    }

    /**
     * @return the titre
     */
    public String getTitre() {
        return titre;
    }

    /**
     * @param titre the titre to set
     */
    public void setTitre(String titre) {
        this.titre = titre;
    }

    /**
     * @return the auteur
     */
    public String getAuteur() {
        return auteur;
    }

    /**
     * @param auteur the auteur to set
     */
    public void setAuteur(String auteur) {
        this.auteur = auteur;
    }

    /**
     * @return the etat
     */
    public String getEtat() {
        return etat;
    }

    /**
     * @param etat the etat to set
     */
    public void setEtat(String etat) {
        this.etat = etat;
    }

    @Override
    public String toString() {
        return titre + ", " + auteur + " (" + etat + ")";        
    }

    /**
     * Un livre est considéré come étant identique à un autre s'ils ont le même
     * titre et le même auteur 
     * 
     * @param autreLivre
     * @return 
     */
    @Override
    public int compareTo(Livre autreLivre) {
        // Si les titre sont équivalent on compare les auteurs
        if (this.titre.equalsIgnoreCase(autreLivre.getTitre())) {
            return this.auteur.compareToIgnoreCase(autreLivre.getAuteur());
        // Sinon la comparaison des titres suffit
        } else {
            return this.titre.compareToIgnoreCase(autreLivre.getTitre());
        }
    }        
    
}
