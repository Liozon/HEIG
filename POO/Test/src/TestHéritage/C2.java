/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TestHéritage;

/**
 *
 * @author Julien Muggli
 */
public class C2 extends C1 {
    
    private int c;
    
    public C2() {
        super();
        this.c = 2;
    }
    
    @Override
    public int getC() {
        System.out.println("Deb " + super.getC());// Pour accéder à la variable C1 qui est dans C2
        return this.c;
    }
    
    @Override
    public String toString() {
        String infos = "";
        infos = infos + super.toString();
        infos = infos + "\n";
        infos = infos + "c vaut : " + this.c;
        return infos;
    }
}
