package ClassesAdaptables;

import ch.comem.turtle.Point2Dim;

public class Programme {
    public static void main(String[] args) {
       Turtle caroline = new Turtle();
       Formes c1 = new Carre(10);
       Dessin dessin1 = new Dessin();
       dessin1.ajouteForme(new Point2Dim(100, 100), c1);
       caroline.dessine(dessin1);
       Dessin dessin2 = new Dessin();
       dessin2.ajouteForme(new Point2Dim(200, 100), new Rond(20));
       caroline.dessine(dessin2);
       
    }
    
}
