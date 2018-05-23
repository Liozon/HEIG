import Backbone from "Backbone";
import ModelItem from "Models/Item";
//import ViewTasks from "Views/Tasks";

var item1 = new ModelItem({
    title: "item 1"
});

var item2 = new ModelItem({
    title: "item 2"
});


console.log(item1.toJSON());
console.log(item2.toJSON());