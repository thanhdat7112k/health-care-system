<template>
    <div id="scroll-top" class="bs-bg-lighter-gray py-5">
        <div class="is-flex is-justify-content-center">
            <button class="button is-light bs-btn bs-bg-yellow has-text-white bs-px-5-5 has-text-weight-bold"
                    @click="scrollTop"
            >
                TOPヘ戻る
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "ScrollTop",
    methods: {
        scrollTop() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    },
}
</script>

