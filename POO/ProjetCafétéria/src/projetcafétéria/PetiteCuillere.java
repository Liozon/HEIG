/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetcafétéria;

public class PetiteCuillere extends Service{
    
    public PetiteCuillere() {
        super();
    }
    
    public void remue() {
        System.out.println("MMMMMMH, j'ai bien remué le café de PD");
    }

    @Override
    public void utilise() {
        this.remue();
    }
    
    
}
