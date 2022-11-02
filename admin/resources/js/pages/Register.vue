<template>
    <div>
        <AuthLayout :title="title">
            <div class="py-6 container is-fluid">
                <div class="is-flex is-justify-content-center py-6-desktop">
                    <CommonForm :button="button" :is-loading="isLoading" @submit.native.prevent="registerHandler">
                        <div v-for="input in inputs" :key="input.name" class="column is-12">
                            <div class="label">{{ input.label }}</div>
                            <CommonInput :icon="input.icon"
                                         :placeholder="input.placeholder"
                                         :type="input.type"
                                         @input-change="value => { input.value = value }">
                                <span class="icon is-left">
                                    <i class="material-icons">{{ input.icon.left }}</i>
                                </span>
                                <div v-if=" errorMessage[input.name] " class="column is-12 ">
                                    <div class="has-text-danger is-size-6">{{ errorMessage[input.name].toString() }}</div>
                                </div>
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
import { showSuccessToast } from "../services/utils/showToast";
import { showErrorToast } from "../services/utils/showToast";

export default {
    name: "Register",
    components: {
        AuthLayout,
        CommonForm,
        CommonInput,
    },
    data() {
        return {
            title: '顧客登録',
            button: '登録',
            inputs: [
                {
                    label: 'メールアドレス',
                    name: 'email',
                    placeholder: 'メールアドレス',
                    icon: {left: 'email'},
                    type: 'text',
                    value: '',
                },
                {
                    label: 'パスワード',
                    name: 'password',
                    placeholder: 'パスワード',
                    icon: {left: 'lock'},
                    type: 'password',
                    value: '',
                },
                {
                    label: '電話番号',
                    name: 'phone',
                    placeholder: 'パスワード',
                    icon: {left: 'phone'},
                    type: 'text',
                    value:'',
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
            register: 'auth/register'
        }),
        registerHandler: async function () {
            this.errorMessage = {}
            this.isLoading = true;
            try {
                const res = await this.register(this.formData);
                this.isLoading = false;
                showSuccessToast(res.data.data);

                return this.$router.push({name: 'login'});
            } catch(error) {
                this.handleError(error);
                this.isLoading = false;
            }
        },
        handleError(error){
            status = error.response.status;
            if (status == 422) {
                this.errorMessage = error.response.data.errors;
            } else {
                showErrorToast(error.response.data.message);
            }
        }
    },
}
</script>
