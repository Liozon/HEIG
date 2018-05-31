package CorrigéClassesAdaptables;

import ch.comem.turtle.BigTurtle;


class Cercle extends Forme {
    
    private double rayon;

    public Cercle(double unRayon) {
        if (unRayon == 0) throw new RuntimeException("Le cercle doit être visible, bâtard");
        this.rayon = Math.abs(unRayon);
    }

    @Override
    public void apparait(BigTurtle caroline) {
        caroline.penUp();
        caroline.turnLeft(90);
        caroline.forward((int)Math.round(rayon));
        caroline.turnRight(90);
        caroline.penDown();
        caroline.turnRightRadius(360, (int)Math.round(rayon));
    }
    
}
