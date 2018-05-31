
package myGame;

public class Programme {

    public static void main(String[] args) {
        Personnage luc = new Personnage("Luc");
        Porte porte1 = new Porte(new Serrure());
        System.out.println(luc.recupereCle(new Cle()));
        System.out.println(luc.ouvrePorte(porte1));
        System.out.println(luc.fermePorte(porte1));
        System.out.println(luc.fermeSerrureDeLaPorte(porte1, luc.rendCles().get(0)));
        System.out.println(luc.ouvrePorte(porte1));
    }
    
}