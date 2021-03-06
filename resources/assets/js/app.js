
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 import VueRouter from 'vue-router';
 Vue.use(VueRouter);

 let routes = [
   {
     path: '/', component: require('./components/Homepage.vue')
   },
   {
     path: '/listitems', component: require('./components/ListBarang.vue')
   },
   {
     path: '/add', component: require('./components/AddItems.vue')
   },
   {
     path: '/edit/:id', component: require('./components/EditItems.vue')
   }
 ];

 const router = new VueRouter({
   routes
 });

const app = new Vue({
  el: '#app',
  data: {
    url: app_url
  },
  router
});
