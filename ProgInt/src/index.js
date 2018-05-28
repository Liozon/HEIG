import Backbone from "backbone";
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import ViewTaskForm from "Views/TaskForm"
import ViewTaskList from "Views/TaskList"
import CollectionTask from "Models/Tasks"

let tasks = new CollectionTask();

$(function () {       
    let viewTaskForm = new ViewTaskForm({
        collection: tasks
    });
    viewTaskForm.render().appendTo("#taskForm");
    
    let viewTaskList = new ViewTaskList({
        collection: tasks
    });
    viewTaskList.render().appendTo("#taskList");
    tasks.fetch();
})