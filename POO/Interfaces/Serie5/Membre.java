package Serie5;

/**
 *
 * @author Chabloz Nicolas
 */
public class Membre implements Comparable<Membre> {
    private String email;
    private String nom;
    private String prenom;
    private int peutPrendreNbLivres;
    /**
     * La liste des livres du membre (à disposition des autres membres)
     */
    private ListeLivres livres;

    public Membre(String email, String nom, String prenom) {
        this.email = email;
        this.nom = nom;
        this.prenom = prenom;
        // un nouveau membre ne peut prendre qu'un livre chez les autres
        this.peutPrendreNbLivres = 1;
        // un nouveau membre est inscrit avec une liste de livre vide
        // Attention à la différence entre vide et n'existe pas. Une liste vide
        // est tout simplement une collection vide, tandis que une liste qui 
        // n'existe pas est une collection de valeur "null". Ici la liste doit
        // exister mais ne doit contenir aucun livre (vide donc)
        this.livres = new ListeLivres();
    }

    /**
     * @return the email
     */
    public String getEmail() {
        return email;
    }

    /**
     * @param email the email to set
     */
    public void setEmail(String email) {
        this.email = email;
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
     * @return the prenom
     */
    public String getPrenom() {
        return prenom;
    }

    /**
     * @param prenom the prenom to set
     */
    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    /**
     * @return the nbLivresQueLeMembrePeutPrendre
     */
    public int getPeutPrendNbLivres() {
        return peutPrendreNbLivres;
    }

    /**
     * @return the livres
     */
    public ListeLivres getLivres() {
        return livres;
    }    
    
    /**
     * Quand un membre prend un livre il perd un "point" (il pourra prendre un
     * livre de moins)
     */
    public void prendUnLivre(){
        this.peutPrendreNbLivres--;
    }
    
    /**
     * Quand on prend un livre à un membre il gagne un "point", mais il ne 
     * possède alors plus le livre dans sa liste.
     * 
     * @param titre
     * @param auteur 
     */
    public void donneUnLivre(String titre, String auteur){
       Livre livrePris = this.getLivres().find(titre, auteur);
       this.getLivres().remove(livrePris);
       this.peutPrendreNbLivres++;
    }
          

    /**
     * On compare les membre par nom de famille, et si les noms de famille sont
     * les mêmes, on compare leurs prénoms.
     * 
     * @param autreMembre
     * @return 
     */
    @Override
    public int compareTo(Membre autreMembre) {
        //comparaison sans prendre en compte la casse (majuscule minuscule)
        if (this.nom.equalsIgnoreCase(autreMembre.getNom())) {
            return this.prenom.compareToIgnoreCase(autreMembre.getPrenom());
        } else {
            return this.nom.compareToIgnoreCase(autreMembre.getNom());
        }
    }
    
    /**
     * On consiére qu'un membre est identique à un autre si leur email sont les
     * même (chaque membre à son propre email)
     * 
     * @param autreMembre
     * @return 
     */
    public boolean equals(Membre autreMembre) {
        // utilise la deuxieme méthode euqals avec l'email du membre à comparer
        return this.equals(autreMembre.getEmail());
    }
    
    /**
     * On consiére qu'un membre est identique à une String si la chaine de 
     * caractère a tester est identique à l'email du membre.
     * 
     * @param email
     * @return 
     */
    public boolean equals(String email) {
        // compraison d'égalité sans prendre en compte la casse
        return this.email.equalsIgnoreCase(email);
    }                  
    
    @Override
    public String toString() {
        return nom + " " + prenom + ". Ce membre peut encore prendre " 
               + peutPrendreNbLivres + " livre(s). Liste de ses "
               + "livres: \n" + livres;
    }    
}
