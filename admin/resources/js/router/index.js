import Vue from 'vue';
import VueRouter from 'vue-router';
import storage from '../storage/storage';
import authRouter from './auth';
import Home from '../pages/Home.vue';
import accountRouter from './account';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    ...authRouter,
    ...accountRouter
];

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes,
    scrollBehavior() {
        return {x: 0, y: 0, behavior: 'smooth'}
    }
});

router.beforeEach((to, from, next) => {
    const isAuthenticated = !!storage.getAccessToken();
    if (to.meta.auth === true && !isAuthenticated) {
        next({name: 'login'});
    } else {
        next();
    }

    if ((to.name === 'login' || to.name === 'register' || to.name === 'actions') && isAuthenticated) {
        next({ name: 'home' });
    } else {
        next();
    }
})

export default router;
