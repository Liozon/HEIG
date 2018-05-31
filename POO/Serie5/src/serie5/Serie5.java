package Serie5;

/**
 * ap 2011
 * @author Chabloz Nicolas
 */
public class Serie5 {

    public static void main(String[] args) {
        Association assoc = new Association("Le Livre Pour Tous");
        // crée quelques membres de test
        Membre membre1 = new Membre("membre1@example.com", "Dupond", "Jean");
        Membre membre2 = new Membre("membre2@example.com", "Dupont", "Pierre");
        Membre membre3 = new MembreComite("membre3@example.com", "Zorg", "Jean Batiste Emanuel", "Président");
        Membre membre4 = new MembreComite("membre4@example.com", "Chabloz", "Nicolas", "Secretaire");

        // ajoute quelques livre de test pour ces trois membres
        membre1.getLivres().add(new Livre("l'Histoire sans Fin", "Mikhaël Ende", "bon"));
        membre1.getLivres().add(new Livre("Je Suis un Chat", "Natzumi Sozeko", "comme neuf"));
        membre2.getLivres().add(new Livre("Les Cavernes d'Acier", "Isaac Asimov", "mauvais"));
        // cet ajout échoue car le membre possède déjà ce livre (même si la
        // qualité change car on ne test que le titre et l'auteur)
        membre2.getLivres().add(new Livre("Les Cavernes d'Acier", "Isaac Asimov", "bon"));
        membre3.getLivres().add(new Livre("Le Bateau Fabuleux", "Philip José Farmer", "comme neuf"));
        // ajoute des membres dans l'association
        assoc.getMembres().add(membre1);
        assoc.getMembres().add(membre2);
        assoc.getMembres().add(membre3);
        assoc.getMembres().add(membre4);
        // Affiche le tout
        System.out.println(assoc);
        // Affiche uniquement les membres du comité (trié par ordre alphabétique)
        System.out.println("*** Membres du comité ***");
        System.out.println(assoc.getMembres().getListeMembresComite());
        // Le premier membre va essayé de prendre un livre introuvable (échoue)
        assoc.obtenirUnLivre("membre1@example.com", "Les Derniers Hommes", "Pierre Bordage");
        // le deuxième essaye d'obtenir un livre qui existe (réussite)
        assoc.obtenirUnLivre("membre2@example.com", "l'histoire sans fin", "mikhaël ende");
        // il essaye d'en obtenir un deuxième (échoue car plus assez de points)
        assoc.obtenirUnLivre("membre2@example.com", "Le bateau Fabuleux", "Philip José Farmer");
        // ré-affiche le tout pour voir les changements
        System.out.println(assoc);
       
    }
}
