import ModelNote from "Models/ModelNote";
import {LocalStorage} from 'backbone.localstorage';

export default Backbone.Collection.extend({
    model: ModelNote,
    localStorage: new LocalStorage('StorageStudent'),
    initialize: function (attrs, option) {
        console.log(this.toJSON());
        this.on("add remove change", function () {
            console.log(this.toJSON());
        })
    },
    comparator: function (model) {
        return -model.get("note")
    }    
});