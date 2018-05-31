package ch.comem.tamagotchi;
import java.util.Scanner;
/**
 *
 * @author Julien Muggli
 */
public class ChComemTamagotchi {

        public static void main(String[] args) {
                    
            // Demande le nom du nouveau Tamagotchi
            System.out.println("Merci d'entrer un nom pour votre nouveau Tamagotchi : ");
            Scanner scanner = new Scanner(System.in);
            String nom = scanner.nextLine();
            
            // Création du nouveau Tamagotchi
            Tamagotchi nouveauTama = new Tamagotchi(nom);
            int statutManger = nouveauTama.rendManger();
            
            // Affichage des infos créées et connues à ce moment
            nouveauTama.afficheEtat();
            
            // Proposition des actions à l'utilisateur
            nouveauTama.actions();
            
            // Logique
            while (nouveauTama.rendManger() >= 0) {
                int tamaFaim = nouveauTama.rendFaim();
                switch (nouveauTama.rendChoix()) {
                    // L'utilisateur veut nourrir le Tamagotchi
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
                    // L'utilisateur veut envoyer le Tamagotchi au lit
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
                    // L'utilisateur veut connaître le statut du Tamagotchi
                    case 3:
                        nouveauTama.afficheEtat();
                        nouveauTama.actions();                                                
                        break;
                    // L'utilisateur veut terminer le programme
                    case 4:
                        nouveauTama.fin();                        
                        break;
                    // L'utilisateur veut afficher l'état du Tamagotchi
                    case 5:
                        nouveauTama.afficheEtat();
                        nouveauTama.actions();
                        break;
                    // En cas de mauvais input
                    default:
                        nouveauTama.erreur();
                        nouveauTama.actions();
                        break;                    
                }
            }
        }    
}