<template>
    <div class="card is-shadowless bs-border-radius-10">
        <div class="card-content px-3 py-3 has-text-centered product-card is-flex is-flex-direction-column">
            <figure class="image mb-4" :class="{'is-96x96 mx-auto': isSmallImage, 'is-5by4': !isSmallImage}">
                <img :src="img" alt="About Image" class="bs-border-radius-10 card-img">
            </figure>
            <div :class="sectionClass">
                <h4 class="has-text-black is-size-6 has-text-weight-bold px-3 bs-letter-spacing card-title">
                    {{ name }}</h4>
                <p class="has-text-black has-text-justified is-size-6 mt-3 card-description">{{ description }}</p>
                <p v-if="price" class="is-size-5 bs-text-pink has-text-centered mt-4">{{ formattedPrice }}</p>
                <button v-if="buttonText"
                        class="mt-4 button is-small is-white bs-border-pink bs-border-radius-10 bs-px-5-5">
                    {{ buttonText }}
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import {formatPrice} from '../../../helpers';

export default {
    name: "HomeCard",
    props: ['img', 'name', 'description', 'price', 'buttonText', 'isSmallImage', 'sectionClass'],
    computed: {
        formattedPrice() {
            return formatPrice(this.price);
        }
    }
}
</script>

<style scoped>
.card-title,
.card-description {
    word-break: break-word;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.about-card > .card-title {
    min-height: calc(2 * var(--line-height));
    -webkit-line-clamp: 2;
}

.about-card > .card-description {
    min-height: calc(4 * var(--line-height));
    -webkit-line-clamp: 4;
}

.service-card > .card-title,
.product-card > .card-title {
    min-height: calc(2 * var(--line-height));
    -webkit-line-clamp: 2;
}

.service-card > .card-description,
.product-card > .card-description {
    min-height: calc(3 * var(--line-height));
    -webkit-line-clamp: 3;
}

.blog-card > .card-title {
    min-height: calc(2 * var(--line-height));
    -webkit-line-clamp: 2;
}

.blog-card > .card-description {
    min-height: calc(4 * var(--line-height));
    -webkit-line-clamp: 4;
}

.card-img {
    object-fit: cover;
}
</style>
