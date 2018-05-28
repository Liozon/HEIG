import Backbone from "backbone";
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import ModelNote from "Models/ModelNote";
import ModelNotes from "Collections/ModelNotes";

/*import ViewTaskForm from "Views/TaskForm"
import ViewTaskList from "Views/TaskList"
import CollectionTask from "Models/Tasks"*/

/*let tasks = new CollectionTask();*/

let c1 = new ModelNotes();

$(function () {

    let m1 = new ModelNote();
    let m2 = new ModelNote();
    let m3 = new ModelNote();

    m1.set({
        nom: "M1",
        prenom: "M1",
        note: 1
    });
    m1.isValid();
    
    m2.set({
        nom: "M2",
        prenom: "M2",
        note: 6
    });
    m2.isValid();
    
    m3.set({
        nom: "M3",
        prenom: "M3",
        note: 3
    });
    m3.isValid();

    c1.add([m1, m2, m3]);


    /*
    console.log(m1.toJSON());
    console.log(m2.toJSON());
    console.log(m3.toJSON());
    
    console.log(m1.isValid());
    console.log(m2.isValid());
    console.log(m3.isValid());*/

    //    let viewTaskForm = new ViewTaskForm({
    //        collection: tasks
    //    });
    //    viewTaskForm.render().appendTo("#taskForm");
    //    
    //    let viewTaskList = new ViewTaskList({
    //        collection: tasks
    //    });
    //    viewTaskList.render().appendTo("#taskList");
    //    tasks.fetch();
})