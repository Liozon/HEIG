import tmplDefault from "Templates/FormulaireNote.html";
//import "Styles/Item.css";

export default Backbone.View.extend({
    events: {
        "submit form": "save_note"
    },
    save_note: function (evt) {
        evt.preventDefault();
        let inputPrenom = this.$el.find(".input_prenom");
        let inputNom = this.$el.find(".input_nom");
        let inputNote = this.$el.find(".input_note");
        //console.log(inputPrenom.val() + " " + inputNom.val() + " " + inputNote.val()); //OK
        let nom = inputNom.val();
        let prenom = inputPrenom.val();
        let note = parseFloat(inputNote.val());
        this.collection.create({
            nom: nom,
            prenom: prenom,
            note: note
        });
        this.$el.find('form')[0].reset(); // OU, voir lignes suivantes
        //inputPrenom.val('');
        //inputNom.val('');
        //inputNote.val('');
        this.$el.find(".input_prenom").focus();        
    },
    initialize: function (attrs, options) {
        this.template = tmplDefault;
    },
    render: function () {
        this.$el.html(this.template());
        return this.$el;
    }
});