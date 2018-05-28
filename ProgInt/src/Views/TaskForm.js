import tmplDefault from "Templates/TaskForm.html";

export default Backbone.View.extend({    
    events: {
        'click button': 'act_add'
    },
    act_add: function (evt) {
        let inputTask = this.$el.find(".inputTask");
        let inputDate = this.$el.find(".inputDate");
        let task = inputTask.val();        
        let time = Math.round((new Date(inputDate.val())) / 1000);
        this.collection.create({task, time});  
        inputTask.val('');
        inputDate.val('');
        inputTask.focus();
    },
    initialize: function(attrs, options) {        
        this.template =  tmplDefault;        
    },
    render: function() {      
        this.$el.html(this.template());
        return this.$el; 
    }
});