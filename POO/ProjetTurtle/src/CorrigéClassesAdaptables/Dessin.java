package CorrigéClassesAdaptables;

import ch.comem.turtle.Point2Dim;
import java.util.Collections;
import java.util.HashMap;
import java.util.Map;

class Dessin {
    
    private final HashMap<Forme,Point2Dim> FORMES;
    
    
    public Dessin() {
        this.FORMES = new HashMap<>();
    }
    
    public boolean ajoute(Forme forme, Point2Dim position) {
        boolean aEteAjoute = false;
        if (forme != null) {
            this.FORMES.put(forme,position);
            
        }
        return aEteAjoute;
    }
    
    public Map<Forme, Point2Dim> rendMap() {
        return Collections.unmodifiableMap(FORMES);
    }
    
    @Override
    public String toString() {
      return "Je suis un dessin avec " + this.FORMES.size() + " formes";  
    }
    
}
