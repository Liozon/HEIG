import tmplDefault from "Templates/cart.html";

export default Backbone.View.extend({
    events: {
        "click .remove-from-cart": "act_removeFromCart"
    },
    act_removeFromCart: function (evt) {
        // Récupère le produit
        let product = $(evt.target).attr('data-id');
        let model = this.collection.get(product);
        // Supprime le produit
        model.destroy();
    },
    initialize: function (attrs, options) {
        this.template = tmplDefault;
        this.listenTo(this.collection, "change add remove", this.render);
    },
    render: function () {
        this.$el.html(this.template({
            cartProducts: this.collection.toJSON(),
            total: this.collection.getCartTotal()
        }));
        return this.$el;
    }
});