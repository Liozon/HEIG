import Backbone from "Backbone";
import ModelItem from "./Models/Item";
import ViewItem from "./Views/Item";
import ViewItem from "./Templates/Item.html";

//var m1 = new ModelItem({
//    title: "Ceci est un titre"
//});
//var m2 = new ModelItem({
//    title: "Ceci est un 2e titre"
//});

// 1e cours

//m2.set({title: "truc3"});
//m2.set({title: "truc5"});
//m2.set({title: "super truc6789"});

//m1.set({title: "truc"});
//m1.set({title: "truc2"});
//m1.set({title: "super truc"});

// 2e cours

var v1 = new ViewItem({model: m1});
$(function () { //Attendre que le DOM soit prêt
    var dom = v1.render();
    dom.appendTo("body");
})

v1.render();
m1.set({title: "nouveau titre!"});