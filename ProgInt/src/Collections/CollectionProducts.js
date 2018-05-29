import ModelProduct from "Models/ModelProduct";
import {
    LocalStorage
} from 'backbone.localstorage';

export default Backbone.Collection.extend({
    model: ModelProduct,
    localStorage: new LocalStorage('shopProducts'),
    comparator: function (model) {
        return -model.get("price")
    }
});