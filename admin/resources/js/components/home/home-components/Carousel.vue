<template>
    <CommonCarousel :class="classObject">
        <div v-for="item in items" :key="item.id" class="px-3">
            <HomeCard :button-text="buttonText" :section-class="sectionClass" v-bind="item"/>
        </div>
    </CommonCarousel>
</template>

<script>
import CommonCarousel from "../../carousels/CommonCarousel";
import HomeCard from "./Card";

export default {
    name: "Carousel",
    components: {
        HomeCard,
        CommonCarousel
    },
    props: ['items', 'sectionClass', 'buttonText'],
    computed: {
        classObject() {
            return {
                'margin-list-3-items': this.items.length === 3,
                'margin-list-2-items': this.items.length === 2,
                'margin-list-1-items': this.items.length === 1,
            }
        }
    }
}
</script>

<style scoped>

</style>
