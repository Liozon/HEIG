package CorrigéClassesAdaptables;

import ch.comem.turtle.Point2Dim;

public class Programme {

       public static void main(String[] args) {
//        Cercle cercle1 = new Cercle(50);
////        Dessin dessin1 = new Dessin();
//////        dessin1.ajouteForme(cercle1, new Point2Dim(100, 100));
////        SuperTurtle fenetre1 = new SuperTurtle();
//////        SuperTurtle fenetre2 = new SuperTurtle();
////        fenetre1.dessin(dessin1);
            Dessin dessin = new Dessin();
            Forme forme = new Cercle(50);
            dessin.ajoute(forme,new Point2Dim(200, 200));
            Forme forme2 = new Cercle(20);
            dessin.ajoute(forme2,new Point2Dim(400, 400));
            
            Forme forme3 = new Carre(50);
            dessin.ajoute(forme3, new Point2Dim(100, 100));
            
            Forme forme4 = new Triangle(60);
            dessin.ajoute(forme4, new Point2Dim(150, 150));
            
            SuperTurtle fenetre1 = new SuperTurtle();
            fenetre1.dessin(dessin);
               
    }
    
}
