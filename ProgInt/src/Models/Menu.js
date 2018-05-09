export default Backbone.Model.extend({
    defaults: { //Pas besoin de fonction car on a rien de dynamique, que du statique       
        entries: [
            {
                label: "Accueil",
                url: "#accueil"

                }, {
                label: "Contact",
                url: "#contact"
                }, {
                label: "Info",
                url: "#info"
                }
        ]
    },
    addEntry: function (entry) {
        this.get("entries").push(entry);
        this.trigger("change");
    }
});