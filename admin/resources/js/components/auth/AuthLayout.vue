<template>
    <div>
        <AuthTilte :title="title"/>
        <slot></slot>
        <ScrollTop/>
    </div>
</template>

<script>
import ScrollTop from "../ScrollTop";
import AuthTilte from "./AuthTilte";

export default {
    name: "AuthLayout",
    components: {
        AuthTilte,
        ScrollTop,
    },
    props: ['title'],
}
</script>
