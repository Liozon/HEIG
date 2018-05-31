package Teleski;

import java.util.ArrayList;
import java.util.List;

public class Teleski {

    private final ArrayList<SystemeRemontePente> TELESKI;

    public Teleski() {
        this.TELESKI = new ArrayList<>();
    }

    @Override
    public String toString() {
        StringBuilder chaine = new StringBuilder();
        chaine.append("Je suis un téleski avec: ");
        chaine.append(this.TELESKI.size());
        chaine.append(" ");
        if (this.TELESKI.isEmpty()) {
            chaine.append(" système de remonte pente");
        } else {
            chaine.append(this.TELESKI.get(0).getClass().getSimpleName().toLowerCase());
            if (this.TELESKI.size() > 1) {
                chaine.append("s");
            }
        }
        chaine.append("\n");
        chaine.append("Qui tracte: ");
        double total = 0;
        for (SystemeRemontePente srp : this.TELESKI) {
            List<Personne> listePersonne = srp.rendListePersonne();
            for ( Personne p : listePersonne) {
                total += p.POIDS_EN_KG;
            }
        }
        chaine.append(total);
        chaine.append(" kg ");
        if (total >= 1000) {
            chaine.append(" Rrrr Rrrr Rrrr!!");
        } else {
            chaine.append(" Fssssssssssssssss");
        }
        return chaine.toString();
    }

    public boolean ajoute(SystemeRemontePente unSysteme) {
        boolean aEteAjoute = false;
        if (unSysteme != null) {
            if (this.TELESKI.isEmpty()) {
                aEteAjoute = this.TELESKI.add(unSysteme);
            } else if (this.TELESKI.get(0).getClass().equals(unSysteme.getClass())) { // getClass rend soit Arbalette soir Assiette
                aEteAjoute = this.TELESKI.add(unSysteme);
            }
        }
        return aEteAjoute;
    }
}
