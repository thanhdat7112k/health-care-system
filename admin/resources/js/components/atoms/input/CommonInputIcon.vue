<template>
    <div class="field">
        <div class="control" :class="{ 'has-icons-left': icon.left, 'has-icons-right': icon.right }">
            <input :placeholder="placeholder" :type="inputType" @input="inputChange" v-model="value"
                   class="input bs-border-radius-10"
                   :class="{'is-danger': isInvalid, 'bs-border-light-gray': !isInvalid}"
            >
            <slot></slot>
        </div>
        <p class="help is-size-6 is-danger mt-2">{{ message }}</p>
    </div>
</template>

<script>
export default {
    name: "CommonInput",
    props: ['icon', 'placeholder', 'type'],
    data() {
        return {
            message: "",
            value: "",
            isInvalid: false,
        }
    },
    computed: {
        inputType() {
            return this.type ? this.type : 'text';
        },
    },
    methods: {
        inputChange() {
            this.$emit('input-change', this.value);
        }
    },
}
</script>

<style scoped>

</style>
