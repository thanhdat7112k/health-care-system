import reservationService from "../../../services/domains/reservationService";
import handleError from "../../../services/infs/handlError";

const state = {
    scheduleOpen: [],
}

const getters = {}

const mutations = {
    setReservationOpen(state, schedules) {
        state.scheduleOpen = schedules;
    }
}

const actions = {
    async getReservationOpens({commit}) {
        try {
            const response = await reservationService.getReservationOpen();
            const schedules = response.data.data;
            commit('setReservationOpen', schedules);
        } catch (error) {
            handleError(error.response);
            throw(error);
        }
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
}
