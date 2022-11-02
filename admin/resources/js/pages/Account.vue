<template>
    <div class="bs-bg-white py-6" id="main-account">
        <div class="container">
            <div class="columns">
                <div class="column is-3 column-sidebar">
                    <SidebarAccount />
                </div>
                <div class="column is-7 has-background-white form-control">
                    <router-view />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SidebarAccount from "../components/account/SidebarAccount.vue";
import AccountInfo from "../components/account/AccountInfo.vue";

export default {
    components: {
        SidebarAccount,
        AccountInfo
    }
}
</script>

<style lang="scss" scoped>
.form-control {
    padding: 25px;
    box-shadow: 1px 1px 3px #AAA;
    border-radius: 3px;
}
.column-sidebar {
    padding-left: 60px;
}
#main-account {
    min-height: calc(100vh - 170px - 80px);
}
</style>
