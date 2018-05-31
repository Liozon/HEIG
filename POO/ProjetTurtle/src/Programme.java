
import ch.comem.turtle.BigTurtle;

public class Programme {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        BigTurtle caroline = new BigTurtle();
        caroline.forward(200);
        caroline.turnRight(45);
        caroline.forward(200);
        caroline.turnRight(90);
        caroline.forward(200);
        caroline.turnRight(45);
        caroline.forward(200);
        caroline.turnRight(90);
        caroline.forward(282);
        caroline.penUp();
        caroline.backward(30);
        caroline.penDown();
        caroline.turnRight(90);
        caroline.forward(70);
        caroline.turnRight(90);
        caroline.forward(50);
        caroline.turnRight(90);
        caroline.forward(70);
        caroline.turnRight(90);
        caroline.penUp();
        caroline.forward(48);
        caroline.turnRight(90);
        caroline.forward(150);
        caroline.penDown();
        caroline.forward(30);
        caroline.turnRight(90);
        caroline.forward(30);
        caroline.turnRight(90);
        caroline.forward(30);
        caroline.turnRight(90);
        caroline.forward(30);
        caroline.penUp();
        caroline.turnRight(180);
        caroline.forward(180);
        caroline.penDown();
        caroline.forward(30);
        caroline.turnLeft(90);
        caroline.forward(30);
        caroline.turnLeft(90);
        caroline.forward(30);
        caroline.turnLeft(90);
        caroline.forward(30);
        caroline.penUp();
        caroline.forward(80);
        caroline.penDown();
        caroline.forward(30);
        caroline.turnLeft(90);
        caroline.forward(30);
        caroline.turnLeft(90);
        caroline.forward(30);
        caroline.turnLeft(90);
        caroline.forward(30);
        caroline.turnRight(90);
        caroline.penUp();
        caroline.forward(75);
        caroline.turnLeft(90);
        caroline.forward(70);
        caroline.turnRightRadius(0, 0);
        
        caroline.beep();
    }

}
