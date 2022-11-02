<template>
    <div>
        <AuthLayout :title="title">
            <div class="py-6 container is-fluid">
                <div class="is-flex is-justify-content-center py-6-desktop">
                    <CommonForm :button="title" :is-loading="isLoading" @submit.native.prevent="loginHandler">
                        <div v-if="errorMessage" class="column is-12 has-text-centered">
                            <div class="has-text-danger is-size-6" v-text="errorMessage"></div>
                        </div>
                        <div v-for="input in inputs" :key="input.name" class="column is-12">
                            <CommonInput :icon="input.icon"
                                         :placeholder="input.placeholder"
                                         :type="input.type"
                                         @input-change="value => { input.value = value }">
                                <span class="icon is-left">
                                    <i class="material-icons">{{ input.icon.left }}</i>
                                </span>
                            </CommonInput>
                        </div>
                    </CommonForm>
                </div>
            </div>
        </AuthLayout>
    </div>
</template>

<script>
import AuthLayout from "../components/auth/AuthLayout";
import CommonForm from "../components/auth/CommonForm";
import CommonInput from "../components/atoms/input/CommonInputIcon";
import { mapActions } from 'vuex';
import { MESSAGE_LOGIN_ERROR } from '../config/messages';

export default {
    name: "Login",
    components: {
        AuthLayout,
        CommonForm,
        CommonInput,
    },
    data() {
        return {
            title: 'ログイン',
            inputs: [
                {
                    name: 'username',
                    placeholder: 'メールアドレス',
                    icon: {left: 'email'},
                    type: 'text',
                    value: '',
                },
                {
                    name: 'password',
                    placeholder: 'パスワード',
                    icon: {left: 'lock'},
                    type: 'password',
                    value: '',
                }
            ],
            isLoading: false,
            errorMessage: '',
        }
    },
    computed: {
        formData() {
            let formData = {}
            this.inputs.forEach(input => {
                formData = {...formData, [input.name]: input.value};
            })

            return formData;
        }
    },
    methods: {
        ...mapActions({
            login: 'auth/login'
        }),
        loginHandler: async function () {
            this.isLoading = true;
            try {
                await this.login(this.formData);
                this.isLoading = false;

                return this.$router.push({name: 'home'});
            } catch (error) {
                this.isLoading = false;
                this.errorMessage = MESSAGE_LOGIN_ERROR;
            }
        },
    },
}
</script>
