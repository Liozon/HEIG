import tmplDefault from "Templates/Items.html";
import "Styles/Item.css";

export default Backbone.View.extend({

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