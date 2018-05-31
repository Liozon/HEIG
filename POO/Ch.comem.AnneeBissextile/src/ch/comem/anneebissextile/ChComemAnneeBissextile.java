/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ch.comem.anneebissextile;

import java.util.Scanner;

/**
 *
 * @author Julien Muggli
 */
public class ChComemAnneeBissextile {
    //Entrées
    int annee;
    int mois;
    int jour;
    //Sorties
    boolean resultat;    
    public static void main(String[] args) {
        System.out.println("Entrez un jour: ");
        Scanner scanner = new Scanner(System.in);
        String jour = scanner.nextLine();
        System.out.println("Entrez un mois: ");
        String mois = scanner.nextLine();
        System.out.println("Entrez une année: ");
        String annee = scanner.nextLine(); 
        System.out.println("La date est " + jour + "." + mois + "." + annee );
        
    }
    
    private void calculBissextile() {
        if (annee/4)
  System.out.println("le nombre est négatif");
    else
  System.out.println("le nombre est positif");
    }
    
}
