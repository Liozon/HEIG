import Item from "Models/Task";

export default Backbone.Collection.extend({
    model: Item,
    url: "https://chabloz.eu/ws/api/v1/tasks"
});