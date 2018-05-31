/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DeuxDimensions;

/**
 * @author Julien Muggli
 * Permet de simuler des points en deux dimensions
 */
public class Point2Dim {

    /**
     * Coordonnées X du point deux dim
     */
    public final double X;
    /**
     * Coordonnée Y du point deux dim
     */
    public final double Y;

    /**
     * Crée un point aux coordonnées spécifiées
     * @param x Coordonnée X du point
     * @param y Coordonnée Y du point
     */
    public Point2Dim(double x, double y) {
        this.X = x;
        this.Y = y;
    }
    
    /**
     * Affiche les coordonnées dans la console de sortie sous
     * la forme (x;y)
     */
    public void afficheCoordonnees(){
        System.out.println("(" + this.X + "; " + this.Y + ")");
    }
    
    public static void afficheCoordonnees(Point2Dim point){
         double varX = point.X;
         double varY = point.Y;
         System.out.println("(" + varX + "; " + varY + ")");
         System.out.println("Sans les variables: " + "(" + point.X + "; " + point.Y + ")");
         point.afficheCoordonnees(); // Méthode la plus simple, car on a pas besoin d'étider 2x le code si on doit modifier quelque chose
    }
}
