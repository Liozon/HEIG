import Task from "Models/Task";
import localStorage from 'backbone.localstorage';

export default Backbone.Collection.extend({
    model: Task,
    url: "https://chabloz.eu/ws/api/v1/tasks",
    localStorage: new localStorage('storageTask')
});