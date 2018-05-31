
package ch.comem;

public class Date {
    
    private int jour;
    private int mois;
    private int annee;

    public Date() {
        this.jour = 27;
        this.mois = 9;
        this.annee = 2017;
    }
    
    public Date(int jour, int mois, int annee) {
        if (dateOk(jour,mois,annee)) {
            this.jour = jour;
            this.mois = mois;
            this.annee = annee;
        }
        else {
            throw new RuntimeException("Impossible de créer la date");
        }
    }
    
    public static boolean estBissextile(int annee) {
        boolean estBissextile = false;
        
        estBissextile = (annee%4 == 0 && annee%100 != 0) || annee%400 ==0;
        
        
        return estBissextile;
    }
    
    public static boolean dateOk(int jour, int mois, int annee) {
        boolean dateOk = false;
        
        dateOk = mois>=1 && mois<=12;
        if (dateOk) {
            int nbJoursMois;
            if (mois==4 || mois==6 || mois==9 || mois==11) {
                nbJoursMois = 30;
            } else if (mois==2) {
                if (estBissextile(annee)) {
                    nbJoursMois = 29;
                } else {
                    nbJoursMois = 28;
                }
            } else {
                nbJoursMois = 31;
            }
            dateOk = jour>=1 && jour<=nbJoursMois;
        }
        return dateOk;
    }

    /**
     * @return the jour
     */
    public int rendJour() {
        return this.jour;
    }

    /**
     * @return the mois
     */
    public int rendMois() {
        return this.mois;
    }

    /**
     * @return the annee
     */
    public int rendAnnee() {
        return this.annee;
    }
    
}
