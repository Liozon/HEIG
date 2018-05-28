export default Backbone.Model.extend({

    initialize: function (attrs, options) {

    },

    defaults: function () {
        return {
            "createdAt": $.now()
        }
    },
});