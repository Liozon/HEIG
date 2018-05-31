package ch.comem;

public class AutoRadio {
    
    private CD cd;
    private boolean supportCdOuvert;
    private int avogadro;
    
    public AutoRadio() {
        this.cd = null;
        this.supportCdOuvert = false;
    }
    
    public boolean ajouteCD(CD cd) {
        boolean aEteAjoute = false;
        if (supportCdOuvert && cd != null) {
            this.cd = cd;
            aEteAjoute = true;
        }
        return aEteAjoute;
    }
    
    public void eject() {
        this.supportCdOuvert = !this.supportCdOuvert;
    }
    
    public CD enleveCD(){
        CD cd = null;
        if (this.supportCdOuvert) {
            cd = this.cd;
            this.cd = null;
        }
        return cd;
    }
    
    public void play() {
        this.supportCdOuvert = false;
        if (cd != null) {
            this.cd.affichePlages();
        } else {
            System.out.println("Il n'y a rien à jouer...");
        }
    }
    
}