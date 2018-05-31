package Teleski;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public abstract class SystemeRemontePente {

    private final byte NB_PERSONNE_MAX;
    private final ArrayList<Personne> personnesTirees;

    public SystemeRemontePente(byte nbPersonneMax) {
        if (nbPersonneMax < 1) {
            throw new RuntimeException("Il faut au moins 1 personne");
        }
        this.NB_PERSONNE_MAX = nbPersonneMax;
        this.personnesTirees = new ArrayList<>(NB_PERSONNE_MAX);
    }

    public boolean ajoute(Personne p) {
        boolean aEteAjoute = false;
        if (p != null && this.personnesTirees.size() < this.NB_PERSONNE_MAX) {
            aEteAjoute = this.personnesTirees.add(p);

        }
        return aEteAjoute;
    }

    public List<Personne> rendListePersonne() {
        return Collections.unmodifiableList(personnesTirees);
    }
}
