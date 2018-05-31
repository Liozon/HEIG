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
public class Point3Dim extends Point2Dim {
    
    public final double Z;
    
    public Point3Dim(double x, double y, double z) {
        super (x,y);
        this.Z = z;
        
    }
    
    @Override
    public void afficheCoordonnees() {
        System.out.println("(" + super.X + "," + super.Y + "," + this.Z + ")");
    }
    
}
