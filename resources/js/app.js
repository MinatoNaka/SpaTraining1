import VueRouter from 'vue-router';
import BookListComponent from "./components/BookListComponent";

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'book.list',
            component: BookListComponent
        },
    ]
});

const app = new Vue({
    router
}).$mount('#app');
