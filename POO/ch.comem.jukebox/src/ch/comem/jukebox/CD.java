package ch.comem.jukebox;

/**
 * Cette classe permet de simuler des CD ayant:
 *      - ID
 *      - Piste
 *      - Compositeur
 *      Une fois défini, on ne pourra plus les changer
 * @author Julien Muggli
 */
public class CD {

    private int id; 
    private String piste;
    private String compositeur;
    public static int lecture;
    
    /**
     * 
     * @param id ID du CD. Ne peut pas être null est doit être supérieur ou égal à 1
     * @param piste Titre de la piste. Ne peut pas être null et doit contenir au moins 1 caractère
     * @param compositeur Idem
     */

    public CD(int id, String piste, String compositeur) {
        this.id = id;
        this.piste = piste;
        this.compositeur = compositeur;
    }

    /**
     * Permet de rendre l'ID du CD
     * @return Rend l'ID du CD
     */
    public int rendIdCD() {
        return this.id;
    }

    /**
     * Permet de rendre le nom de la piste
     * @return le nom de la piste
     */
    public String rendNomPiste() {
        return this.piste;
    }

    /**
     * Permet de rendre le nom du compositeur
     * @return le nom du compositeur
     */
    public String rendNomCompositeur() {
        return this.compositeur;
    }

    /**
     * Permet de concaténer l'ID, le nom de la piste et le nom du compositeur
     * @return L'ID, le nom de la piste et le nom du compositeur
     */
    public String infoCD() {
        return rendIdCD() + "." + " '" + rendNomPiste() + "'" + ", de " + rendNomCompositeur();
    }
}