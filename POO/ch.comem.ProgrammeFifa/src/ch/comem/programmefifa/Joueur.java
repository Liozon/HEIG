package ch.comem.programmefifa;

/**
 *
 * @author Julien Muggli
 */
public class Joueur {

    private int noJoueur = -1;
    private String prenom;
    private String nom;
    
    public Joueur(int noJoueur, String prenom, String nom){
        if (noJoueur == -1) throw new RuntimeException("Il faut un numéro de joueur");
        if (prenom == null || prenom == " " || prenom == "") throw new RuntimeException("Il faut un prénom");
        if (nom == null || nom == " " || nom == "") throw new RuntimeException("Il faut un nom de famille");
        this.noJoueur = noJoueur;
        this.prenom = prenom;
        this.nom = nom;
    }
    
    public void afficheJoueur() {
        String nomFamille = nom.toUpperCase();
        System.out.println(noJoueur + " - " + prenom + " " + nomFamille);
    }
}
