package ch.comem;

public class ProgrammeAutoRadio {
    public static void main(String[] args) {
        String[] plages = { "Speak To Me / Breathe",
                            "On The Run",
                            "Time",
                            "The Great Gig In The Sky",
                            "Money",
                            "Us & Them",
                            "Any Color You Like",
                            "Brain Damage",
                            "Eclipse"};
        CD cd1 = new CD("Pink Floyd","Dark Side Of The Moon",plages);
        CD cd2 = new CD("AC-DC","High-Voltage",null);
        AutoRadio radio1 = new AutoRadio();
        radio1.play();
        radio1.ajouteCD(cd1);
        radio1.play();
        radio1.eject();
        radio1.ajouteCD(cd1);
        radio1.play();
        radio1.eject();
        radio1.ajouteCD(cd2);
        AutoRadio radio2 = new AutoRadio();
        radio2.eject();
        radio2.ajouteCD(cd2);
    }
}