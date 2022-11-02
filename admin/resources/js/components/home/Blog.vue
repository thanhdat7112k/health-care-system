<template>
    <div class="bs-bg-white py-6">
        <div class="container is-max-desktop">
            <HomeTitle :description="description" :description-color="'gray'" :is-bold="true"
                       :title="title" :title-color="'yellow'"/>
            <FilterBar :current-filter="categoryFilter" :filters="blogCategories"
                       @change-filter="updateCategoryFilter"/>
            <HomeCarousel v-if="getBlogs && getBlogs.length > 0"
                          :items="getBlogs" :section-class="'blog-card'"/>
        </div>
    </div>
</template>

<script>
import HomeTitle from "./home-components/Title";
import FilterBar from "./home-components/FilterBar";
import HomeCarousel from "./home-components/Carousel";
import {mapActions, mapState, mapGetters} from "vuex";

export default {
    name: "Blog",
    components: {
        HomeTitle,
        FilterBar,
        HomeCarousel,
    },
    data() {
        return {
            title: 'Blog',
            description: '詳細な記事でヘアケア情報をもっと見る',
            categoryFilter: '',
        }
    },
    computed: {
        ...mapState({
            blogCategories: state => state.categoryBlog.blogCategories,
        }),
        ...mapGetters({
            getBlogs: 'blogs/getBlogs',
        })
    },
    methods: {
        ...mapActions({
            getBlogCategories: 'categoryBlog/getBlogCategories',
            getBlogsByCategoryId: 'blogs/getBlogsByCategoryId'
        }),
        updateCategoryFilter(id) {
            this.updateBlogs(id);
        },
        updateBlogs(id) {
            this.categoryFilter = id;
            this.getBlogsByCategoryId(id);
        }
    },
    async created() {
        await this.getBlogCategories();
        if (this.blogCategories.length > 0) {
            this.updateBlogs(this.blogCategories[0].id);
        }
    }
}
</script>
