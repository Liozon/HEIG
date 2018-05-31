package TestArrayList;

import java.util.ArrayList;

/**
 *
 * @author Julien Muggli
 */
public class Remove1Element {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        ArrayList<String> list = new ArrayList<String>();
        list.add("Joe");
        list.add("Avrell");
        list.add("Jack");
        list.add("Joe");
        list.add("Joe");

        System.out.println(list);
        System.out.println("Maintenant je supprime les Joe en trop");

        // boucle for standard, un peu galère à écrire
//        for (int i = 0; i < list.size(); i++) {
//            if (list.contains("Joe")) {
//                list.remove("Joe");
//            }
//        }
        // boucle for each, beaucoup plus rapide à écrire
        while (list.contains("Joe")) {
            list.remove("Joe");
        }

        System.out.println(list);
    }
}
