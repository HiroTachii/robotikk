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
import Framework from "./components/blocks/Framework";
import Navigation from "./components/blocks/Navigation";
import Sidebar from "./components/blocks/Sidebar";
import Home from "./components/pages/Home";
import About from "./components/pages/About";
import Title from "./components/blocks/Title";
import Login from "./components/pages/Login";
import Register from "./components/pages/Register";

Vue.component('main-title', Title);
Vue.component('about', About);
Vue.component('framework', Framework);
Vue.component('navigation', Navigation);
Vue.component('sidebar', Sidebar);
Vue.component('home', Home);
Vue.component('login', Login);
Vue.component('register', Register);
//const files = require.context('./', true, /\.vue$/i)
//files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(Router);

const router = new Router({
    routes: [
        { path: '/', component: Home, name: 'us.home', alias: '/us/home' },
        { path: '/us/about', component: About, name: 'us.about' },
        { path: '/apis/league', component: About, name: 'apis.league' },
        { path: '/platform/login', component: Login, name: 'platform.login' },
        { path: '/platform/register', component: Register, name: 'platform.register' }
    ]
});

window.VueApp = new Vue({
    el: '#app',
    router: router
});
