/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import Header from './sections/Header.vue';
import Footer from './sections/Footer.vue';
import HomeLayout from './layouts/HomeLayout.vue';
import LoginLayout from './layouts/LoginLayout.vue';

Vue.use(VueRouter);

Vue.component('khranit-header', Header);
Vue.component('khranit-footer', Footer);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
const routes = [
    { path: '/', component: HomeLayout, },
    { path: '/login', component: LoginLayout}
];
const router = new VueRouter({ routes , mode: 'history', });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router: router,
});
