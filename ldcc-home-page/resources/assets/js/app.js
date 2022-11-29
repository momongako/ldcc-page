require('./bootstrap');
//window.VeeValidate = require("vee-validate");
import Vue from 'vue'
import VueRouter from 'vue-router'

// Plugins
import GlobalComponents from './globalComponents'
import GlobalDirectives from './globalDirectives'
import Notifications from './components/UIComponents/NotificationPlugin'
import SideBar from './components/UIComponents/SidebarPlugin'
import ChildrenCategory from './components/Dashboard/Views/ChildrenComponent'
import App from './App.vue'

// router setup
import routes from './routes/routes'

// library imports
import Chartist from 'chartist'
import 'bootstrap/dist/css/bootstrap.css'
import './assets/sass/paper-dashboard.scss'
import './style_all.css'
import 'es6-promise/auto'
import loading from 'vuejs-loading-screen'



// plugin setup
Vue.use(VueRouter)
Vue.use(GlobalComponents)
Vue.use(GlobalDirectives)
Vue.use(Notifications)
Vue.use(SideBar)
Vue.use(loading, {
  bg: 'rgba(255,0,0,0)',
  icon: 'fa fa-spinner',
  size: 5,
  icon_color: '#6AB04C',
})

    //Vue.use(VeeValidate);
    // configure router
const router = new VueRouter({
    routes, // short for routes: routes
    linkActiveClass: 'active'
})

// global library setup
Object.defineProperty(Vue.prototype, '$Chartist', {
    get() {
        return this.$root.Chartist
    }
})
const PROVINCES = [

];
Vue.component("children-category", ChildrenCategory);

Vue.mixin({
        data: function() {
            return {
                listProvinces: PROVINCES
            }
        }
    })
    /* eslint-disable no-new */
new Vue({
    el: '#app',
    render: h => h(App),
    router,
    data: {
        Chartist: Chartist
    }
});
