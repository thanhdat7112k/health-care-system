<template>
    <form action="">
        <div class="bs-border-bold-light-gray bs-border-radius-10 py-6 px-6 action-form">
            <div class="columns is-multiline">
                <slot></slot>
            </div>
            <div class="is-flex is-justify-content-center mt-5">
                <button :class="{'is-loading': isLoading}"
                        class="button is-white bs-btn bs-border-pink has-text-black
                               bs-px-5-5 has-text-weight-bold"
                        type="submit">
                    {{ button }}
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: "CommonForm",
    props: ['button', 'isLoading'],
}
</script>

<style scoped>
    .action-form {
        max-width: 550px;
    }
</style>
