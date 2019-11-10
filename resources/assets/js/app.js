/**
 * Next, create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./bootstrap');

window.Vue = require('vue');

// import dependecies
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';

Vue.use(VueRouter, VueAxios, Axios);

// import file
import App from './components/App.vue';
import Create from './components/Create.vue';
import List from './components/List.vue';
import Update from './components/Update.vue';

// router
const routes = [
    {
        name: 'list',
        path: '/',
        component: List
    },
    {
        name: 'create',
        path: '/product',
        component: Create
    },
    {
        name: 'update',
        path: '/product/:id',
        component: Update
    }
]

const router = new VueRouter({ mode: 'history', routes: routes });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");