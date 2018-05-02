export default Backbone.Model.extend({
    defaults: function () {
        return {
            "foo": "bar",
            "createAt": $.now(),
        }
    },
    validate: function (attrs, options) {
        if (!_isString(attrs.title) || ) {
            return "Error title is invalid";
        }
    }
});