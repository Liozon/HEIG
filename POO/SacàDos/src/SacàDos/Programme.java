package SacàDos;

public class Programme {

    public static void main(String[] args) {
        Sac sac = new Sac();
        sac.ajoute(new Salami());
        sac.ajoute(new CouteauSuisse());
        sac.ajoute(new Labello());
        System.out.println(sac);
    }

}
