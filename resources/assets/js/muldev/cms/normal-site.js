require('./bootstrap');
require('./bulma');

window.Vue = require('vue');

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

import AnimatedVue from 'animated-vue';
Vue.use(AnimatedVue);

// Packages found in node_modules
// Vue.component('paginate', require('vuejs-paginate'));
Vue.component('paginate', require('./components/paginate/Paginate'));

// Components
Vue.component('tasks-slots', require('./components/tasks/tasks-slot.vue'));
Vue.component('tasks-list', require('./components/tasks/task-list.vue'));
Vue.component('nav-bar', require('./components/navbar.vue'));

// Tasks Components
Vue.component('add-task', require('./components/tasks/Addtask.vue'));
Vue.component('delete-task', require('./components/tasks/Deletetask.vue'));
Vue.component('edit-task', require('./components/tasks/Edittask.vue'));
Vue.component('view-task', require('./components/tasks/Viewtask.vue'));




const norm = new Vue({
    el: '#norm'
});