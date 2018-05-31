package projetcafétéria;

public class Couteau extends Service {
    
    public Couteau() {
        super();
    }
    
        public void coupe() {
        System.out.println("J'ai coupé !");
    }
    
    @Override
    public void utilise() {
        this.coupe();
    }
    
}
