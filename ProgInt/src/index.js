import Backbone from "Backbone";
import ModelItem from "./Models/Item";
var m1 = new ModelItem({
    title: "Ceci est un titre"
});
var now = jQuery.now();
while (now === jQuery.now());
var m2 = new ModelItem({
    foo: "Ceci est un titre"
});
console.log(m1.toJSON());
console.log(m2.toJSON());