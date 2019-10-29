require('./bootstrap');

window.Vue = require('vue');

Vue.component('one-time-password', require('./components/OneTimePassword.vue').default);
Vue.component('param-column', require('./components/ParamColumn.vue').default);
Vue.component('inputs', require('./components/Inputs.vue').default);

const app = new Vue({
    el: '#app'
});
