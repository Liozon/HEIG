import Backbone from "Backbone";
import ModelItem from "./Models/Item";
var m1 = new ModelItem({
    title: "Ceçi est un titre"
});
var m2 = new ModelItem({
    title: "Ceçi est un titre 2"
});
m2.set({title: "truc3"});
m2.set({title: "truc5"});
m2.set({title: "super truc6789"});

m1.set({title: "truc"});
m1.set({title: "truc2"});
m1.set({title: "super truc"});
