require('./bootstrap');
require('./bulma');

window.Vue = require('vue');

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

import AnimatedVue from 'animated-vue';
Vue.use(AnimatedVue);

// Components
Vue.component('tasks-slots', require('./components/tasks/tasks-slot.vue'));
Vue.component('nav-bar', require('./components/navbar.vue'));


const norm = new Vue({
    el: '#norm'
});