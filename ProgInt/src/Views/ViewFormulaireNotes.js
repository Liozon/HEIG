import tmplDefault from "Templates/FormulaireNote.html";
//import "Styles/Item.css";

export default Backbone.View.extend({
    events: {
        "submit form": "save_note"
    },
    save_note: function (evt) {
        let inputPrenom = this.$el.find(".input_prenom");
        let inputNom = this.$el.find(".input_nom");
        let inputNote = this.$el.find(".input_note");
        //console.log(inputPrenom.val() + " " + inputNom.val() + " " + inputNote.val()); //OK
        let nom = inputNom.val();
        let prenom = inputPrenom.val();
        let note = inputNote.val();
        this.collection.create({nom, prenom, note});
        inputPrenom.val('');
        inputNom.val('');
        inputNote.val('');
        evt.preventDefault();
    },
    initialize: function (attrs, options) {
        this.template = tmplDefault;
    },
    render: function () {
        this.$el.html(this.template());
        return this.$el;
    }
});