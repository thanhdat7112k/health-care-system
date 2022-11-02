<template>
    <div class="hero is-fullheight has-background">
        <img alt="" class="hero-background" src="/images/point/bg.png">
        <div class="container is-max-desktop point-container">
            <div class="py-6">
                <HomeTitle :title="title" :description="description"
                           :title-color="'yellow'" :description-color="'black'"/>
                <div class="points is-flex is-flex-direction-column is-justify-content-space-between">
                    <div class="my-6 point-1">
                        <PointCard class="point-1__card" v-bind="points[0]"></PointCard>
                        <div class="point-1__image">
                            <img alt="" src="/images/point/1.png">
                        </div>
                    </div>
                    <div class="my-6 point-2">
                        <PointCard class="point-2__card" v-bind="points[1]"></PointCard>
                        <div class="point-2__image">
                            <img alt="" src="/images/point/2.png">
                        </div>
                    </div>
                    <div class="my-6 point-3">
                        <PointCard class="point-3__card" v-bind="points[2]"></PointCard>
                        <div class="point-3__image">
                            <img alt="" src="/images/point/3.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PointCard from "./PointCard";
import HomeTitle from "../home-components/Title";

export default {
    name: "Point",
    components: {
        HomeTitle,
        PointCard
    },
    data() {
        return {
            title: 'Point',
            description: '安心・安全・信頼のサービス品質',
            points: [
                {
                    point: 'Point.01',
                    title: '協会',
                    color: '#BEC1EF',
                    description1: '業界団体を中心に設立した 訪問理美容協議会が 全面バックアップ',
                    description2: `BeeSweetヘアカットスタイルは、髪を切るだけでなく、リラックスして
                                   「QUALITY」ドリンクを楽しむ場所でもあります！`
                },
                {
                    point: 'Point.02',
                    title: '教育',
                    color: '#F4B1B9',
                    description1: '介護美容の専門教育機関を修了済みのプロフェッショナルが担当',
                    description2: `日本初の介護美容専門教育機関「介護美容研究所」を修了した技術者が登録しています。
                                   専門的な教育を受けた、信頼のサービス品質です。`
                },
                {
                    point: 'Point.03',
                    title: '資格',
                    color: '#8EF5C9',
                    description1: '初任者研修を取得した介護知識を持つ技術者',
                    description2: `登録技術者は皆、介護・医療系の資格を取得しています。
                                   介護現場の知識を持っているので、安心してご依頼いただけます。`
                }
            ]
        }
    }
}
</script>

<style scoped>
.hero.has-background {
    position: relative;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    object-fit: cover;
    object-position: center center;
    width: 100%;
    height: 100%;
}

.points {
    height: 100%;
}

.point-1 {
    display: grid;
    grid-template-columns: 1fr 9fr 1fr 3fr 3fr;
    grid-template-rows: 2fr 1fr 2fr 1fr 3fr;
}

.point-1__card {
    grid-column: 1 / span 2;
    grid-row: 1 / span 3;
}

.point-1::before {
    content: "";
    grid-column: 2 / span 3;
    grid-row: 2 / span 3;
    background: linear-gradient(263.91deg, #E3BEE9 2.03%, #BDC1EE 97%);
}

.point-1__image {
    grid-column: 4 / span 2;
    grid-row: 3 / span 3;
}

.point-2 {
    display: grid;
    grid-template-columns: 3fr 3fr 1fr 9fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr 2fr;
}

.point-2__card {
    grid-column: 4 / span 1;
    grid-row: 1 / span 3;
}

.point-2::before {
    content: "";
    grid-column: 2 / span 4;
    grid-row: 2 / span 3;
    background: linear-gradient(100.16deg, #F3B0BA 0%, #F7D085 98.82%);
}

.point-2__image {
    grid-column: 1 / span 2;
    grid-row: 3 / span 3;
}

.point-3 {
    display: grid;
    grid-template-columns: 1fr 9fr 1fr 6fr 1fr;
    grid-template-rows: 2fr 1fr 3fr 4fr 2fr;
}

.point-3__card {
    grid-column: 1 / span 2;
    grid-row: 1 / span 3;
}

.point-3::before {
    content: "";
    grid-column: 2 / span 4;
    grid-row: 2 / span 3;
    background: linear-gradient(84.57deg, #F8C8C4 0%, #DBFBF0 98.88%);
}

.point-3__image {
    grid-column: 4 / span 1;
    grid-row: 3 / span 3;
}

.point-1__image > img,
.point-2__image > img,
.point-3__image > img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

@media screen and (max-width: 576px) {
    .point-1,
    .point-2,
    .point-3 {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 2fr;
    }

    .point-1::before,
    .point-2::before,
    .point-3::before {
        grid-column: 1 / -1;
        grid-row: 1 / -1;
    }

    .point-1__card,
    .point-2__card,
    .point-3__card {
        grid-column: 1 / -1;
        grid-row: 1 / 2;
        margin: 1rem;
    }

    .point-1__image,
    .point-2__image,
    .point-3__image {
        grid-column: 1 / -1;
        grid-row: 2 / 3;
        margin: 1rem;
    }
}

@media screen and (max-width: 361px) {
    .point-1,
    .point-2,
    .point-3 {
        grid-template-rows: 1fr 1fr;
    }
}
</style>
