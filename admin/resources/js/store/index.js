import Vue from 'vue';
import Vuex from 'vuex';
import auth from './modules/auth';
import menu from './modules/menu';
import category from './modules/category';
import blogs from './modules/blogs';
import categoryBlog from './modules/categoryBlog';
import reservation from './modules/reservation';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {},
    getters: {},
    mutations: {},
    actions: {},
    modules: {
        auth,
        menu,
        category,
        blogs,
        categoryBlog,
        reservation
    },
});
