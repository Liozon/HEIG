/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ch.comem.exerciceserrure;

/**
 *
 * @author Julien Muggli
 */
public class Porte {
    
    private boolean aUneSerrure;
    private int ouvreSerrure;
    
    public Porte(boolean aUneSerrure, int noSerrure) {
        aUneSerrure = this.aUneSerrure;
        noSerrure = this.ouvreSerrure;
//        if (this.aUneSerrure == false) {
//            this.ouvreSerrure = -1;
//        };
//        if (this.ouvreSerrure > 0) {
//            throw new RuntimeException("Le numéro de serrure doit être positif");
//        };
        
    }
    
    public String rendAUneSerrure() {
        if (this.aUneSerrure) {
            return "La porte a une serrure.";
        } else {
            return "La porte n'a pas de serrure.";
        }
    }
    
    public String rendOuvreSerrure() {
        if (this.ouvreSerrure > 0) {
        return "Elle a la serrure n° " + this.ouvreSerrure;
        }
        return "";
    }
    
}
