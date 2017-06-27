
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.prototype.$http = axios;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.config.devtools = true;

Vue.component('card', require('./components/Card.vue'));

Vue.filter('cleanAttr', (value) => {
    if (value === null || value === 'undefined') return;
   return value.replace('_', ' ');
});

const app = new Vue({
    el: '#app',
    data: {
        very_satisfied: "very_satisfied",
        satisfied: "satisfied",
        not_satisfied: "not_satisfied",
    },
    methods: {
        navigate(ref) {
            console.log(ref);
            // alert('Ready to navigate');
        }
    }
});
