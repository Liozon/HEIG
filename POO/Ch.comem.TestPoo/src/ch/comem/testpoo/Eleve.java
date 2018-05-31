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
public class Eleve {
    private String nom;
    private String prenom;


    public Eleve(String prenom, String nom) {
        this.nom = nom;
        this.prenom = prenom;
    }

    public String rendPrenom() {
        return this.prenom;
    }
    
    public String rendNom() {
        return this.nom;
    }
}
