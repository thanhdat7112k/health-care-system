<template>
    <div id="footer">
        <div class="py-4 container is-fluid bs-bg-white">
            <div class="columns py-5 is-flex is-vcentered is-centered is-multiline">
                <div class="column is-5-tablet is-12-mobile">
                    <img class="px-3 is-size-2-touch is-size-1" src="/images/logo/logo.png" alt="">
                </div>
                <div class="column px-5 is-7-tablet is-12-mobile">
                    <div class="columns is-mobile is-multiline">
                        <div v-for="footerLink in footerLinks" :key="footerLink.title"
                             class="column is-12-mobile is-4-tablet has-text-centered-mobile has-text-right-tablet">
                            <FooterLink :router-name="footerLink.routerName" :title="footerLink.title"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-12 is-size-5-desktop is-size-6-touch
                        is-flex is-align-items-center is-justify-content-center bs-text-dark-gray">
                    <i class="material-icons">copyright</i>
                    &nbsp;2021 BEESWEET PROJECT,INC
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FooterLink from "../components/footer/FooterLink";

export default {
    name: "Footer",
    components: {
        FooterLink,
    },
    data() {
        return {
            footerLinks: [
                {
                    title: '運営会社',
                    routerName: '',
                },
                {
                    title: 'プライバシーポリシー',
                    routerName: '',
                },
                {
                    title: 'お問い合わせ',
                    routerName: '',
                }
            ],
        }
    }
}
</script>

<style lang="scss" scoped>
#footer {
    height: 170px !important;
}
</style>
