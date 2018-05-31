/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ch.comem.programmedate;

import java.util.Scanner;

/**
 *
 * @author Julien Muggli
 */
public class ChComemProgrammeDate {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        /*Date date1 = new Date(30,2,2000);
        System.out.println(date1.rendJour());
        System.out.println(date1.rendMois());
        System.out.println(date1.rendAnnee());*/
        int jour;
        int mois;
        int annee;
//        Scanner date = new Scanner(System.in);
//        System.out.println("Entrez le jour: ");
//        jour = date.nextInt();
//        System.out.println("Le jour est : " + jour);
        jour = 29;
        mois = 2;
        annee = 2000;
        Date date1 = new Date(jour, mois, annee);
        System.out.println(date1.rendJour());
        System.out.println(date1.rendMois());
        System.out.println(date1.rendAnnee());
        
        Date date2 = new Date();
        System.out.println(date2.rendJour());
        System.out.println(date2.rendMois());
        System.out.println(date2.rendAnnee());
        
        
    }
    
}
