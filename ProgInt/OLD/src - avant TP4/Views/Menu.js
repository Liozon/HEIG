import tmplDefault from "Templates/Menu.html";

export default Backbone.View.extend({

  initialize: function(attrs, options) {
    this.template =  attrs.template || tmplDefault;
    this.listenTo(this.model, "change", this.render);     
  },

  render: function() {                 
      this.$el.html(this.template(this.model.attributes));
      return this.$el; 
  }

});