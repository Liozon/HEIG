import tmplDefault from "Templates/Items.html";
import "Styles/Item.css";

export default Backbone.View.extend({       
    events: {
        "click .btn_delete": "act_delete",  
        "click .btn_add": "act_add", 
    },    
    act_add: function (evt) {
        let task = this.$el.find(".input_title").val();        
        let body = this.$el.find(".input_body").val();
        let success = this.collection.create({task});        
    },
    act_delete: function (evt) {
        let ind = $(evt.target).attr("data-index");
        let model = this.collection.at(ind);
        model.destroy();        
    },
    initialize: function(attrs, options) {
        this.$el.addClass('items');
        this.template =  attrs.template || tmplDefault;
        this.listenTo(this.collection, "change add remove", this.render);     
    },
    render: function() {      
        this.$el.html(this.template({
            items: this.collection.toJSON(),            
        }));
        return this.$el; 
    }
});