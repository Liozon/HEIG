import tmplDefault from "Templates/ModelNote.html";
//import "Styles/Item.css";

export default Backbone.View.extend({
    events: {
        "click .btn_delete" : "act_delete"
    },
    act_delete: function (event) {
        console.log("deletebutton");
    },
    initialize: function (attrs, options) {
        this.template = attrs.template || tmplDefault;
        this.listenTo(this.collection, "change add remove", this.render);
    },
    render: function () {
        this.$el.html(this.template({
            eleves: this.collection.toJSON()
        }));
        return this.$el;
    }
});