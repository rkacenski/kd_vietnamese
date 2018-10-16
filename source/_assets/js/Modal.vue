<template lang="html">
    <div v-if="isActive" class="modal is-active">
        <div class="modal-background" @click="close()"></div>
        <div class="modal-content">
            <p class="image">
                <img :src="src" alt="">
            </p>
        </div>
        <button @click="close()" class="modal-close is-large" aria-label="close"></button>
    </div>
</template>

<script>
export default {
    props: {
        active: Boolean,
        src: String
    },

    data() {
        return {
            isActive: this.active || false,
        }
    },

    watch: {
        active(value) {
            this.isActive = value
        },
    },

    methods: {
        close() {
            this.$emit('update:active', false)
            this.isActive = false;
        }
    }
}
</script>

<style lang="css">
</style>
