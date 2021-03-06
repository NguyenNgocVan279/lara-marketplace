require('./bootstrap');

//import vue
import Vue from 'vue';
import axios from 'axios';

window.Vue = require('vue');
window.axios = require('axios');

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

//register component
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('image-preview', require('./components/imagepreview/FeatureImage.vue').default);
Vue.component('first-image', require('./components/imagepreview/FirstImage.vue').default);
Vue.component('second-image', require('./components/imagepreview/SecondImage.vue').default);
Vue.component('third-image', require('./components/imagepreview/ThirdImage.vue').default);
Vue.component('forth-image', require('./components/imagepreview/ForthImage.vue').default);

Vue.component('category-dropdown', require('./components/CategoryDropDown.vue').default);

Vue.component('address-dropdown', require('./components/AddressDropDown.vue').default);
Vue.component('message', require('./components/Message.vue').default);
Vue.component('conversation', require('./components/Conversation.vue').default);
Vue.component('show-phone-number', require('./components/ShowPhoneNumber.vue').default);
Vue.component('save-ad', require('./components/SaveAd.vue').default);

//initialize vue
const app = new Vue({
    
    el: '#app',

});

