<template>
    <div>
        <AuthLayout :title="title">
            <div class="container py-6">
                <div class="is-flex is-justify-content-center is-flex-wrap-wrap py-6-desktop">
                    <ActionsBox v-for="boxData in boxDatas"
                                :key="boxData.action"
                                v-bind="boxData"
                                class="column mx-3 action-box"/>
                </div>
            </div>
        </AuthLayout>
    </div>
</template>

<script>
import AuthLayout from "../components/auth/AuthLayout";
import ActionsBox from "../components/auth/ActionsBox";

export default {
    name: "Actions",
    components: {
        ActionsBox,
        AuthLayout,
    },
    data() {
        return {
            title: 'ご予約',
            boxDatas: [
                {
                    boxAction: 'register',
                    boxTitle: '新規のお客様',
                    boxColor: 'pink',
                    boxLink: '新規登録ページへお進みください',
                    boxIcon: 'list_alt'
                },
                {
                    boxAction: 'login',
                    boxTitle: '登録済のお客様',
                    boxColor: 'yellow',
                    boxLink: 'ログインページへお進みください',
                    boxIcon: 'laptop'
                },
            ]
        }
    },
}
</script>

<style scoped>
    .action-box {
        max-width: 400px;
        min-width: 300px;
    }
</style>
