<template>
    <div class="home">
        <Banner/>
        <About/>
        <Voice/>
        <Service/>
        <Point/>
        <Product/>
        <Blog/>
        <Facility/>
    </div>
</template>
<script>
import Banner from "../components/home/Banner";
import About from "../components/home/About";
import Voice from "../components/home/voice/Voice";
import Service from "../components/home/Service";
import Point from "../components/home/point/Point";
import Product from "../components/home/Product";
import Blog from "../components/home/Blog";
import Facility from "../components/home/facility/Facility";

export default {
    components: {
        Banner,
        About,
        Voice,
        Service,
        Point,
        Product,
        Blog,
        Facility,
    },
}
</script>

<style scoped>
.home {
    line-height: var(--line-height) !important;
}
</style>
