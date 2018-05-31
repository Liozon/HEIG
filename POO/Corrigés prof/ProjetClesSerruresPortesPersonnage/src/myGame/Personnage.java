package myGame;

import java.util.ArrayList;
import java.util.Collections;
import java.util.HashSet;
import java.util.List;

/**
 * Permet de simuler un personnage possédant un prénom et pouvant avoir des clés
 */
public class Personnage {

    private final static HashSet<String> PRENOM_EXISTANTS = new HashSet<>();
    public final String PRENOM;
    private final ArrayList<Cle> CLES;
    
    /**
     * Crée un personnage avec le prénom spécifié
     * @param prenom Prénom du personnage
     * Remarque : Lance une exception si le prénom n'a pas été défini ou si
     *            le prénom a déjà été défini
     */
    public Personnage(String prenom) {
        if (prenom == null || prenom.length()==0) throw new RuntimeException("Il faut un prénom");
        if (Personnage.PRENOM_EXISTANTS.contains(prenom)) throw new RuntimeException("Le prénom \"" + prenom + "\" a déjà été donné");
        Personnage.PRENOM_EXISTANTS.add(prenom);
        this.PRENOM = prenom;
        this.CLES = new ArrayList<>(); 
    }
    
    /**
     * Permet de récupérer les clés
     * @return liste vide ou pleine de clés
     */
    public List<Cle> rendCles() {
        return Collections.unmodifiableList(CLES);
    }
    
    /**
     * Permet de récupérer la clé spécifiée
     * @param cle La clé à récupérer
     */
    public boolean recupereCle(Cle cle) {
        boolean aEteRecuperee = false;
        if (cle!=null && !this.CLES.contains(cle)) {
            this.CLES.add(cle);
            aEteRecuperee = true;
        }
        return aEteRecuperee;
    }
    
    /**
     * Permet au personnage d'ouvrir la serrue de la porte spécifiée avec la clé spécifiée
     * @param porte La porte dont on veut ouvrir la serrure
     * @param cle La clé permettant d'ouvrir la serrure
     * @return true si la serrure a pu s'ouvrir
     */
    public boolean ouvreSerrureDeLaPorte(Porte porte, Cle cle) {
        boolean aEteOuverte = false;
        if (porte!=null && porte.possedeUneSerrue()) {
            if (cle!=null) {
                aEteOuverte = porte.SERRURE.ouvre(cle);
            }
        }
        return aEteOuverte;
    }
    
    /**
     * Permet au personnage de fermer la serrue de la porte spécifiée avec la clé spécifiée
     * @param porte La porte dont on veut fermer la serrure
     * @param cle La clé permettant de fermer la serrure
     * @return true si la serrure a pu se fermer
     */
    public boolean fermeSerrureDeLaPorte(Porte porte, Cle cle) {
        boolean aEteFermee = false;
        if (porte!=null && porte.possedeUneSerrue()) {
            if (cle!=null) {
                aEteFermee = porte.SERRURE.ferme(cle);
            }
        }
        return aEteFermee;
    }
    
    public boolean ouvrePorte(Porte porte) {
        return porte.ouvre();
    }
    
    public boolean fermePorte(Porte porte) {
        return porte.ferme();
    }
}