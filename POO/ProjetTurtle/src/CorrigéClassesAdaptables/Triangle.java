package CorrigéClassesAdaptables;

import ch.comem.turtle.BigTurtle;


class Triangle extends Forme {
    
    private double tranche;

    public Triangle(double uneTranche) {
        if (uneTranche == 0) throw new RuntimeException("Le cercle doit être visible, bâtard");
        this.tranche = Math.abs(uneTranche);
    }

    @Override
    public void apparait(BigTurtle caroline) {
        caroline.turnLeft(90);
        caroline.forward((int)Math.round(tranche));
        caroline.turnRight(120);
        caroline.forward((int)Math.round(tranche));
        caroline.turnRight(120);
        caroline.forward((int)Math.round(tranche));
    }
    
}
