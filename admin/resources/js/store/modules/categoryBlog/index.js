import categoryBlogService from "../../../services/domains/categoryBlogService";
import handleError from "../../../services/infs/handlError";

const state = {
    blogCategories: [],
}

const getters = {}

const mutations = {
    setBlogCategories(state, categories) {
        state.blogCategories = categories;
    }
}

const actions = {
    async getBlogCategories({commit}) {
        try {
            const response = await categoryBlogService.getCategoryBlogs();
            const categories = response.data.data;
            commit('setBlogCategories', categories);
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
