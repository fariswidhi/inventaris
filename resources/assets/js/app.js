
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
Vue.use(VueRouter);
Vue.use(VueAxios,axios);

// import '../css/admin/css/sb-admin.css';
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);


import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import route from './routes.js';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import App from './components/Head.vue';


const router = new VueRouter(
	{ 	
		base: '/',
		mode:'history',
		routes:route
	}
	);

new Vue(Vue.util.extend({ router },App)).$mount('#app');
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
