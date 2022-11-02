import storage from "../../../storage/storage";
import authService from "../../../services/domains/authService";
import handleError from "../../../services/infs/handlError";

const state = {
    isAuthenticated: false,
    user: {}
}

const getters = {

}

const mutations = {
    setLoginMessage(state, message) {
        state.message.login = message;
    },
    updateAuth(state) {
        state.isAuthenticated = !!storage.getAccessToken();
    },
    updateAuthUser(state, data) {
        state.user = data;
    },
}

const actions = {
    async login({commit}, formData) {
        try {
            const res = await authService.login(formData);
            storage.setAccessToken(res.data.access_token);
            return commit('updateAuth');
        } catch (error) {
            handleError(error.response)
            throw(error);
        }
    },
    async register({commit}, formData) {
        try {
            const res = await authService.register(formData);
            return res;
        } catch(error){
            handleError(error.response)
            throw(error);
        }
    },
    async updateAccountInfo({commit}, formData) {
        try {
            const res = await authService.updateAccountInfo(formData);
            return res;
        } catch(error){
            handleError(error.response)
            throw(error);
        }
    },
    async getAccountInfo({commit}, formData) {
        try {
            const res = await authService.getAccountInfo(formData);
            return commit('updateAuthUser', res.data);
        } catch(error){
            handleError(error.response)
            throw(error);
        }
    },
    logout({commit}) {
        storage.deleteAccessToken();
        commit('updateAuth');
    }
}
export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
}
