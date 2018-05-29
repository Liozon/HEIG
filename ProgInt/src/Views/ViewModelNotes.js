import tmplDefault from "Templates/ModelNote.html";
//import "Styles/Item.css";

export default Backbone.View.extend({
    events: {
        "click .btn_delete": "act_delete",
        "click .btn_modifier": "act_modify",
        "click .btn_comparer": "act_compare",
        //"click .btn_validate": "act_validate",
    },
    act_delete: function (evt) {
        console.log("Supprimer");
        let id = $(evt.target).attr('eleve-action-id');
        //console.log(id);
        let model = this.collection.get(id);
        //console.log(model);
        model.destroy();

    },
    act_modify: function (evt) {
        console.log("Modifier");
        let id = $(evt.target).attr('eleve-action-id');
        let model = this.collection.get(id);
        this.$el.find(".editable[eleve-action-id='" + id + "']").attr("contenteditable", "")[0].focus();
        this.$el.find(".btn_modifier[eleve-action-id='" + id + "']").text("Valider").addClass("btn_validate").removeClass("btn_modifier");
    },
    act_compare: function (evt) {
        let id = $(evt.target).attr('eleve-action-id');
        let note = this.collection.get(id);
        let moyenne = this.collection.getAverage();
        alert(note.get("note") - moyenne);

    },
    /*act_validate: function (evt) {
        evt.preventDefault();
        let id = $(evt.target).attr('eleve-action-id');
        let model = this.collection.get(id);
        
        let inputPrenom = this.$el.find(".prenom[eleve-action-id='" + id + "']");
        
        let inputNom = this.$el.find(".nom[eleve-action-id='" + id + "']");
        let inputNote = this.$el.find(".note[eleve-action-id='" + id + "']");
        
        let nom = inputNom.val();
        let prenom = inputPrenom.val();
        let note = parseFloat(inputNote.val());
        
        
        this.model.set({nom, prenom, note});
        this.model.save();
        
        this.$el.find(".btn_validate[eleve-action-id='" + id + "']").text("Modifier").addClass("btn_modifier").removeClass("btn_validate");
        this.$el.find(".editable[eleve-action-id='" + id + "']").removeAttr("contenteditable", "");
    },*/
    initialize: function (attrs, options) {
        this.template = attrs.template || tmplDefault;
        this.listenTo(this.collection, "change add remove", this.render);
    },
    render: function () {
        this.$el.html(this.template({
            eleves: this.collection.toJSON(),
            moyenne: this.collection.getAverage()
        }));
        return this.$el;
    }
});