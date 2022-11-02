<template>
    <div class="bs-bg-white py-6">
        <div class="container is-max-desktop">
            <HomeTitle :description="description" :description-color="'gray'"
                       :is-bold="true" :title="title" :title-color="'yellow'"/>
            <div class="py-4">
                <FilterBar :current-filter="comboFilter" :filters="comboCategories"
                           @change-filter="updateComboFilter"/>
                <HomeCarousel v-if="comboMenus && comboMenus.length > 0" :button-text="'今すぐ予約する'"
                              :items="comboMenus" :section-class="'service-card'"/>
            </div>
            <div class="py-4">
                <FilterBar :current-filter="normalFilter" :filters="normalCategories"
                           @change-filter="updateNormalFilter"/>
                <HomeCarousel v-if="normalMenus && normalMenus.length > 0" :button-text="'今すぐ予約する'"
                              :items="normalMenus" :section-class="'service-card'"/>
            </div>
        </div>
    </div>
</template>

<script>
import {mapActions, mapState} from "vuex";
import HomeTitle from "./home-components/Title";
import HomeCarousel from "./home-components/Carousel";
import FilterBar from "./home-components/FilterBar";

export default {
    name: "Service",
    components: {
        FilterBar,
        HomeTitle,
        HomeCarousel,
    },
    data() {
        return {
            title: 'Service',
            description: 'サービス',
            comboFilter: '',
            normalFilter: '',
        }
    },
    computed: {
        ...mapState('category', {
            comboCategories: 'comboCategories',
            normalCategories: 'normalCategories',
        }),
        ...mapState('menu', {
            comboMenus: 'comboMenus',
            normalMenus: 'normalMenus',
        })
    },
    methods: {
        ...mapActions({
            getComboCategories: 'category/getComboCategories',
            getNormalCategories: 'category/getNormalCategories',
            getComboMenus: 'menu/getComboMenus',
            getNormalMenus: 'menu/getNormalMenus'
        }),
        async updateComboFilter(id) {
            await this.updateComboMenus(id);
        },
        async updateNormalFilter(id) {
            await this.updateNormalMenus(id);
        },
        async updateComboMenus(categoryId) {
            this.comboFilter = categoryId;
            await this.getComboMenus(this.comboFilter);
        },
        async updateNormalMenus(categoryId) {
            this.normalFilter = categoryId;
            await this.getNormalMenus(this.normalFilter);
        },
    },
    async created() {
        await this.getComboCategories();
        await this.getNormalCategories();
        if (this.normalCategories.length > 0) {
            await this.updateNormalMenus(this.normalCategories[0].id);
        }
        if (this.comboCategories.length > 0) {
            await this.updateComboMenus(this.comboCategories[0].id);
        }
    },
}
</script>
