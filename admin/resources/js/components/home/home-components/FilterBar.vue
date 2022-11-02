<template>
    <div class="px-6 my-4">
        <div class="card is-shadowless is-flex bs-border-radius-10">
            <div class="is-clipped bs-border-radius-10">
                <button v-for="filter in filters" :key="filter.id"
                        :class="{'bs-bg-yellow': currentFilter === filter.id}"
                        class="button is-white is-radiusless has-text-black filter-btn"
                        @click="setFilter(filter.id)"
                >
                    {{ filter.name }}
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FilterBar",
    props: ['filters', 'currentFilter',],
    methods: {
        setFilter(id) {
            this.$emit('change-filter', id)
        }
    }
}
</script>

<style scoped>
.filter-btn:hover {
    background-color: var(--primary-color);
}
</style>
