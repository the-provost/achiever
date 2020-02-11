/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
Vue.use(VueRouter);
import VueRouter from 'vue-router';
window.Vue = require('vue');

require('./bootstrap');

// import { OverlayScrollbarsPlugin } from 'overlayscrollbars-vue';
// Vue.use(OverlayScrollbarsPlugin);

// import { OverlayScrollbarsComponent } from 'overlayscrollbars-vue';

import VueProgressBar from 'vue-progressbar';
const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
  }

  Vue.use(VueProgressBar, options);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
const routes = [
{path:'/home', meta:{ title: 'Dashboard'}, component:require('./components/Dashboard.vue').default},
{path:'/vision', meta:{ title: 'Vision Board'}, component:require('./components/Vision.vue').default},
{path:'/calendar', meta:{ title: 'Calendar'}, component:require('./components/Calendar.vue').default},
{path:'/listgoals', meta:{ title: 'The List'}, component:require('./components/ListGoals.vue').default},
{path:'/statusboard', meta:{ title: 'Planner-Tracker'}, component:require('./components/KanbanPlanner.vue').default},
{path:'/longtermgoals', meta:{ title: 'Long-Term Goals'}, component:require('./components/LongTermGoals.vue').default},
{path:'/shorttermgoals', meta:{ title: 'Short-Term Goals'}, component:require('./components/ShortTermGoals.vue').default},
{path:'/myjourney', meta:{ title: 'Journey'}, component:require('./components/AchievedGoals.vue').default},
{path:'/', component:require('./components/ExampleComponent.vue').default}
// Vue.component('user-dashboard', require('./components/dashboard.vue').default)
]

// Vue.component('overlay-scrollbars', OverlayScrollbarsComponent).default;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    mode: 'history',
    routes, // short for `routes: routes`
    linkActiveClass: 'active'
  });

const app = new Vue({
    el: '#app',
    // render: h => h(app),
    router
});


