import tmplDefault from "Templates/TaskForm.html";

export default Backbone.View.extend({
    events: {
        'click button': 'act_add'
    },
    act_add: function (evt) {
        //console.log("Coucou");
        console.log($("#inputTask").val());
        var task = Backbone.Model.extend({
            urlRoot: 'Models/Tasks'
        });

        var newTask = new task({
            title: $("#inputTask").val(),
            time: $.now()
        });
        this.model.render();

        /*this.model.sync({
            task: $('#inputTask').val(),
            time: $.now()
        });
        this.model.save();*/
    },
    initialize: function (attrs, options) {
        this.template = tmplDefault;
    },
    render: function () {
        this.$el.html(this.template());
        return this.$el;
    }
});