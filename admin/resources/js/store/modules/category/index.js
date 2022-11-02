import categoryService from "../../../services/domains/recommendationService";
import handleError from "../../../services/infs/handlError";

const state = {
    normalCategories: [],
    comboCategories: [],
}

const getters = {}

const mutations = {
    setNormalCategories(state, normalCategories) {
        state.normalCategories = normalCategories;
    },
    setComboCategories(state, comboCategories) {
        state.comboCategories = comboCategories;
    }
}

const actions = {
    async getNormalCategories({commit}) {
        try {
            const res = await categoryService.getNormalCategories();
            const normalCategories = res.data.data;
            commit('setNormalCategories', normalCategories);
        } catch (error) {
            handleError(error.response)
            throw(error);
        }
    },
    async getComboCategories({commit}) {
        try {
            const res = await categoryService.getComboCategories();
            const comboCategories = res.data.data;
            commit('setComboCategories', comboCategories);
        } catch (error) {
            handleError(error.response)
            throw(error);
        }
    },
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
}
