<template>
    <div class="bs-bg-yellow py-6">
        <div class="container is-max-desktop">
            <HomeTitle :description="description" :description-color="'black'" :title="title" :title-color="'black'"/>
            <CommonCarousel :class="classObject" class="mt-5">
                <div v-for="(voice, index) in voices" :key="index" class="px-3">
                    <VoiceItem v-bind="voice"/>
                </div>
            </CommonCarousel>
        </div>
    </div>
</template>

<script>
import VoiceItem from "./VoiceItem";
import CommonCarousel from "../../carousels/CommonCarousel";
import HomeTitle from "../home-components/Title";

export default {
    name: "Voice",
    components: {
        HomeTitle,
        CommonCarousel,
        VoiceItem,
    },
    data() {
        return {
            title: 'Voice',
            description: 'ご利用施設様の声',
            voices: [
                {
                    img: '/images/voice.png',
                    title: 'ABCコメント',
                    description: `出来映えはとても良く、私の最初の形はカットするのがかなり難しいですが、
                                皆さんは私に非常に満足のいく髪型を与えてくれました。 おいしいドリンクと快適な空間。
                                間違いなくこの床屋に永遠にとどまる`,
                },
                {
                    img: '/images/voice.png',
                    title: 'ABCコメント',
                    description: `出来映えはとても良く、私の最初の形はカットするのがかなり難しいですが、
                                皆さんは私に非常に満足のいく髪型を与えてくれました。 おいしいドリンクと快適な空間。
                                間違いなくこの床屋に永遠にとどまる`,
                },
                {
                    img: '/images/voice.png',
                    title: 'ABCコメント',
                    description: `出来映えはとても良く、私の最初の形はカットするのがかなり難しいですが、
                                皆さんは私に非常に満足のいく髪型を与えてくれました。 おいしいドリンクと快適な空間。
                                間違いなくこの床屋に永遠にとどまる`,
                },
                {
                    img: '/images/voice.png',
                    title: 'ABCコメント',
                    description: `出来映えはとても良く、私の最初の形はカットするのがかなり難しいですが、
                                皆さんは私に非常に満足のいく髪型を与えてくれました。 おいしいドリンクと快適な空間。
                                間違いなくこの床屋に永遠にとどまる`,
                },
                {
                    img: '/images/voice.png',
                    title: 'ABCコメント',
                    description: `出来映えはとても良く、私の最初の形はカットするのがかなり難しいですが、
                                皆さんは私に非常に満足のいく髪型を与えてくれました。 おいしいドリンクと快適な空間。
                                間違いなくこの床屋に永遠にとどまる`,
                },
                {
                    img: '/images/voice.png',
                    title: 'ABCコメント',
                    description: `出来映えはとても良く、私の最初の形はカットするのがかなり難しいですが、
                                皆さんは私に非常に満足のいく髪型を与えてくれました。 おいしいドリンクと快適な空間。
                                間違いなくこの床屋に永遠にとどまる`,
                },
            ],
        }
    },
    computed: {
        classObject() {
            return {
                'margin-list-3-items': this.voices.length === 3,
                'margin-list-2-items': this.voices.length === 2,
                'margin-list-1-items': this.voices.length === 1,
            }
        }
    }
}
</script>
