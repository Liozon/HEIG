package Serie5;

/**
 *
 * @author Chabloz Nicolas
 */
public class MembreComite extends Membre {
    private String fonction;

    public MembreComite(String email, String nom, String prenom, String fonction) {
        super(email, nom, prenom);
        this.fonction = fonction;
    }

    @Override
    public String toString() {
        return "(" + fonction + ") " + super.toString() ;
    }
                
}