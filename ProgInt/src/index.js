import Backbone from "Backbone";
import ModelItems from "Models/Items";
import ViewItems from "Views/Items";

var items = new ModelItems();

items.add([
  {title: "Flying Dutchman"},
  {title: "Black Pearl"}
]);

$(function () {
    let viewItems = new ViewItems({collection: items});
    viewItems.render().appendTo("#articles");
    setTimeout(function () {
        items.at(0).set({title: 'nouveau titre'});
    }, 2000); 
    setTimeout(function () {
        items.add({title: 'nouveau titre article'});
    }, 4000); 
})