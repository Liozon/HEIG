import Task from "Models/Task";

export default Backbone.Collection.extend({
    model: Task,
    url: "https://chabloz.eu/ws/api/v1/tasks"
});