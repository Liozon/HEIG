export default Backbone.Model.extend({
    initialize: function (attrs, options) {
        this.on("change", function () {
            console.log(this.toJSON());            
        }) 
    }   
});
