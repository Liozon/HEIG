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
public class Prog {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        C1 c1 = new C1();
        C2 c2 = new C2();
        System.out.println(c1);
        System.out.println(c1.toString());
        System.out.println(c2.getC());
        System.out.println(c2);
        int o;
        o = 843;
        System.out.println(o);
        Object o1 = c2;
        System.out.println(o1);
        
        Chien chien1 = new Chien("Connard");
        chien1.aboie();
        Object unObjet = chien1;
        System.out.println(chien1);
        
    }
    
}
