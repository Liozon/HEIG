
package CorrigéClassesAdaptables;

import ch.comem.turtle.BigTurtle;
import ch.comem.turtle.Point2Dim;
import java.util.Map;
import java.util.Set;


class SuperTurtle extends BigTurtle {
    
    public SuperTurtle() {
        super();
        
    }

    void dessin(Dessin dessin) {
        if (dessin != null) {
            System.out.println("Youpute! J'ai du job de biatch avec " + dessin);
            Map<Forme, Point2Dim> map = dessin.rendMap();
            Set<Forme> formes = map.keySet();
            for (Forme forme : formes) {
                Point2Dim position = map.get(forme);
                this.jumpTo((int)position.getX(), (int)position.getY());
                forme.apparait(this);
            }
                    
        }
    }
    
}
