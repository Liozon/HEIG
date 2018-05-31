package ch.comem.tamagotchi;
import java.util.Scanner;
/**
 *
 * @author Julien Muggli
 */
public class Tamagotchi {
    
    // Definitions
    private String nom;
    private int faim;
    private int manger;
    private int choix;
    
    // Object
    public Tamagotchi(String nom) {
        this.nom = nom;
        this.faim = 0;
        this.choix = 0;
        this.manger = 0;
    }
    
    // Displaying the current status
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
    
    // Choosing a name
    public String choixNom(String newNom){
        nom = newNom;
        return nom;
    }
    
    // Incrementing the variable faim
    public int augmentatiomFaim(int augmentationFaim) {
        augmentationFaim = (faim + 1);
        faim = augmentationFaim;
        return faim;
    }
    
    // Status of the variable manger
    public int AugmentationManger(int augmentationManger) {
        augmentationManger = (manger + 1);
        manger = augmentationManger;
        return manger;
    }
    
    // Actions list
    public void actions() {
        if (faim <= 3) {
        // Actions list before the Tamagotchi has eaten well
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
        // Actions list once the tamagotchi has eaten well
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
        
    // Wrong input
    public void erreur() {
        System.out.println("Oups, mauvaise commande. Merci de réessayer.");
    }
    
    // Returns the variable faim
    public int rendFaim() {
        return this.faim;
    }
    
    // Returns the variable manger
    public int rendManger() {
        return this.manger;
    }
    
    // Returns the variable choix
    public int rendChoix() {
        return this.choix;
    }
    
    // End of program
    public void fin() {
        Runtime.getRuntime().exit(0);
    }
}