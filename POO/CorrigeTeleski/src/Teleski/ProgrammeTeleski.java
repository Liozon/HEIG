package Teleski;

public class ProgrammeTeleski {

    public static void main(String[] args) {
        Personne p1 = new Personne(75.8);
        Personne p2 = new Personne(55);
        System.out.println(p1.POIDS_EN_KG);
        Assiette a1 = new Assiette();
        a1.ajoute(p1);
        a1.ajoute(p2);

        Arbalette arb1 = new Arbalette();
        arb1.ajoute(new Personne(100));
        arb1.ajoute(new Personne(60));
        arb1.ajoute(new Personne(70));

        System.out.println(arb1.rendListePersonne().get(0).POIDS_EN_KG);

        Teleski atlas = new Teleski();
        atlas.ajoute(arb1);
        atlas.ajoute(new Arbalette());
        atlas.ajoute(new Assiette());
        System.out.println(atlas);
        
        Telesiege ts1 = new Telesiege(4);
        ts1.ajoute(new Personne(50));
        ts1.ajoute(new Personne(110));
        ts1.ajoute(new Personne(110));
        ts1.ajoute(new Personne(70));
        ts1.ajoute(new Personne(50));
        Teleski atlas2 = new Teleski();
        atlas2.ajoute(ts1);
        System.out.println(atlas2);
        
        //SystemeRemontePente srp = new SystemeRemontePente((byte)2);
        
    }

}
