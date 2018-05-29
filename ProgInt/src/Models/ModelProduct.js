export default Backbone.Model.extend({
    /*initialize: function (attrs, option) {
        console.log(this.toJSON());
        this.on("add remove change", function () {
            console.log("Modification in element: ");
            console.log(this.toJSON());
        })
    },*/
    defaults: {
        name: '',
        brand: '',
        price: 0,
        type: ''
    },
    validate: function (attrs, options) {
        if (!_.isString(attrs.type) || attrs.type.trim() == '' || !attrs.type.trim() == 'keyboard' || !attrs.type.trim() == 'mouse' || !attrs.type.trim() == 'headset') {
            return "Type invalide";
        }
        if (!_.isNumber(attrs.price) || !attrs.price > 0) {
            return "Prix invalide";
        }
    }
});