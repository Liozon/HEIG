package Serie5;

/**
 *
 * @author Chabloz Nicolas
 */
public class Association {
    private String nom;
    private ListeMembres membres;

    public Association(String nom) {
        this.nom = nom;
        this.membres = new ListeMembres();
    }
    
    public boolean obtenirUnLivre(String email, String titre, String auteur) {
        // on recheche le membre grâce à son email
        Membre membre = membres.find(email);
        // Si on ne l'a pas trouvé, c'est que l'email est erroné. 
        if (membre == null) {
            return false;
        }
        // Si le membre ne peut plus obtenir de livre l'échange échoue
        if (membre.getPeutPrendNbLivres() <= 0) {
            return false;
        }
        // on recherche maintenant un membre qui possède le livre recherché
        Membre membreQuiPossede = membres.find(titre, auteur);
        // si aucun membre ne possède le livre, l'échange échoue
        if (membreQuiPossede == null) {
            return false;
        }
        // le membre qui prend le livre "perd" un point
        membre.prendUnLivre();
        // l'autre perd le livre mais "gagne" un point
        membreQuiPossede.donneUnLivre(titre, auteur);
        // l'échange a réussi
        return true;
    }

    /**
     * @return the nom
     */
    public String getNom() {
        return nom;
    }

    /**
     * @param nom the nom to set
     */
    public void setNom(String nom) {
        this.nom = nom;
    }

    /**
     * @return the membres
     */
    public ListeMembres getMembres() {
        return membres;
    }

    @Override
    public String toString() {
        return nom + "\n*** liste des membres ***\n" + membres;
    }
    
    
    
    
}
