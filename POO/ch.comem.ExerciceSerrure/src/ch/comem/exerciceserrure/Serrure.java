package ch.comem.exerciceserrure;

import java.util.ArrayList;

/**
 *
 * @author Julien Muggli
 */
    
public class Serrure {
    
    private int ID;
    private boolean estOuvert;
    
    public Serrure(int ID) {
        ID = this.ID;
        estOuvert = false;
    }
    
    public int rendID() {
        return this.ID;
    }
}
