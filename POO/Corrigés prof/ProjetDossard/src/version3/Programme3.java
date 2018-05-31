package version3;

public class Programme3 {
    public static void main(String[] args) {
        Dossard dossard1 = Dossard.rendDossard();
        Dossard dossard2 = Dossard.rendDossard();
        System.out.println(dossard2.rendNumero());
        System.out.println(dossard1.rendNumero());
        Dossard autreDossard1 = Dossard.rendDossard(1); // le dossard1 existe déjà !
        System.out.println(autreDossard1); // => null
        // On rapporte le dossard1 
        dossard1 = Dossard.rapporteDossard(dossard1);
        System.out.println(dossard1); // => null, car il est à la fabrique ;-)
        // On aimerait avoir le dossard1
        dossard1 = Dossard.rendDossard(1);
        System.out.println(dossard1.rendNumero());
        // On rapporte le dossard2
        dossard2 = Dossard.rapporteDossard(dossard2);
        System.out.println(dossard2);
        // La fabrique peut redonner le dossard2
        Dossard unDossard = Dossard.rendDossard();
        System.out.println(unDossard.rendNumero());
    }
}
