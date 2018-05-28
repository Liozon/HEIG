import Backbone from "backbone";
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
//import ModelNote from "Models/ModelNote";
import ViewFormNotes from "Views/ViewFormulaireNotes";
import ViewModelNotes from "Views/ViewModelNotes";
import ModelNotes from "Collections/ModelNotes";

/*import ViewTaskForm from "Views/TaskForm"
import ViewTaskList from "Views/TaskList"
import CollectionTask from "Models/Tasks"*/

/*let tasks = new CollectionTask();*/
let eleves = new ModelNotes();

$(function () {

    /*let m1 = new ModelNote();
    let m2 = new ModelNote();
    let m3 = new ModelNote();

    m1.set({
        nom: "Shams",
        prenom: "Safa",
        note: 1
    });
    m1.isValid();
    
    m2.set({
        nom: "Muggli",
        prenom: "Julien",
        note: 6
    });
    m2.isValid();
    
    m3.set({
        nom: "Cuttat",
        prenom: "Thibaut",
        note: 3
    });
    m3.isValid();

    eleves.add([m1, m2, m3]);*/
    
    let viewFormNotes = new ViewFormNotes({
        collection: eleves
    });
    viewFormNotes.render().appendTo("#FormNotes");
    
    let viewListeNotes = new ViewModelNotes({
        collection: eleves
    });
    viewListeNotes.render().appendTo("#listeNotes");
    eleves.fetch();
    


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