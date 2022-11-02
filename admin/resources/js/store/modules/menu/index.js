import menuService from "../../../services/domains/menuService";
import handleError from "../../../services/infs/handlError";

const state = {
    normalMenus: [],
    comboMenus: [],
}

const getters = {}

const mutations = {
    setNormalMenus(state, menus) {
        state.normalMenus = menus;
    },
    setComboMenus(state, menus) {
        state.comboMenus = menus;
    }
}

const actions = {
    async getMenus({}, categoryId) {
        try {
            const res = await menuService.getMenusByCategoryId(categoryId);

            return res.data.data;
        } catch(error) {
            handleError(error.response)
            throw(error);
        }
    },
    async getNormalMenus({dispatch, commit}, categoryId) {
        const menus = await dispatch('getMenus', categoryId);
        commit('setNormalMenus', menus);
    },
    async getComboMenus({dispatch, commit}, categoryId) {
        const menus = await dispatch('getMenus', categoryId);
        commit('setComboMenus', menus);
    },
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
}
