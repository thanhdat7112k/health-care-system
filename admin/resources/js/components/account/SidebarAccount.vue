<template>
    <div>
        <p class="user-name">Tran Van A</p>
        <div>
            <router-link :to="{ name: '' }">
                <p class="is-touch py-3 bs-text-dark-gray">Account</p>
            </router-link>
            <div class="function-user">
                <div v-for="(account, index) in accounts" :key="index">
                    <router-link :to="{ name: account.namePath }">
                        <p class="is-touch py-2 " :class="[ account.namePath == changePath ? 'bs-text-pink' : 'bs-text-dark-gray' ]">{{ account.nameFun }}</p>
                    </router-link>
                </div>
            </div>
            <router-link :to="{ name: 'home' }">
                <p class="is-2-touch py-3 bs-text-dark-gray">Reservation</p>
            </router-link>
            <div class="function-user">
                <div v-for="(status, index) in reservation" :key="index">
                    <router-link :to="{ name: status.namePath }">
                        <p class="is-touch py-2" :class="[ status.namePath == changePath ? 'bs-text-pink' : 'bs-text-dark-gray' ]">{{ status.nameFun }}</p>
                    </router-link>
                </div>
            </div>
            <router-link :to="{ name: '' }">
                <p class="is-touch py-3 bs-text-dark-gray">Notification</p>
            </router-link>
            <router-link :to="{ name: '' }">
                <p class="is-touch py-3 bs-text-dark-gray">Sale</p>
            </router-link>
        </div>
    </div>
</template>

<script>
    import {RESERVATION, INFO_ACCOUNT} from '../../config/constants.js'

    export default {
        name: "SidebarAccount",
        data() {
            return {
                accounts: INFO_ACCOUNT,
                reservation: RESERVATION,
                path: this.$route.name,
            }
        },
        computed: {
            changePath(){
                this.path = this.$route.name
                
                return this.path
            }
        }
    }
</script>

<style lang="scss" scoped>
.function-user {
    padding: 0px 20px;
    border-left: 1px solid #AAA;
}
</style>
