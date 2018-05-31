package ch.comem;

public class ProgrammeAutoRadio {
    public static void main(String[] args) {
        String[] plages = { "Speak To Me / Breathe",
                            "On The Run","Time",
                            "The Great Gig In The Sky",
                            "Money",
                            "Us & Them",
                            "Any Color You Like",
                            "Brain Damage",
                            "Eclipse"};
        CD cd1 = new CD("Pink Floyd","Dark Side Of The Moon",plages);
        System.out.println(cd1.rendTitre());
        System.out.println(cd1.rendArtiste());
//        System.out.println(cd1.rendPlages());
        cd1.affichePlages();
        
        AutoRadio radio = new AutoRadio();
        radio.play();
        radio.eject();
        radio.ajouteCD(cd1);
        radio.play();
        radio.eject();
        radio.enleveCD();
        radio.play();
    }
}