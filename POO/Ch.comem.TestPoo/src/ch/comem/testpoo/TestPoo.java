/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ch.comem.testpoo;

/**
 *
 * @author Julien Muggli
 */
public class TestPoo {
    
    public static void main(String[] args) {
        int noClasse = 157;
        Eleve eleve1 = new Eleve("Julien","Bogoss");
        Eleve eleve2 = new Eleve("Thibaut","Cuttat");
        Eleve eleve3 = new Eleve("Safa","Tigue");
        System.out.println(eleve3.rendPrenom() + " " + eleve3.rendNom());
    }
    
}
