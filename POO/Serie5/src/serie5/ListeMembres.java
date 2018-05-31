package Serie5;

import java.util.ArrayList;
import java.util.Collections;

/**
 *
 * @author Chabloz Nicolas
 */
public class ListeMembres extends ArrayList<Membre> {
    
    /**
     * Recherche un membre par son email. Retourne "null" si aucun membre n'a 
     * cette email
     * 
     * @param email
     * @return 
     */
    public Membre find(String email) {
        for (int i = 0; i < this.size(); i++) {
            // si le membre a bien l'email recherché
            if (this.get(i).equals(email)) {                
                return this.get(i);
            }
        }
        // si aucun membre n'a cette email on retourne "null"
        return null;
    }
    
    /**
     * Recherche un membre possèdant un livre d'un certain titre et auteur.
     * Retourn "null" si aucun membre ne possède le livre.
     * 
     * @param titre
     * @param auteur
     * @return 
     */
    public Membre find(String titre, String auteur) {
        for (int i = 0; i < this.size(); i++) {            
            // On récupère la liste des livre du membre numéro i et on recherche
            // si il possède le livre grâce au titre et à l'auteur recherchés.
            if (this.get(i).getLivres().find(titre, auteur) != null) {                
                return this.get(i);
            }
        }
        // si aucun membre n'a ce livre on retourne "null"
        return null;
    }
    
    public ListeMembres getListeMembresComite(){
        // crée un "sous-liste" pour stocker les membres du comité
        ListeMembres comite = new ListeMembres();
        // parcours tous les membres
        for (int i = 0; i < this.size(); i++) {
            // si le membre est un "MembreComité"
            if (this.get(i) instanceof MembreComite) {
                // on l'ajoute à la liste des membres du comité
                comite.add(this.get(i));
            }
        }
        // on trie la liste des membre du comité
        Collections.sort(comite);
        // on retourne la liste des membres du comité
        return comite;
    }

    @Override
    public String toString() {
        // trie la liste des membres avant tout
        Collections.sort(this);
        // on concatène chaque membre dans une seul chaine de caractère
        String buffer = "";
        for (int i = 0; i < this.size(); i++) {
            // On affiche chaque membre avec pour chacun une tabulation et un
            // retour à la ligne
            buffer += "\t" + this.get(i).toString() + "\n";
        }
        // on retourne la chaine de caractère contenant tous les membres
        return buffer;
    }
    
    
}
