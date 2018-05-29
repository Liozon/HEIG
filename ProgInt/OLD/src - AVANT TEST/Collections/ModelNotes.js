import ModelNote from "Models/ModelNote";
import {
    LocalStorage
} from 'backbone.localstorage';

export default Backbone.Collection.extend({
    model: ModelNote,
    localStorage: new LocalStorage('CollectionEleves'),
    //initialize: function (attrs, option) {

        //console.log(this.toJSON());
        // this.localStorage = new LocalStorage('notes_' + attrs.storageName)
        //this.localStorage = new LocalStorage('eleves')
        /*this.on("add remove change", function () {
            console.log(this.toJSON());
        })*/
   // },
    comparator: function (model) {
        return -model.get("note")
    },
    getAverage: function () {
        let somme = 0;
        let moyenne = 0;
        this.each(function (eleve) {
            somme += eleve.get("note");
        });
        if (this.length > 0) {
            moyenne = somme / this.length;
        }
        return moyenne;
    }
});