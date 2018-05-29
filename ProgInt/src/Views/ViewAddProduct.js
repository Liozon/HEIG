import tmplDefault from "Templates/addProduct.html";

export default Backbone.View.extend({
    events: {
        "submit form" : "act_addProduct"
    },
    act_addProduct: function (evt) {
        evt.preventDefault();
        // Récupère les valeurs des champs
        let inputProductName = this.$el.find(".input_productName");
        let inputBrand = this.$el.find(".input_brand");
        let inputType = this.$el.find(".input_type");
        let inputPrice = this.$el.find(".input_price");
        // Récupère que les valeurs des champs
        let name = inputProductName.val();
        let brand = inputBrand.val();
        let type = inputType.val();
        let price = parseFloat(inputPrice.val());
        // Enregistrer le produit
        this.collection.create({name, brand, type, price});
        this.$el.find('form')[0].reset();
        this.$el.find(".input_productName").focus(); 
    },
    initialize: function (attrs, options) {
        this.template = tmplDefault;
    },
    render: function () {
        this.$el.html(this.template());
        return this.$el;
    }
});