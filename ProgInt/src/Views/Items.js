import tmplDefault from "Templates/Items.html";
import "Styles/Item.css";

export default Backbone.View.extend({

    events: {
        "click .btn_delete": "act_delete",
        "click .btn_add": "act_add"
    },
    act_add: function (evt) {
        //console.log("btn add");
        let title = this.$el.find(".input_title").val();
        let body = this.$el.find(".input_body").val();
        //console.log(title, body);
        let success = this.collection.add({
                title,
                body
            }, {
                validate: true})
        };
        //let ind = $(evt.target).attr("data-index");
        //let model = this.collection.at(ind);

    },

    act_delete: function (evt) {
        console.log("btn delete");
        let ind = $(evt.target).attr("data-index");
        let model = this.collection.at(ind);
        model.destroy();

    },

    initialize: function (attrs, options) {
        this.$el.addClass('items');
        this.template = attrs.template || tmplDefault;
        this.listenTo(this.collection, "change add remove", this.render);
    },

    render: function () {
        this.$el.html(this.template({
            items: this.collection.toJSON()
        }));
        return this.$el;
    }

});