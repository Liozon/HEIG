package CorrigéClassesAdaptables;

import ch.comem.turtle.BigTurtle;


class Carre extends Forme {
    
    private double cote;

    public Carre(double unCote) {
        if (unCote == 0) throw new RuntimeException("Le cercle doit être visible, bâtard");
        this.cote = Math.abs(unCote);
    }

    @Override
    public void apparait(BigTurtle caroline) {
        caroline.turnLeft(90);
        caroline.forward((int)Math.round(cote));
        caroline.turnRight(90);
        caroline.forward((int)Math.round(cote));
        caroline.turnRight(90);
        caroline.forward((int)Math.round(cote));
        caroline.turnRight(90);
        caroline.forward((int)Math.round(cote));
        caroline.turnRight(90);
    }
    
}
