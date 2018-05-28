import {LocalStorage} from 'backbone.localstorage';

export default Backbone.Model.extend({
    initialize: function (attrs, option) {
        console.log(this.toJSON());
        this.on("add remove change", function () {
            console.log("Modification in element: ");
            console.log(this.toJSON());
        })
    },
    defaults: {
        nom: "",
        prenom: "",
        note: 1
    },
    localStorage: new LocalStorage("Eleve"),
    validate: function (attrs, options) {
        if (!_.isString(attrs.nom) || !attrs.nom) {
            return "nom invalide";
        }
        if (!_.isString(attrs.prenom) || !attrs.prenom) {
            return "prénom invalide";
        }
        if (!_.isNumber(attrs.note) || !attrs.note > 1 && !attrs.note < 6) {
            return "note invalide";
        }
        console.log('Validated: ');
        console.log(this.toJSON());
    }
});