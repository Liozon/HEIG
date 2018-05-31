package ch.comem.tamagotchi;
import java.util.Scanner;
/**
 *
 * @author Julien Muggli
 */
public class ChComemTamagotchi {

        public static void main(String[] args) {
                    
            // Asking for a name for the new tamagotchi
            System.out.println("Merci d'entrer un nom pour votre nouveau Tamagotchi : ");
            Scanner scanner = new Scanner(System.in);
            String nom = scanner.nextLine();
            
            // Creation of the new Tamagotchi
            Tamagotchi nouveauTama = new Tamagotchi(nom);
            int statutManger = nouveauTama.rendManger();
            
            // Displaying all infos known at this stage
            nouveauTama.afficheEtat();
            
            // Displaying the list of actions
            nouveauTama.actions();
            
            // Logic
            while (nouveauTama.rendManger() >= 0) {
                int tamaFaim = nouveauTama.rendFaim();
                switch (nouveauTama.rendChoix()) {
                    // The user wants to feed the Tamagotchi
                    case 1:
                        if (tamaFaim == 0) {
                            System.out.println("Mmmmmh ! " + nom + " est en train de se régaler !");
                            nouveauTama.augmentatiomFaim(tamaFaim);
                            nouveauTama.AugmentationManger(statutManger);
                            nouveauTama.actions();                        
                        } else if (tamaFaim == 1) {
                            System.out.println("Super ! " + nom + " est en train de se régaler une deuxième fois!");
                            nouveauTama.augmentatiomFaim(tamaFaim);
                            nouveauTama.AugmentationManger(statutManger);
                            nouveauTama.actions();
                        } else if (tamaFaim == 2) {
                            System.out.println("Tip top ! " + nom + " est en train de se régaler une troisième fois, merci!");
                            nouveauTama.augmentatiomFaim(tamaFaim);
                            nouveauTama.AugmentationManger(statutManger);
                            nouveauTama.actions();
                        } else {    
                            System.out.println("Malheureusement, " + nom + " a trop mangé. Il faut l'envoyer dormir maintenant.");
                            nouveauTama.actions();
                        }
                        break;
                    // The user wants to let the Tamagotchi sleep
                    case 2:
                        if (tamaFaim == 0) {
                            System.out.println(nom + " a très faim. Pensez à le nourrir !");
                            nouveauTama.actions();                        
                        } else if (tamaFaim == 1) {
                            System.out.println(nom + " a encore faim. Pensez à le nourrir !");
                            nouveauTama.actions();
                        } else if (tamaFaim == 2) {
                            System.out.println(nom + " a toujours faim. Pensez à le nourrir !");
                            nouveauTama.actions();
                        } else {    
                            System.out.println("Ouf, " + nom + " a bien mangé. Il peut enfin aller se reposer.");
                            nouveauTama.augmentatiomFaim(tamaFaim);
                            nouveauTama.actions();
                        }
                        break;
                    // The user wants to know the status of the Tamagotchi
                    case 3:
                        nouveauTama.afficheEtat();
                        nouveauTama.actions();                                                
                        break;
                    // The user wants to end the program
                    case 4:
                        nouveauTama.fin();                        
                        break;
                    // The user wants to know the status of the Tamagotchi
                    case 5:
                        nouveauTama.afficheEtat();
                        nouveauTama.actions();
                        break;
                    // Text if wrong input
                    default:
                        nouveauTama.erreur();
                        nouveauTama.actions();
                        break;                    
                }
            }
        }    
}