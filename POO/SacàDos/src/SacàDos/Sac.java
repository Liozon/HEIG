package SacàDos;

import java.util.ArrayList;

public class Sac {

    private ArrayList<Object> objets = new ArrayList<>();

    public Sac() {
    }

    public void ajoute(Object objet) {
        objets.add(objet);
    }

    @Override
    public String toString() {
        return "Le sac contient les éléments suivants: " + "\n" + affichageListe();
    }

    public String affichageListe() {
        String listeObjets = "";
        for (int i = 0; i < objets.size(); i++) {
            Object get = objets.get(i);
            listeObjets += "- " + get.toString() + "\n";
        }
        return listeObjets;
    }
}
