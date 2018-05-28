//import Master from "Models/Master";

export default Backbone.Model.extend({    
    defaults: function () {
       return {
            "foo":  "bar",
            "createAt": $.now()
        }
    },
    validate: function(attrs, options) {
        if (!_.isString(attrs.title) || attrs.title == "") {
            //return "Error title invalid";
        }
    }
});
