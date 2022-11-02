<template>
    <div class="banner">
        <div class="container banner-container is-flex is-flex-direction-column
                    is-justify-content-center is-align-items-center">
            <h1 class="py-1 mb-2 py-4-desktop bs-text-yellow has-text-weight-bold has-text-centered
                       is-size-5-mobile is-size-3-tablet is-size-2-widescreen">
                一歩先を行く訪問美容サービス</h1>
            <h2 class="py-1 mb-2 py-4-desktop bs-text-yellow has-text-weight-bold has-text-centered
                       is-size-6-mobile is-size-4-tablet is-size-3-widescreen">
                安心・安全・信頼のサービス品質</h2>
            <button class="mt-4 button bs-btn is-light bs-bg-yellow has-text-white bs-px-5-5">ご予約はこちら</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Banner"
}
</script>

<style scoped>
.banner {
    width: 100%;
    background: url(/images/banner.png) top center / cover no-repeat;
    padding-top: 50%;
    position: relative;
}

.banner-container {
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}
</style>
