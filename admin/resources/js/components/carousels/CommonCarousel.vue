<template>
    <VueSlickCarousel v-bind="settings" class="is-flex">
        <div slot="prevArrow" class="is-flex m-auto px-1">
            <button class="arrow-btn bs-bg-light-gray has-text-black is-size-7">
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>
        <slot></slot>
        <div slot="nextArrow" class="is-flex m-auto px-1">
            <button class="arrow-btn bs-bg-light-gray has-text-black is-size-7">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </VueSlickCarousel>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel';
import 'vue-slick-carousel/dist/vue-slick-carousel.css';

export default {
    name: "CommonCarousel",
    components: {
        VueSlickCarousel,
    },
    data() {
        return {
            settings: {
                autoplay: true,
                autoplaySpeed: 3000,
                swipeToSlide: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ]
            }
        }
    }
}
</script>

<style scoped>
.arrow-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: none;
}
</style>
