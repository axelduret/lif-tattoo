<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Header from "../Components/Header.vue";
import { computed } from "@vue/reactivity";
defineProps({
    page: Array,
});
const image = computed({
    get() {
        return "/storage/";
    },
});
</script>

<template>
    <Head title="Présentation" />
    <Header />
    <main id="info-page">
        <div class="grid p-0 sm:px-4 sm:py-2 md:py-3 bg-blue-900 bg-opacity-10">
            <article id="introduction" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <div class="text-black">
                        <!-- {{ page.name }} -->
                    </div>
                </div>
            </article>
        </div>
    </main>
</template>

<style scoped></style>
