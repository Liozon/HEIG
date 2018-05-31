package myGame;

import java.util.HashSet;

/**
 * Permet de simuler une porte pouvant avoir une serrure ou non
 * la porte peut s'ouvrir ou se fermer
 */
public class Porte {
   
    private static final HashSet<Serrure> SERRURES_DEJA_ASSIGNEES = new HashSet<>();
    public final Serrure SERRURE;
    private boolean estOuverte;
    
    /**
     * Crée une porte (fermée) sans serrure
     */
    public Porte() {
        this.SERRURE = null;
        this.estOuverte = false;
    }
    
    /**
     * Crée une porte (fermée) avec la serrure spécifiée
     * @param serrure Serrure
     * Remarque : Lance une exception si la serrure vaut null
     *            Lance une exception si la serrure est déjà assignée à une porte
     */
    public Porte(Serrure serrure) {
        if (serrure==null) throw new RuntimeException("Il faut une serrure");
        if (Porte.SERRURES_DEJA_ASSIGNEES.contains(serrure)) throw new RuntimeException("La serrure a déjà été assignée à une porte");
        Porte.SERRURES_DEJA_ASSIGNEES.add(serrure);
        this.SERRURE = serrure;
        this.estOuverte = false;
    }
    
    /**
     * Permet d'ouvrir la porte
     * @return true si la porte a été ouverte, false sinon
     */
    public boolean ouvre() {
        boolean aEteOuverte = false;
        if (this.SERRURE==null) { 
            this.estOuverte = true;
            aEteOuverte = true;
        }
        else {
            if (this.SERRURE.estOuverte()) {
                this.estOuverte = true;
                aEteOuverte = true;
            }
        }
        return aEteOuverte;
    }
    
    /**
     * Permet de fermer la porte
     * @return true si la porte a été fermée, false sinon
     */
    public boolean ferme() {
        boolean aEteFermee = false;
        if (this.SERRURE==null) { 
            this.estOuverte = false;
            aEteFermee = true;
        }
        else {
           if (this.SERRURE.estOuverte()) {
               this.estOuverte = false;
               aEteFermee = true;
           }
        }
        return aEteFermee;
    }
    
    /**
     * Permet de savoir si la porte est ouverte ou non
     * @return true si ouverte, false si fermée
     */
    public boolean estOuverte() {
        return this.estOuverte;
    }
    
    /**
     * Permet de savoir si la porte possède une serrure
     * @return true si la porte possède une serrure, false sinon
     */
    public boolean possedeUneSerrue() {
        return this.SERRURE != null;
    }
}