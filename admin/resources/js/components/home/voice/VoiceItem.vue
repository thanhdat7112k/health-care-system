<template>
    <div class="card is-shadowless bs-border-radius-10">
        <div class="card-content py-2 px-4">
            <h4 class="has-text-black has-text-centered is-size-6 voice-title">
                {{ title }}</h4>
        </div>
        <div class="card-image">
            <figure class="image">
                <img :src="img" alt="About Image">
            </figure>
        </div>
        <div class="card-content p-4">
            <p class="bs-text-dark-gray has-text-justified is-size-6 voice-description">{{ description }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "VoiceItem",
    props: ['img', 'title', 'description'],
}
</script>

<style scoped>
.voice-title {
    min-height: calc(1 * var(--line-height));
    word-break: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.voice-description {
    min-height: calc(5 * var(--line-height));
    word-break: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
