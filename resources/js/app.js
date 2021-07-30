
require('./bootstrap');
window.Vue = require('vue').default;
import router from './router';
import App from './App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import CoreuiVue from '@coreui/vue';
import Navbar from './components/containers/Navbar.vue';
import Tables from './components/containers/Tables.vue';
import SideBar from './components/containers/SideBar.vue';
import { iconsSet as icons } from './assets/icons/icons.js';

Vue.use(VueAxios, axios);
Vue.use(CoreuiVue);
Vue.component('Navbar', Navbar);
Vue.component('Tables', Tables);
Vue.component('SideBar', SideBar);
const app = new Vue({
    router,
    icons,
    el: '#app',
    render: h => h(App)
});

