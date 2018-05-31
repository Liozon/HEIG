package ch.comem.tortue;

/**
 *
 * @author Julien Muggli
 */
public class Tortue {
    private String nom;
    
    public Tortue(String nom) {
        if (nom == null)
            throw new RuntimeException("il faut un nom");
        this.nom = nom;
    }
    
    public String rendNom() {
        return this.nom;
    }
    
    public void mange(Salade uneSalade) {
        if (uneSalade == null) {
            System.out.println("Je préfère les salades");
        } else {
            System.out.println("Miam, délicieux");
        }
    }
}
