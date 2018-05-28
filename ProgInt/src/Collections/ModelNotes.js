import ModelNote from "Models/ModelNote";
import {LocalStorage} from 'backbone.localstorage';

export default Backbone.Collection.extend({
    initialize: function (attrs, option) {
        console.log(this.toJSON());
        this.on("add remove change", function () {
            console.log(this.toJSON());
        })
    },
    model: ModelNote,
     comparator: function (model){
        return -model.get("note")   
    },
    url: "https://chabloz.eu/ws/api/v1/tasks/",
    localStorage: new LocalStorage("StorageStudent")
});