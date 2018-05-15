import tmplDefault from "Templates/Items.html";
import "Styles/Item.css";

export default Backbone.View.extend({
    
    events: {
        "click .btn_delete": "act_infoUser",
        "click .btn_add": "act_addTitle"
    },
    act_infoUser: function (evt) {
        console.log("btn delete");
        let ind = $(evt.target).attr("data-index");
        let model = this.collection.at(ind);
        model.destroy();
        
    },
    
    act_addTitle: function (evt) {
        console.log("btn add");
        
        let ind = $(evt.target).attr("data-index");
        let model = this.collection.at(ind);
        
    },

  initialize: function(attrs, options) {
    this.template =  attrs.template || tmplDefault;
    this.listenTo(this.collection, "change add remove", this.render);     
  },

  render: function() {      
      this.$el.html(this.template({
          items: this.collection.toJSON()
      }));
      return this.$el; 
  }

});