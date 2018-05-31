package ch.comem;

import java.util.Collections;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Set;

/**
 * Permet de simuler un gestionnaire de notes pour différentes matières.
 * Toutes les notes ont le même poids
 * @author Jean-Pierre Hess
 */
public class GestionnaireNotes {

    private HashMap<String, HashSet<Double>> map;

    /**
     * Crée un gestionnaire (vide)
     */
    public GestionnaireNotes() {
        this.map = new HashMap<>();
    }

    private HashSet<Double> rendNotesDe(String matiere) {
        HashSet<Double> notes = null;
        if (matiere != null) {
            if (this.map.containsKey(matiere)) {
                notes = this.map.get(matiere);
            } else {
                notes = new HashSet<>();
                this.map.put(matiere, notes);
            }
        }
        return notes;
    }

    /**
     * Permet d'ajouter une note à une matière
     * @param matiere La matière à laquelle on veut ajouter la note
     * @param note La note à ajouter
     * @return true si la note a été ajoutée, false sinon
     */
    public boolean ajoute(String matiere, double note) {
        boolean aEteAjoutee = false;
        if (matiere != null && note >= 1 && note <= 6) {
            HashSet<Double> notes = this.rendNotesDe(matiere);
            notes.add(note);
            aEteAjoutee = true;
        }
        return aEteAjoutee;
    }

    /**
     * Affiche toutes les matières du gestionnaire
     */
    public void afficheMatieres() {
        Set<String> matieres = this.map.keySet();
        if (matieres != null) {
            for (String matiere : matieres) {
                System.out.println(matiere);
            }
        }
    }

    /**
     * Permet de connaître les matières du gestionnaire
     * @return L'ensemble des matières
     */
    public Set<String> rendMatieres() {
        return Collections.unmodifiableSet(this.map.keySet());
    }

    /**
     * Rend la moyene de la matière spécifiée
     * @param matiere La matière dont on veut la moyenne
     * @return La moyenne des notes de cette matière
     */
    public double rendMoyenne(String matiere) {
        double moyenne = Double.NaN;
        if (matiere != null) {
            HashSet<Double> notes = this.rendNotesDe(matiere);
            if (notes.isEmpty()) {
                moyenne = 0;
            } else {
                double somme = 0;
                for (double note : notes) {
                    somme += note;
                }
                moyenne = somme / notes.size();
            }
        }
        return moyenne;
    }

    /**
     * Rend les notes de la matière spécifiée
     * @param matiere La matière dont on veut les notes
     * @return L'ensemble des notes
     */
    public Set<Double> rendNotes(String matiere) {
        HashSet<Double> notes = null;
        if (matiere != null) {
            if (this.map.containsKey(matiere)) {
                notes = this.map.get(matiere);
            }
        }
        return Collections.unmodifiableSet(notes);
    }
}
