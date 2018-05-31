package Teleski;

public class Personne {

    public final double POIDS_EN_KG;

    public Personne(double poidsEnKg) {
        if (poidsEnKg <= 0) {
            throw new RuntimeException("Il faut un poids en kg !");
        }
        this.POIDS_EN_KG = poidsEnKg;

    }

}
