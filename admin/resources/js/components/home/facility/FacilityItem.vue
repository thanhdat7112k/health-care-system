<template>
    <div class="has-background-white bs-border-radius-15 is-flex">
        <div class="">
            <figure class="image is-96x96 is-1by1">
                <img :src="img" alt="About Image">
            </figure>
        </div>
        <div class="is-flex is-flex-direction-column is-justify-content-center is-align-items-center
                    is-flex-grow-1 is-flex-shrink-1">
            <h4 class="has-text-black is-centered is-size-6 is-uppercase mb-3">
                {{ prefecture }}</h4>
            <p class="has-text-black is-size-6">{{ salonNumber }} Salons</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "FacilityItem",
    props: ['img', 'prefecture', 'salonNumber'],
}
</script>
