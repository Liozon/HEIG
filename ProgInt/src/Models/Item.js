export default Backbone.Model.extend({

    initialize: function (attrs, options) {

    },

    defaults: function () {
        return {
            "createdAt": $.now()
        }
    },

    /*validate: function (attrs, options) {
        if (attrs.onLoan == ) {
            return "can't end before it starts";
        }
    }*/
});