export default Backbone.Model.extend({    
    defaults: {
        entries: [
            {
                label: "Accueil",
                url: "#accueil"
            }, {
                label: "Info",
                url: "#info"
            }, {
                label: "Contacts",
                url: "#contacts"
            }
        ]
    },
    addEntry: function (entry) {
        this.get("entries").push(entry);
        this.trigger("change");
    }
});
