package ch.comem.tamagotchi;
import java.util.Scanner;
public class Tamagotchi {
    
    // Définitions
    private String nom;
    private int faim;
    private int manger;
    private int choix;
    
    // Objet
    public Tamagotchi(String nom) {
        this.nom = nom;
        this.faim = 0;
        this.choix = 0;
        this.manger = 0;
    }
    
    // Affichage de l'état
    public void afficheEtat() {
        System.out.println(" ");
        System.out.println("Résumons :");
        System.out.println("Le nom de votre Tamagotchi est " + nom + ".");
        if (faim == 0) {
            System.out.println(nom + " a le ventre vide. Pensez à le nourrir !");
        } else if (faim == 1) {
            System.out.println(nom + " a un peu mangé, mais il a toujours faim.");
        } else if (faim == 2) {
            System.out.println(nom + " a bien mangé, mais il a toujours un petit creux");
        } else if (faim == 3) {
            System.out.println(nom + " s'est bien pété le bide. Il a sommeil maintenant");
        } else {
        System.out.println(nom + " est en train de se reposer.");
        }
    }
    
    // Choix du nom
    public String choixNom(String newNom){
        nom = newNom;
        return nom;
    }
    
    // Augmentation faim
    public int augmentatiomFaim(int augmentationFaim) {
        augmentationFaim = (faim + 1);
        faim = augmentationFaim;
        return faim;
    }
    
    // Statut manger
    public int AugmentationManger(int augmentationManger) {
        augmentationManger = (manger + 1);
        manger = augmentationManger;
        return manger;
    }
    
    // Liste actions
    public void actions() {
        if (faim <= 3) {
        // Liste actions avant d'avoir le ventre plein
        System.out.println(" ");
        System.out.println("Vous avez les possibilités suivantes :");
        System.out.println("1. Nourrir votre Tamagotchi " + nom + ".");
        System.out.println("2. Envoyer votre Tamagotchi " + nom + " au lit.");
        System.out.println("3. Connaître le statut de votre Tamagotchi.");
        System.out.println("Pressez 1, 2 ou 3, puis la touche Entrée de votre clavier.");
        System.out.println(" ");
        Scanner scanner = new Scanner(System.in);
        choix = scanner.nextInt();
        } else {
        // Liste actions une fois rassasié
        System.out.println(" ");
        System.out.println("Vous avez les possibilités suivantes :");
        System.out.println("1. Terminer ce programme et laisser votre Tamagotchi " + nom + " se reposer.");
        System.out.println("2. Connaître le statut de votre Tamagotchi actuel.");
        System.out.println("Pressez 1 ou 2 puis la touche Entrée de votre clavier");
        System.out.println(" ");
        Scanner scanner = new Scanner(System.in);
        choix = (scanner.nextInt() + 3);
        }
    }
        
    // Mauvais chiffre entré
    public void erreur() {
        System.out.println("Oups, mauvaise commande. Merci de réessayer.");
    }
    
    // Rend la faim
    public int rendFaim() {
        return this.faim;
    }
    
    // Rend le statut manger
    public int rendManger() {
        return this.manger;
    }
    
    // Rend le choix
    public int rendChoix() {
        return this.choix;
    }
    
    // Fin du programme
    public void fin() {
        Runtime.getRuntime().exit(0);
    }
}