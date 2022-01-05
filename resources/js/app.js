/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue';
import VueToastr from 'vue-toastr';
import ViewUI from 'view-design';
import { Page } from 'view-design';


Vue.use(VueToastr);
Vue.use(ViewUI);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('add-to-cart-button', require('./components/AddToCart.vue').default);
Vue.component('add-to-wishlist-button', require('./components/AddToWishlist.vue').default);
Vue.component('cart', require('./components/Cart.vue').default);
Vue.component('wishlist', require('./components/Wishlist.vue').default);
Vue.component('cart-page', require('./components/Cartpage.vue').default);
Vue.component('wishlist-page', require('./components/Wishlistpage.vue').default);
Vue.component('checkout-page', require('./components/Checkout.vue').default);
Vue.component('products', require('./components/Products.vue').default);
Vue.component('products-view', require('./components/ProductsView.vue').default);
Vue.component('Page', Page);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
