<template>
    <div class="bs-bg-white py-6">
        <div class="container is-max-desktop">
            <HomeTitle :description="description" :description-color="'gray'"
                       :is-bold="true" :title="title" :title-color="'yellow'"/>
            <FilterBar :filters="productFilters"/>
            <HomeCarousel :section-class="'product-card'" :button-text="'今買う'" :items="products"/>
        </div>
    </div>
</template>

<script>
import HomeTitle from "./home-components/Title";
import FilterBar from "./home-components/FilterBar";
import HomeCarousel from "./home-components/Carousel";

export default {
    name: "Product",
    components: {
        HomeCarousel,
        FilterBar,
        HomeTitle
    },
    data() {
        return {
            title: 'Product',
            description: '製品',
            productFilters: [
                {
                    id: 1,
                    name: 'Hairdryer',
                },
                {
                    id: 2,
                    name: 'Hair Dye'
                },
            ],
            products: [
                {
                    img: '/images/product.png',
                    name: 'ヘアドライヤー Furin',
                    description: '風林ヘアドライヤーはいつでもあなたが美しいヘアスタイルを作るのを簡単にします。',
                    price: 5000,
                },
                {
                    img: '/images/product.png',
                    name: 'ヘアドライヤー Furin',
                    description: '風林ヘアドライヤーはいつでもあなたが美しいヘアスタイルを作るのを簡単にします。',
                    price: 5000,
                },
                {
                    img: '/images/product.png',
                    name: 'ヘアドライヤー Furin',
                    description: '風林ヘアドライヤーはいつでもあなたが美しいヘアスタイルを作るのを簡単にします。',
                    price: 5000,
                },
                {
                    img: '/images/product.png',
                    name: 'ヘアドライヤー Furin',
                    description: '風林ヘアドライヤーはいつでもあなたが美しいヘアスタイルを作るのを簡単にします。',
                    price: 5000,
                },
                {
                    img: '/images/product.png',
                    name: 'ヘアドライヤー Furin',
                    description: '風林ヘアドライヤーはいつでもあなたが美しいヘアスタイルを作るのを簡単にします。',
                    price: 5000,
                },
                {
                    img: '/images/product.png',
                    name: 'ヘアドライヤー Furin',
                    description: '風林ヘアドライヤーはいつでもあなたが美しいヘアスタイルを作るのを簡単にします。',
                    price: 5000,
                },
            ]
        }
    },
}
</script>
