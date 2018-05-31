package ch.comem.jukebox;

/**
 *
 * @author Julien Muggli
 */
public class Lecteur {

    // Variables
    private boolean ouvert; // Si tiroir est ouvert ou non
    private boolean cd; // Si contient CD ou non
    private boolean play; // Si en train de lire un CD ou non
    private boolean power; // Si jukebox est éteint ou non

    // Constructeur du lecteur CD
    public Lecteur(boolean ouvert, boolean play, boolean cd) {
        this.ouvert = ouvert;
        this.play = play;
        this.cd = cd;
        power = false;
    }

    // Rend la variable ouvert
    public boolean rendOuvert() {
        return this.ouvert;
    }

    // Rend la variable cd
    public boolean rendCd() {
        return this.cd;
    }

    // Rend la variable play
    public boolean rendPlay() {
        return this.play;
    }

    // Rend la variable power
    public boolean rendPower() {
        return this.power;
    }
}
