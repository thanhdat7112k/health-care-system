<template>
    <div :class="borderClass"
         class="py-6 px-5 my-2"
    >
        <div class="is-flex is-flex-direction-column is-align-items-center is-justify-content-center">
            <div :class="textClass"
                 class="is-size-4 mb-4 has-text-weight-bold"
            >
                {{ boxTitle }}
            </div>
            <span class="mb-4 bs-text-dark-gray">
                <i class="material-icons bs-large-icon">{{ boxIcon }}</i>
            </span>
            <router-link :to="{ name: boxAction }" class="bs-text-dark-gray is-size-6
                                                          has-text-weight-bold">
                {{ boxLink }}&nbsp;
                <i class="fas fa-chevron-right" :class="textClass"></i>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "ActionsBox",
    props: ['boxColor', 'boxTitle', 'boxAction', 'boxLink', 'boxIcon'],
    computed: {
        borderClass() {
            return 'bs-border-bold-' + this.boxColor;
        },
        textClass() {
            return 'bs-text-' + this.boxColor;
        },
        image() {
            return 'images/' + this.boxAction + '.svg';
        }
    }
}
</script>
