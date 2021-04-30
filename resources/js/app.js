require('./bootstrap');

//import vue
import Vue from 'vue';
window.Vue = require('vue');
window.axios = require('axios');

/* window.Vue = require('vue');
window.axios = require('axios'); */

//register component
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//initialize vue
const app = new Vue({
    el: '#app',

});

