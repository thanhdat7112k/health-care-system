<template>
    <div >
        <div for="" class="radio mr-3">
            <label>
                <input
                    :name="name"
                    type="radio"
                    v-model="value"
                    :value="updateValue"
                    @input="$emit('update:updateValue', value)"
                    :class="{'is-danger': isInvalid, 'bs-border-light-gray': !isInvalid}"
                >
                {{ label }}
            </label>
        </div>
        <p class="help is-size-6 is-danger mt-2">{{ message }}</p>
    </div>
</template>

<script>
    export default {
        name: "Radio",
        props: {
            name: {
                type: String,
                required: true
            },
            label: {
                type: String,
                required: true
            },
            error: {
                type: String,
            },
            updateValue: {
                type: [String, Number]
            },
            value: {
                type: [String, Number]
            }
        },
        data() {
            return {
                message: "",
                isInvalid: true
            }
        },
    }
</script>

<style scoped>

</style>
