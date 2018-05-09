import Backbone from "Backbone";
import ModelItem from "Models/Item";
import ModelMenu from "Models/Menu";
import ViewItem from "Views/Item";
import ViewMenu from "Views/Menu";
import tmplItem from "Templates/Item.html";
import tmplItemFirst from "Templates/ItemFirst.html";

var menu = new ModelMenu;
var vMenu = new ViewMenu;
console.log(menu.attributes);

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
    model: m2
});

$(function () { // attendre que le DOM soit OK
    v1.render().appendTo("#articles");
    v2.render().appendTo("#articles");
    vMenu.render().appendTo("#mainNav");
    setTimeout(function () {
        m1.set({
            title: "test!!"
        });
        m2.set({
            title: "nouveau test!!"
        });
        menu.addEntry({label: 'Admin', url: '#admin'});
    }, 2000);
})