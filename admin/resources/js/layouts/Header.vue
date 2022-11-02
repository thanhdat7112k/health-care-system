<template>
    <div id="header" class="py-4 container is-fluid bs-bg-white">
        <div class="is-flex is-justify-content-space-between is-align-items-center">
            <div>
                <router-link :to="{ name: 'home' }">
                    <img class="px-3 is-size-2-touch is-size-1" src="/images/logo/logo.png" width="100%" alt="">
                </router-link>
            </div>
            <div class="is-flex is-flex-direction-row-reverse is-align-items-center">
                <div class="pl-4 is-flex is-justify-content-center is-align-items-center">
                    <router-link :to="{ name: 'accountInfo' }">
                        <span class="is-size-2 bs-text-light-gray">
                            <i class="fas fa-bars"></i>
                        </span>
                    </router-link>
                </div>
                <div class="px-4 is-hidden-mobile">
                    <router-link v-if="!isAuthenticated" :to="{ name: 'actions' }" class="">
                        <button class="button is-light bs-btn bs-bg-yellow has-text-white bs-px-5-5">
                            ご予約
                        </button>
                    </router-link>
                    <div v-if="isAuthenticated" @click="logout">
                        <button class="button is-light bs-btn bs-bg-light-gray has-text-white bs-px-5-5">
                            ログアウト
                        </button>
                    </div>
                </div>
                <div class="pr-4 is-hidden-touch is-flex is-align-items-center is-justify-content-center">
                    <div class="mr-3 bs-text-dark-gray">
                        <i class="material-icons bs-is-size-2-5">phone</i>
                    </div>
                    <div class="bs-text-dark-gray bs-text-shadow-gray">
                        <div class="is-size-3">03-0000-0000</div>
                        <small class="is-size-7">受付時間：10:00 ~ 19:00（平日・土祝)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {mapActions, mapMutations, mapState} from 'vuex';

export default {
    name: "Header",
    computed: mapState({
        isAuthenticated: state => state.auth.isAuthenticated,
    }),
    methods: {
        ...mapMutations({
            'updateAuth': 'auth/updateAuth'
        }),
        ...mapActions({
            'logout': 'auth/logout'
        }),
    },
    created() {
        this.updateAuth();
    },
}
</script>
