package ch.comem;

/**
 * Permet de simuler un joueur ayant un NOM, pouvant posséder un ballon ou non
 */
public class Joueur {
    private final String NOM;
    private Ballon ballon;
    
    /**
     * Crée le joueur avec le NOM spécifié qui n'a pas de ballon
     * @param nom Nom du joueur
     */
    public Joueur(String nom) {
        if (nom == null || nom.length()<=1) throw new RuntimeException("Il faut un nom");
        this.NOM = nom;
        this.ballon = null;
    }
    
    /**
     * Rend le NOM du joueur
     * @return Le NOM du joueur
     */
    public String rendNom() {
        return this.NOM;
    }
    
    /**
     * Permet de récupérer un ballon sur le terrain
     * @param ballon Le ballon à récupérer
     * @return null si le ballon a pu être récupéré ou retourne le ballon reçu 
     * si le joueur en avait déjà un
     */
    public Ballon recupereBallon(Ballon ballon) {
        Ballon ballonARendre = ballon;
        if (this.ballon == null && ballon != null) {
            this.ballon = ballon;
            ballonARendre = null;
        }
        return ballonARendre;
    }
    
    /**
     * Permet de passer le ballon (que le joueur possède) à un autre joueur
     * @param destinataire Destinataire du ballon
     * Remarque : Si le ballon
     */
    public void passeBallonA(Joueur destinataire) {
        if (destinataire != null && this.ballon != null)
            this.ballon = destinataire.recupereBallon(this.ballon);
    }
   
    /**
     * Le joueur perd le ballon
     * @return Le ballon qu'il avait ou null
     */
    public Ballon perdBallon() {
        Ballon ballonARendre;
        ballonARendre = this.ballon;
        this.ballon = null;
        return ballonARendre;
    } 
    
    /**
     * Rend le ballon du joueur
     * @return  Un ballon ou null
     */
    public Ballon rendBallon() {
        return this.ballon;
    }
}