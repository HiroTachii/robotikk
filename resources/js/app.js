/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Router = require('vue-router').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
import Framework from "./components/Framework";
import Navigation from "./components/Navigation";
import Sidebar from "./components/Sidebar";
import Home from "./components/Home";
import About from "./components/About";

Vue.component('about', About);
Vue.component('framework', Framework);
Vue.component('navigation', Navigation);
Vue.component('sidebar', Sidebar);
Vue.component('home', Home);
//const files = require.context('./', true, /\.vue$/i)
//files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(Router);

const router = new Router({
    routes: [
        { path: '/', component: Home, name: 'us.home', alias: '/us/home' },
        { path: '/us/about', component: About, name: 'us.about' },
        { path: '/apis/league', component: About, name: 'apis.league' },
        { path: '/platform/login', component: About, name: 'platform.login' },
        { path: '/platform/register', component: About, name: 'platform.register' }
    ]
});

const VueApp = new Vue({
    el: '#app',
    router: router
});
