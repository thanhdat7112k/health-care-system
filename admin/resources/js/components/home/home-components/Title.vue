<template>
    <div class="m-auto px-4 has-text-centered title-width">
        <h2 :class="[titleColorClass, {'has-text-weight-bold': isBold}]" class="is-size-4 mb-5">{{ title }}</h2>
        <p :class="[descriptionColorClass, {'has-text-weight-bold': isBold}]"
           class="is-size-6">
            {{ description }}
        </p>
    </div>
</template>

<script>
export default {
    name: "HomeTitle",
    props: ['title', 'description', 'titleColor', 'descriptionColor', 'isBold'],
    methods: {
        textColorClass(color) {
            switch (color) {
                case 'yellow':
                    return 'bs-text-yellow'
                case 'gray':
                    return 'bs-text-dark-gray'
                case 'black':
                    return 'has-text-black'
                default:
                    return 'has-text-black'
            }
        }
    },
    computed: {
        titleColorClass() {
            return this.textColorClass(this.titleColor);
        },
        descriptionColorClass() {
            return this.textColorClass(this.descriptionColor);
        },
    }
}
</script>

<style scoped>
.title-width {
    max-width: 450px;
}
</style>
