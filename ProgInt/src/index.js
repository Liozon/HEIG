import Backbone from "Backbone";
import ModelItems from "Models/Items";
import ViewItems from "Views/Items";

var items = new ModelItems();

$(function () {
    let viewItems = new ViewItems({collection: items});
    viewItems.render().appendTo("#articles");    
})