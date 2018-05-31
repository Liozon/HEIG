package projetcafétéria;

public class Cuillere extends Service {
    
    public Cuillere() {
        super();
    }
    
    public void remuer() {
        System.out.println("Mmmh, j'ai remué la bonne soupasse !");
    }
    
    @Override
    public void utilise() {
        this.remuer();
    }
}
