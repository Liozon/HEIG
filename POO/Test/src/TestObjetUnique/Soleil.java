/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TestObjetUnique;

/**
 *
 * @author Julien Muggli
 */
public class Soleil {
    
      private static Soleil soleil= new Soleil();
//    private static int compteur = 0;
    
      private Soleil() {
//        if (compteur==0) {
//            compteur++;
//        } else {
//            throw new RuntimeException("Il y a déjà un soleil");
//        }
    }
    
    public static Soleil rendInstance() {
        return Soleil.soleil;
    }
}
