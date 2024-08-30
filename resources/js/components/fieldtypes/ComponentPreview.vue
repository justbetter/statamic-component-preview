<template>
    <div v-show="config.image" class="relative">
        <div ref="button" class="absolute top-2 right-3 z-10" @click="toggleShow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
        </div>

        <div ref="modal" v-show="showModal" class="absolute top-10 left-2 right-2 border shadow-md p-2 bg-white">
            <img :src="`/${config.image}`" alt="" class="w-full max-h-80 object-contain">
        </div>
    </div>
</template>

<script>
export default {

    mixins: [Fieldtype],

    data() {
        return {
            showModal: false
        };
    },

    methods: {
        toggleShow() {
            this.showModal = !this.showModal;
        },

        closeModal() {
            if (this.showModal) {
                this.showModal = false;
            }
        }
    }

};
</script>
