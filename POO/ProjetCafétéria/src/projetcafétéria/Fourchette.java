package projetcafétéria;

public class Fourchette extends Service {
    
    public Fourchette() {
        super();
    }
    
    public void pique() {
        System.out.println("J'ai piqué !");
    }
    
    @Override
    public void utilise() {
        this.pique();
    }
    
}
