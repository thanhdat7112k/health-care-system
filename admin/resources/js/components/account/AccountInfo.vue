<template>
    <div>
        <div class="title-home">
            <HomeTitle
                :title="title"
                :title-color="'black'"
                :is-bold="true"
            />
        </div>
        <form action="" class="px-6 ml-6" @submit.prevent="update">
            <div class="mt-3">
                <div class="form-group">
                    <Input
                        class="name"
                        name="name"
                        label= "Name"
                        placeholder="Name"
                        :value.sync="account.name"
                        :error="error('name')"
                    />
                    <Input
                        class="email"
                        name="email"
                        label= "Email"
                        placeholder="Email"
                        :value.sync="account.email"
                        :error="error('email')"
                    />
                    <Input
                        class="phone"
                        name="phone"
                        label= "Phone"
                        placeholder="Phone"
                        :value.sync="account.phone"
                        :error="error('phone')"
                    />
                    <Input
                        class="birthday"
                        name="birthday"
                        label= "Birthday"
                        placeholder="Birthday"
                        :value.sync="account.birthday"
                        type="date"
                        :date="date"
                        :error="error('birthday')"
                    />
                </div>
            </div>
            <div class="mt-2 ">
                <div class="form-radio">
                    <Radios 
                        name="birthday"
                        label="Male"
                        type="radio"
                        value="1"
                        :updateValue.sync="account.gender"
                    />
                    <Radios 
                        name="birthday"
                        label="Female"
                        type="radio"
                        value="0"
                        :updateValue.sync="account.gender"
                    />
                    <Radios 
                        name="birthday"
                        label="Diff"
                        type="radio"
                        value="2"
                        :updateValue.sync="account.gender"
                    />
                </div>
                <div v-if=" errorMessage['gender'] " class="mb-3">
                    <div class="has-text-danger is-size-6">{{ errorMessage['gender'].toString() }}</div>
                </div>
            </div>
            <div>
                <button type="submit" class="button is-primary" :class="{'is-loading': isLoading}">Save</button>
            </div>
        </form>
    </div>
</template>

<script>
import Input from "../atoms/input/CommonInput.vue";
import Radios from "../atoms/radio/CommonRadios.vue";
import HomeTitle from "../home/home-components/Title.vue";
import { mapActions, mapState } from 'vuex';
import { showErrorToast, showSuccessToast } from "../../services/utils/showToast";
import getDateNow from "../../services/utils/getDateNow";
import errorMessages from "../../services/utils/errorMessage";
import { HTTP_CODE } from '../../config/constants';

export default {
    name: "AccountInfo",
    components: {
        Input,
        Radios,
        HomeTitle,
    },
    data() {
        return {
            title: "Account Info",
            errorMessage : '',
            isLoading: false,
            date: getDateNow(),
        };
    },
    computed: {
        formData() {
            let formData = {}
            formData['name'] = this.account.name;
            formData['email'] = this.account.email;
            formData['phone'] = this.account.phone;
            formData['birthday'] = this.account.birthday;
            formData['gender'] = this.account.gender;

            return formData;
        },
        ...mapState({
            account: state => state.auth.user
        }),
    },
    mounted() {
        this.getAccountInfo();
    },
    methods: {
        ...mapActions({
            updateAccountInfo: 'auth/updateAccountInfo',
            getAccountInfo: 'auth/getAccountInfo'
        }),
        error(name){
            return errorMessages(this.errorMessage, name);
        },
        update: async function () {
            this.errorMessage = {};
            this.isLoading= true;
            try {
                const res = await this.updateAccountInfo(this.formData);
                this.isLoading = false;
                showSuccessToast(res.data.data);
            } catch (error) {
                this.handleError(error);
                this.isLoading = false;
            }
        },
        handleError: async function (error) {
            status = error.response.status;
            if (status == HTTP_CODE.UNPROCESSABLE_ENTITY) {
                this.errorMessage = error.response.data.errors;
            } else {
                showErrorToast(error.response.data.message);
            }
        }
    }
};
</script>

<style lang="scss" scoped>
.has-text-centered {
    margin: 0 !important;
    text-align: left !important;
    padding: 0 !important;
}
.title-home {
    border-bottom: 1px solid #aeaeae;
}
.form-radio {
    display: inline-flex
}
</style>
