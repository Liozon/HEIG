/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ch.comem.tortue;

/**
 *
 * @author Julien Muggli
 */
public class ChComemTortue {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Tortue caroline = new Tortue("Caroline");
//        System.out.println(caroline); //Affiche l'adresse de la mémoire
        System.out.println(caroline.rendNom()); //rend ce qui est DANS la mémoire
        
        Salade pommee = new Salade();
        
        caroline.mange(pommee);
    }
    
}
