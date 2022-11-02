<template>
    <div class="bs-bg-white py-6">
        <div class="container is-max-desktop">
            <HomeTitle :title="title" :description="description" :title-color="'yellow'"
                       :description-color="'gray'" :is-bold="true"/>
            <div class="columns is-mobile is-variable is-2-mobile is-3-tablet is-8-desktop is-multiline mt-5 px-4">
                <div v-for="item in aboutItems" :key="item.title" class="column is-6-mobile is-4-tablet is-flex mb-4">
                    <HomeCard :is-small-image="true" :section-class="'about-card'" v-bind="item"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import HomeCard from "./home-components/Card";
import HomeTitle from "./home-components/Title";

export default {
    name: "About",
    components: {
        HomeCard,
        HomeTitle,
    },
    data() {
        return {
            title: 'About',
            description: ` 介護×美容の専門教育機関「介護美容研究所」がプロデュースする新・
                    訪問美容サービス。これまでとは全く新しいカタチで高齢者・施設へ`,
            aboutItems: [
                {
                    img: '/images/about/1.png',
                    name: 'Product Mane Man',
                    description: 'ハイエンドのスタイリングとヘアケア製品のラインを体験します。',
                },
                {
                    img: '/images/about/2.png',
                    name: 'The Original New Cleanup',
                    description: '経験豊富な理髪師が、最も適切で繊細なヘアスタイルについてアドバイスします。',
                },
                {
                    img: '/images/about/3.png',
                    name: 'Product Shaving',
                    description: 'BeeSweetは、日本から高級なひげケアとシェービング製品を提供しています。',
                },
                {
                    img: '/images/about/4.png',
                    name: 'Space Mane Man',
                    description: '単なる散髪以上！ 広々とした広々としたマネマンバーバーハウスは' +
                        '、ご自宅のように快適にお過ごしいただけます。',
                },
                {
                    img: '/images/about/5.png',
                    name: 'Accessories Barber House',
                    description: 'BeeSweetのヘアカットツールは、常に今日の市場で最高の高品質のアクセサリーです。',
                },
                {
                    img: '/images/about/6.png',
                    name: 'The Original Classic Shave',
                    description: '肌に滑らかさと潤いを与えるBeeSweetシェービングジェルのプレミアムラインを体験してください。',
                },
            ]
        }
    },
}
</script>
