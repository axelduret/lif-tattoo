<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import { computed } from "@vue/reactivity"
import Header from "../Components/Header.vue"

const image = computed({
    get() {
        return "/storage/";
    },
})
</script>

<template>

    <Head title="Accueil" />
    <Header />
    <div class="flex justify-center p-4 sm:p-8">
        <img class="rounded-lg" :src="image + 'img/lif_tattoo_logo_slate_900.jpg'" alt="Lif-Tattoo Logo">
    </div>
</template>

<style scoped>
</style>
