<template>
    <div class="field">
        <label for="" class="label bs-text-dark-gray">{{ label }}</label>
        <input
            :max="maxDate"
            :placeholder="placeholder" 
            :type="inputType" 
            class="input bs-border-radius-10"
            :value="value"
            @input="(event)=> $emit('update:value', event.target.value)"
            :class="{'is-danger': isInvalid, 'bs-border-light-gray': !isInvalid}"
        >
        <slot></slot>
        <p class="help is-size-6 is-danger mt-2">{{ message }}</p>
        <div v-if="error">
            <div class="has-text-danger">{{ error }}</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HomeInput",
        props: {
            name: {
                type: String,
                required: true
            },
            label: {
                type: String,
                required: true
            },
            placeholder: {
                type: String,
                required: true
            },
            type: {
                type: String
            },
            error: {
                type: String,
            },
            value: {
                type: [String, Number]
            },
            date: {
                type: String
            }
        },
        data() {
            return {
                message: "",
                isInvalid: false,
            }
        },
        computed: {
            inputType() {
                return this.type || 'text';
            },
            maxDate() {
                return this.date || '';
            }
        }
    }
</script>

<style scoped>

</style>
