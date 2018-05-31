package ch.comem;

import java.util.Arrays;

public class CD {

    private String artiste;
    private String titre;
    private String[] plages;
    
    public CD(String artiste, String titre, String[] plages) {
        if (artiste == null || artiste.length() == 0) throw new RuntimeException("Il faut un artiste");
        if (titre == null || titre.length() == 0) throw new RuntimeException("Il faut un titre");
        if (plages == null || plages.length == 0 || plages[0] == null || plages[0].length() == 0) throw new RuntimeException("Il faut un moins un titre");
        this.artiste = artiste;
        this.titre = titre;
        this.plages = plages;
    }

    public String rendArtiste() {
        return this.artiste;
    }

    public String rendTitre() {
        return this.titre;
    }

    public String[] rendPlages() {
        return Arrays.copyOf(this.plages, this.plages.length);
    }
    
    public void affichePlages() {
        for (int noPlage=1; noPlage<=this.plages.length; noPlage++) {
            System.out.print(noPlage + " : " + this.plages[noPlage-1]);
            System.out.println();
        }
    }
}