import handleError from "../../../services/infs/handlError";
import blogService from "../../../services/domains/blogService";

const state = {
    blogs: [],
}

const getters = {
    getBlogs(state) {
        return state.blogs.map(blog => {
            blog.name = blog.title;
            blog.description = blog.content;

            return blog;
        })
    }
}

const mutations = {
    setBlogs(state, blogs) {
        state.blogs = blogs;
    }
}

const actions = {
    async getBlogsByCategoryId({commit}, id) {
        try {
            const response = await blogService.getBlogsByCategoryId(id);
            const blogs = response.data.data;
            commit('setBlogs', blogs);
        } catch(error) {
            handleError(error);
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
