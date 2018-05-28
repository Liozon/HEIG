import tmplDefault from "Templates/TaskList.html";

export default Backbone.View.extend({    
    events: {
        'click button': 'act_delete'
    },
    act_delete: function (event) {  
        let taskId = $(event.target).attr('data-task-id');
        let model = this.collection.get(taskId);
        $('#modalConfirm').modal();
        $('#btnConfirmDelete').off();
        $('#btnConfirmDelete').one('click', () => {                        
            model.destroy();
        });
    },
    initialize: function(attrs, options) {        
        this.template =  tmplDefault;    
        this.listenTo(this.collection, "change add remove", this.render);     
    },
    render: function() {      
        this.$el.html(this.template({
            tasks: this.collection.toJSON()
        }));
        return this.$el; 
    }
});