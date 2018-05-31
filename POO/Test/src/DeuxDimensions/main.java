/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DeuxDimensions;

/**
 *
 * @author Julien Muggli
 */
public class main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       Point2Dim pt1 = new Point2Dim(5, -5);
       Point2Dim pt2 = new Point2Dim(-2, 7);
       pt1.afficheCoordonnees(); //(5, -5)
       double x = pt1.X;
       double y = pt1.Y;
       Point2Dim.afficheCoordonnees(pt1);
       Point3Dim pt3D = new Point3Dim(1,5,85);
       pt3D.afficheCoordonnees();
    }
    
}
