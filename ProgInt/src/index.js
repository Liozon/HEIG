import Backbone from "Backbone";
import ModelItem from "./Models/Item";
import ViewItem from "./Views/Item";
import tmplItem from "./Templates/Item.html";
import tmplItemFirst from "./Templates/ItemFirst.html";


var m1 = new ModelItem({
    title: "Ceçi est un titre",
    body: "TRUC"
});
var m2 = new ModelItem({
    title: "Ceçi est un titre 2"
});

var v1 = new ViewItem({
    model: m1,
    template: tmplItemFirst
});
var v2 = new ViewItem({
    model: m2,
    template: tmplItem
});

$(function () { // attendre que le DOM soit OK
    v1.render().appendTo("body");
    v2.render().appendTo("body");
    setTimeout(function () {
        m1.set({title: "test!!"});
        m2.set({title: "nouveau test!!"});
    }, 2000);    
})