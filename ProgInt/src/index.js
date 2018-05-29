import Backbone from "backbone";
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

// Création des collections
//import ModelProduct from "Models/ModelProduct";
import CollectionProducts from "Collections/CollectionProducts";
import CollectionCart from "Collections/CollectionCart";

// Création des vues
import ViewAddProduct from "Views/ViewAddProduct";
import ViewProducts from "Views/ViewProducts";
import ViewCart from "Views/ViewCart";

//Création des collections
let shopProducts = new CollectionProducts();
let cartProducts = new CollectionCart();

shopProducts.fetch();
cartProducts.fetch();

$(function () {

    let viewAddProduct = new ViewAddProduct({
        collection: shopProducts
    });
    viewAddProduct.render().appendTo("#addProduct");

    let viewShop = new ViewProducts({
        collection: shopProducts,
        cart: cartProducts
    });
    viewShop.render().appendTo("#products");

    let viewCart = new ViewCart({
        collection: cartProducts
    });
    viewCart.render().appendTo("#cart");

})