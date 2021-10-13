

require('./bootstrap');

import Vue from 'vue'
// window.Vue = require('vue').default;
// window.bus = new Vue()


import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './App.vue';

import Meeting from './components/Meeting';
import Join from './components/Join';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const routes = [
  {
    path: '/zoom-call-user',
    name: 'join',
    component: Join
  },
  {
    path: '/meeting',
    name: 'meeting',
    component: Meeting
  }
];

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');