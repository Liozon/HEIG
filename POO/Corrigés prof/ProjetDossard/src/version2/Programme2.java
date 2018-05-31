package version2;

public class Programme2 {
    public static void main(String[] args) {
        Dossard dossard2 = Dossard.creeDossard(2);
        Dossard dossard1 = new Dossard();
        System.out.println(dossard2.rendNumero());
        System.out.println(dossard1.rendNumero());
        Dossard autreDossard2 = Dossard.creeDossard(2); // ne crée pas le dossard puisqu'il existe déjà
        System.out.println(autreDossard2); // => null
        Dossard dossard3 = new Dossard();
        System.out.println(dossard3.rendNumero());
        Dossard dossard5 = Dossard.creeDossard(5);
        Dossard dossard4 = Dossard.creeDossard(4);
        Dossard unDossard = new Dossard();
        System.out.println(dossard4.rendNumero());
        System.out.println(dossard5.rendNumero());
        System.out.println(unDossard.rendNumero());
    }
}
