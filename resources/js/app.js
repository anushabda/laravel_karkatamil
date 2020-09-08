import Vue from 'vue';
import router from './router'; // The routes are imported from the file router.js whis was created to store routes 


require('./bootstrap');
window.axios=require('axios');

//window.Vue = require('vue');

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import App from './components/user/App';




const app = new Vue({
    el: '#app',
    components:{
        App
    },
    router
});
