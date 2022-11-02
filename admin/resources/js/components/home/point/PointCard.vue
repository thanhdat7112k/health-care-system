<template>
    <div class="card is-shadowless bs-border-radius-10 has-text-black">
        <div class="card-content">
            <div class="is-flex is-align-items-center mb-4">
                <div class="bs-px-5-5 py-2 is-size-6 mb-2 mr-2" :style="{border: '1px solid '+ color}">
                    {{ point }}
                </div>
                <h4 class="mb-2 is-size-6">
                    {{ title }}
                </h4>
            </div>
            <div class="py-3 has-text-justified is-size-6">
                {{ description1 }}
            </div>
            <div class="py-3 is-size-6">
                {{ description2 }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PointCard",
    props: ['point', 'title', 'color', 'description1', 'description2'],
}
</script>
