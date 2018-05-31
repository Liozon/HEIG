package ch.comem.jukebox;

/**
 *
 * @author Julien Muggli
 */
public class Lecteur {

    private boolean ouvert; // Si tiroir est ouvert ou non
    private boolean cd; // Si contient CD ou non
    private boolean play; // Si en train de lire un CD ou non
    private boolean power; // Si jukebox est éteint ou non

    public Lecteur(boolean ouvert, boolean play, boolean cd) {
        this.ouvert = ouvert;
        this.play = play;
        this.cd = cd;
    }

    public boolean rendOuvert() {
        return this.ouvert;
    }

    public boolean rendCd() {
        return this.cd;
    }

    public boolean rendPlay() {
        return this.play;
    }

    public boolean rendPower() {
        return this.power;
    }
}