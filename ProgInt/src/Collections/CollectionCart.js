import ModelProduct from "Models/ModelProduct";
import {LocalStorage} from 'backbone.localstorage';

export default Backbone.Collection.extend({
    model: ModelProduct,
    localStorage: new LocalStorage('cartProducts'),
    comparator: function (model) {
        return -model.get("price")
    },
    getCartTotal: function () {
        let somme = 0;
        this.each(function (product) {
            somme += product.get("price");
        });
        return somme;
    }
});