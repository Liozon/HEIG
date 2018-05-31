package Serie5;

import java.util.ArrayList;

/**
 *
 * @author Chabloz Nicolas
 */
public class ListeLivres extends ArrayList<Livre> {
    
    /**
     * Recherche un livre dans la liste. S'il est déjà présent (un autre livre
     * existe dans la liste avec le même titre et le même auteur) on retourne le
     * livre déjà présent, sinon on retourne null
     * 
     * @param livre
     * @return 
     */
    public Livre find(Livre livre) {
//        for (int i = 0; i < this.size(); i++) {
//            // Si le livre i est le meme que le livre que l'on recherche
//            if (this.get(i).compareTo(livre) == 0) {
//                return this.get(i);
//            }
//        }
//        return null; 
        for (Livre l : this) {
            if (l.compareTo(livre) == 0) {
                return l;
            }
        }
        return null;
    }        
    
    /**
     * Recherche si un livre d'un certain titre et auteur existe dans la liste
     * Retourne le livre si trouvé, sinon la valeur null (aucun livre) est 
     * retournée.
     * 
     * @param titre
     * @param auteur
     * @return 
     */
    public Livre find(String titre, String auteur) {
        // On "feinte" en créant un livre avec le titre et l'auteur recherché et
        // on utilise la méthode de recherche précédente.
        return this.find(new Livre(titre, auteur, "comparaison"));
    }

    /**
     * On "ré-écrit" la méthode add hérité de ArrayList car celle de ArrayList
     * ne prend pas en compte le fait que le livre existe ou non.
     * 
     * Lorsqu'on ajoute un livre dans la liste, on vérifie donc qu'aucun autre
     * livre (avec le même titre et auteur) existe. Si la liste possède déjà un
     * livre identique (même nom même auteur) on ajoute pas le livre dans la
     * liste. Sinon on peut l'ajouter sans risque de "doublon".
     * 
     * @param livre
     * @return 
     */
    @Override
    public boolean add(Livre livre) {
        // si le livre existe déjà, on ne l'ajoute pas
        if (this.find(livre) != null) {
            // on retourne faux car l'ajout a échoué.
            return false;
        // sinon on peut l'ajouter sans problème avec la méthode add codé dans
        // ArrayList (on y accède grâce au mot clé "super")
        } else {
            return super.add(livre);
        }
    }
    
    @Override
    public String toString() {
        // on concatène chaque livre dans une seul chaine de caractère
        String buffer = "";
        for (int i = 0; i < this.size(); i++) {
            // On affiche chaque livre avec pour chacun deux tabulations et un
            // retour à la ligne
            buffer += "\t\t" + this.get(i).toString() + "\n";
        }
        // on retourne la chaine de caractère contenant tous les livres
        return buffer;
    }
    
}
