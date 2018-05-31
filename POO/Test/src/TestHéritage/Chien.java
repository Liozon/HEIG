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
public class Chien {
    
    public final String NOM;
    
    public Chien(String nom) {
        this.NOM = nom;
    }
    
    public void aboie() {
        System.out.println("Wouf fils de pute !");
    }
    
    @Override
    public String toString() {
        return "Je suis un chien, PD. " + NOM;
    }
}
