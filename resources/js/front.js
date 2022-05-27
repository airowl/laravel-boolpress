window.Vue = require('vue');
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import VueRouter from 'vue-router';
import Vue from 'vue';
import App from './views/App';
import Home from './pages/Home';
import Posts from './pages/Posts';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
    ],
    linkExactActiveClass: 'active'
});

const app = new Vue({
    el: '#root',
    router,
    render: h => h(App)
});
