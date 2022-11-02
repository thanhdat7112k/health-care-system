require('./bootstrap');

import Vue from 'vue'
import App from './App.vue';
import store from './store';
import router from './router';
import VueLogger from 'vuejs-logger';
import { VUE_LOGGER_CONFIG } from './config/constants';

Vue.use(VueLogger, VUE_LOGGER_CONFIG);

new Vue({
    render: h => h(App),
    store,
    router
}).$mount('#app');
