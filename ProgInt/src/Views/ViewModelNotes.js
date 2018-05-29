import tmplDefault from "Templates/ModelNote.html";
//import "Styles/Item.css";

export default Backbone.View.extend({
    events: {
        "click .btn_delete": "act_delete",
        "click .btn_modifier": "act_modify",
        "click .btn_comparer": "act_compare"
    },
    act_delete: function (event) {
        console.log("Supprimer");
        let id = $(event.target).attr('eleve-action-id');
        //console.log(id);
        let model = this.collection.get(id);
        //console.log(model);
        model.destroy();

    },
    act_modify: function (evt) {
        console.log("Modifier");
        let id = $(evt.target).attr('data-id');
            //let note = this. 

    },
    act_compare: function (event) {
        console.log("Comparer");

    },
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