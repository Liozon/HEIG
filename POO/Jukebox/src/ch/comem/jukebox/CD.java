package ch.comem.jukebox;

/**
 *
 * @author Julien Muggli
 */
public class CD {

    // Variables
    private int id; // ID du CD
    private String piste; // Nom de la piste
    private String compositeur; // Nom du compositeur
    public static int lecture; // CD en cours de lecture

    // Constructeur du CD
    public CD(int id, String piste, String compositeur) {
        this.id = id;
        this.piste = piste;
        this.compositeur = compositeur;
    }

    // Rend la variable id
    public int rendIdCD() {
        return this.id;
    }

    // Rend la variable piste
    public String rendNomPiste() {
        return this.piste;
    }

    // Rend la variable compositeur
    public String rendNomCompositeur() {
        return this.compositeur;
    }

    // Concatène et rend les infos CD sous forme d'une phrase
    public String infoCD() {
        return rendIdCD() + "." + " '" + rendNomPiste() + "'" + ", de " + rendNomCompositeur();
    }
}
