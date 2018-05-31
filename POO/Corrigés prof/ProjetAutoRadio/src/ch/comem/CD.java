package ch.comem;

import java.util.Arrays;

/**
 * Cette classe permet de simuler des CD ayant :
 *      - artiste
 *      - titre
 *      - plages
 *      Une fois défini, on ne poura plus les changer
 * @author Jean-Pierre Hess
 */
public class CD {

    private String artiste;
    private String titre;
    private String[] plages;
    
    /**
     * 
     * @param artiste Artiste du cd. Ne pas être null et doit être au moins d'un caractère
     * @param titre   Titre du cd.   Idem
     * @param plages  Plages du cd. Il doit au moins avoir une plage
     */
    public CD(String artiste, String titre, String[] plages) {
        if (artiste == null || artiste.length() == 0) throw new RuntimeException("Il faut un artiste");
        if (titre == null || titre.length() == 0) throw new RuntimeException("Il faut un titre");
        if (plages == null || plages.length == 0 || plages[0] == null || plages[0].length() == 0) throw new RuntimeException("Il faut un moins un titre");
        this.artiste = artiste;
        this.titre = titre;
        this.plages = plages;
    }

    /**
     * Permet de rendre l'artiste
     * @return Rend l'artiste du cd
     */
    public String rendArtiste() {
        return this.artiste;
    }

    /**
     * Permet de rendre le titre
     * @return Le titre du cd
     */
    public String rendTitre() {
        return this.titre;
    }

    /**
     * Rend une copie des plages du CD
     * @return Les plages du CD
     */
    public String[] rendPlages() {
        return Arrays.copyOf(this.plages, this.plages.length);
    }
    
    /**
     * Permet d'afficher les plages du CD sous la forme : 
     *    1 : Titre1
     *    2 : Titre2
     *    etc...
     */
    public void affichePlages() {
        
        // Affiche le numéro et le nom 
        // de la plage de toutes les plages 
        // du cd
        for (int noPlage=1; noPlage<=this.plages.length; noPlage++) {
            System.out.print(noPlage + " : " + this.plages[noPlage-1]); // noPlage-1 car les tableau commencent à zéro
            System.out.println();
        }
    }
}