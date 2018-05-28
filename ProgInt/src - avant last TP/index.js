import Backbone from "Backbone";
import ViewTaskForm from "Views/TaskForm";
import ViewTask from "Views/Tasks";
import ModelTask from "Models/Tasks";
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

var task = new ModelTask();

$(function() {
    let viewTask = new ViewTask({
        collection: task
    });
    viewTask.render().appendTo("#taskList");
    task.fetch();   
    
    
    let viewTaskForm = new ViewTaskForm();
    viewTaskForm.render().appendTo("#taskForm");
})