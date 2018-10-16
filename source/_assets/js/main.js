window.Vue = require('vue');

require('intersection-observer');

import Modal from './Modal.vue';
import ImgLoader from './ImgLoader.vue';

const app = new Vue({
    el: '#app',
    components: { Modal, ImgLoader },
    data() {
        return {
            modalActive: false,
            imageSrc: null,
        }
    },
    methods: {
        showImage(src) {
            this.imageSrc = src;
            this.modalActive = true;
        }
    }
});
