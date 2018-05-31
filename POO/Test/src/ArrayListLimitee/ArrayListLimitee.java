/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ArrayListLimitee;

import java.util.ArrayList;

/**
 *
 * @author Julien Muggli
 */
public class ArrayListLimitee extends ArrayList<String> {
    
    private int limite;

    public ArrayListLimitee(int limite) {
        super();
        this.limite = limite;
    }

    @Override
    public boolean add(String donnee) {
        if (size() < this.limite) {
             add(donnee);
        }
        return true;
    }
}
