<template>
    <div id="app" class="main-layout">
        <div class="main-content">
            <Header/>
            <router-view/>
            <Footer/>
        </div>
        
    </div>
</template>

<script>
import Header from "./layouts/Header";
import Footer from "./layouts/Footer";

export default {
    components: {
        Header,
        Footer,
    },
}
</script>

<style scoped>
.main-layout {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.main-content {
    flex: 1;
}
</style>
