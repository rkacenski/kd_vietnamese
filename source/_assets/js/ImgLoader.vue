<template lang="html">
    <div>
        <div class="placeholder">
            <img ref="placeholder"
                :width="meta.dimensions.width"
                :height="meta.dimensions.height" />
            <img class="img-small"
                :class="{'loaded' : !intersected}"
                :src="meta.thumb.url" />
        </div>
        <figcaption v-if="desc">{{ desc }}</figcaption>
    </div>
</template>

<script>
export default {
    props: ['meta', 'desc'],
    data: () => ({
        observer: null,
        intersected: false,
    }),
    methods: {
        loadImage() {
            this.$refs.placeholder.src = this.meta.url;
            this.$refs.placeholder.onload = () => {
                this.intersected = true;
                this.$refs.placeholder.classList.add('loaded');
            };
        }
    },
    mounted() {
        this.observer = new IntersectionObserver(entries => {
            const image = entries[0];
            if (image.isIntersecting) {
                this.loadImage();
                this.observer.disconnect();
            }
        });

        this.observer.observe(this.$el);
    },
    destroyed() {
        this.observer.disconnect();
    }
}
</script>

<style lang="css">
.placeholder {
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    overflow: hidden;
}

.placeholder img {
    opacity: 0;
    width: 100%;
    transition: opacity 1s linear;
}

.placeholder img.loaded {
    opacity: 1;
}

.img-small {
    position: absolute;
    top: 0;
    left: 0;
    filter: blur(50px);
    /* this is needed so Safari keeps sharp edges */
    transform: scale(1);
}
</style>
