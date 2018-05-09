

export default Backbone.View.extend({
    
    initialize: function() {
        this.dom = 
        this.listenTo(this.model, "change", this.render);
        
    },
    
    render: function() {
        console.log(this.model.toJSON());
    }
})