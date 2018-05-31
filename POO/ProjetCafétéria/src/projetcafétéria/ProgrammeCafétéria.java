package projetcafétéria;

public class ProgrammeCafétéria {

    public static void main(String[] args) {
        BoiteAService bac1 = new BoiteAService();
        bac1.ajoute(new Cuillere());
        bac1.ajoute(new Couteau());
        Service unService = bac1.rendService();
        unService.utilise();
        unService = bac1.rendService();
        unService.utilise();
        PetiteCuillere pc1 = new PetiteCuillere();
        bac1.ajoute(pc1);
        
        bac1.rendService().utilise();
        
        
    }
    
}
