package ch.comem.jukebox;

import java.util.Scanner;

/**
 *
 * @author Julien Muggli
 */
public class ChComemJukebox {

    private static int choix;
    private static boolean jukeOuvert;
    private static boolean jukeCd;
    private static boolean jukePlay;
    private static boolean jukePower;
    private static int cdLecture;
    private static CD cd1;
    private static CD cd2;
    private static CD cd3;
    private static CD cd4;
    private static CD cd5;

    public static void affichageChoix() {
        System.out.println("Vous avez les possibilités suivantes:");
        System.out.println("");
        System.out.println("1. Ouvrir le tiroir CD du lecteur.");
        if (jukePlay == false) {
            System.out.println("2. Lancer la lecture sur le lecteur.");
        } else {
            System.out.println("2. Stopper la lecture sur le lecteur.");
        }
        System.out.println("3. Éteindre le lecteur CD (Attention: cela mettra fin au programme)");
        System.out.println("Pressez 1, 2, ou 3, puis la touche Entrée de votre clavier.");
        System.out.println(" ");
        Scanner scanner = new Scanner(System.in);
        choix = scanner.nextInt();
    }

    public static void actionsUtilisateur() {
        switch (choix) {
            case 1:
                if (jukePlay == false) {
                    jukeOuvert = true;
                    System.out.println("Le tiroir du jukebox est ouvert. Vous pouvez insérer un CD en appuyant sur le n° du CD souhaité");
                    System.out.println("Liste des CD: ");
                    listeCD();
                    insertionCD();
                    break;
                } else if (jukePlay == true) {
                    System.out.println("Le lecteur est en train de lire le CD suivant: ");
                    cdActuel();
                    System.out.println("Merci d'arrêter la lecture du CD avant d'ouvrir le tiroir.");
                }
                break;
            case 2:
                if (jukeCd == false && jukePlay == false) {
                    System.out.println("Impossible de lancer une lecture: le tiroir ne contient pas de CD");
                } else if (jukePlay == false && jukeCd == true) {
                    System.out.println("Lecture en cours du CD: ");
                    cdActuel();
                    jukePlay = true;
                } else if (jukePlay == true) {
                    System.out.println("Arrêt de la lecture du CD: ");
                    cdActuel();
                    jukePlay = false;
                } else {
                    System.out.println("Oups, je ne sais pas quoi faire là");
                }
                break;
            case 3:
                finProgramme();
                break;
            default:
                System.out.println("Mauvaise entrée, merci de réessayer.");
                System.out.println("");
                break;
        }
    }

    public static void insertionCD() {
        System.out.println("Entrez le n° du CD que vous souhaitez insérer:");
        System.out.println("");
        Scanner scanner = new Scanner(System.in);
        cdLecture = scanner.nextInt();
        jukeCd = true;
        jukeOuvert = false;
        jukePlay = false;
        System.out.println("Vous avez inséré le CD: ");
        cdActuel();
    }

    public static void cdActuel() {
        switch (cdLecture) {
            case 1:
                System.out.println(cd1.infoCD());
                break;
            case 2:
                System.out.println(cd2.infoCD());
                break;
            case 3:
                System.out.println(cd3.infoCD());
                break;
            case 4:
                System.out.println(cd4.infoCD());
                break;
            case 5:
                System.out.println(cd5.infoCD());
                break;
            default:
                System.out.println("Aucun CD n'est actuellement dans le lecteur.");
                break;
        }
    }

    public static void listeCD() {
        System.out.println(cd1.infoCD());
        System.out.println(cd2.infoCD());
        System.out.println(cd3.infoCD());
        System.out.println(cd4.infoCD());
        System.out.println(cd5.infoCD());
        System.out.println("");
    }

    public static void finProgramme() {
        Runtime.getRuntime().exit(0);
    }

    public static void main(String[] args) {

        // Création des divers CD
        cd1 = new CD(1, "Thriller", "Michael Jackson");
        cd2 = new CD(2, "The man", "The Killers");
        cd3 = new CD(3, "I was made for lovin' you", "Kiss");
        cd4 = new CD(4, "I love MpE 4 ever", "Mathias Auberspoon");
        cd5 = new CD(5, "7, the element", "Vitas");

        // Création du lecteur
        Lecteur lecteur1 = new Lecteur(false, false, false);
        cdLecture = CD.lecture;
        jukeOuvert = lecteur1.rendOuvert();
        jukeCd = lecteur1.rendCd();
        jukePlay = lecteur1.rendPlay();
        jukePower = lecteur1.rendPower();

        // Affichage des CD créés
        System.out.println("Voici les CD à disposition: ");
        System.out.println("");
        listeCD();
        while (jukePower != true) {
            affichageChoix();
            actionsUtilisateur();
        }
    }
}