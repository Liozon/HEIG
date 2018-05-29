import tmplDefault from "Templates/products.html";

export default Backbone.View.extend({
    events: {
        "click .add-to-cart": "act_addToCart"
    },
    act_addToCart: function (evt) {
        // Récupère le produit
        let product = $(evt.target).attr('data-id');
        let model = this.collection.get(product);
        // Clone l'élément
        let toCart = model.clone();
        // Supprime l'attribut 'id'
        toCart.unset('id');
        // Enregistre le produit dans le localstorage du panier
        this.cart.create({
            name: toCart.get('name'),
            brand: toCart.get('brand'),
            type: toCart.get('type'),
            price: toCart.get('price')
        });
    },
    initialize: function (attrs, options) {
        this.template = tmplDefault;
        this.cart = attrs.cart;
        this.listenTo(this.collection, "change add remove", this.render);
    },
    render: function () {
        this.$el.html(this.template({
            shopProducts: this.collection.toJSON(),
        }));
        return this.$el;
    }
});