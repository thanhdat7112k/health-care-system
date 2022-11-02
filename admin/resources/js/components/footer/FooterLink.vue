<template>
    <router-link class="bs-text-dark-gray is-size-5-desktop is-size-6-touch" :to="{ name: routerName }">
        {{ title }}
    </router-link>
</template>

<script>
export default {
    name: "FooterLink",
    props: ['title', 'routerName'],
}
</script>
