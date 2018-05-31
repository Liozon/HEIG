import ch.comem.Ballon;
import ch.comem.Joueur;

public class ProgrammeFoot {

    public static void main(String[] args) {
        Ballon ballon1 = new Ballon();
        Ballon ballon2 = new Ballon();
        System.out.println(ballon1);
        System.out.println(ballon2);
        
        Joueur brice = new Joueur("Brice");
        Joueur denis = new Joueur("Denis");
        Joueur roger = new Joueur("Roger");
        
        brice.recupereBallon(ballon1);
        brice.passeBallonA(denis);
    
        roger.recupereBallon(ballon2);    
        denis.passeBallonA(roger);
        Ballon unBallon = roger.rendBallon();
        roger.perdBallon();
    }  
}