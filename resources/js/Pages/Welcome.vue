<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import {
    BookmarkAltIcon,
    CalendarIcon,
    ChartBarIcon,
    CursorClickIcon,
    MenuIcon,
    PhoneIcon,
    PlayIcon,
    RefreshIcon,
    ShieldCheckIcon,
    SupportIcon,
    ViewGridIcon,
    XIcon,
} from '@heroicons/vue/outline'
import { ChevronDownIcon } from '@heroicons/vue/solid'
import { computed } from "@vue/reactivity"
import Header from "../Components/Header.vue"

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
const image = computed({
    get() {
        return "/storage/";
    },
})
</script>

<template>

    <Head title="Accueil" />
    <Header />
    <div class="flex justify-center items-center p-4 sm:p-8"><img class="rounded-lg"
            :src="image + 'img/lif_tattoo_logo_slate_900.jpg'" alt="Lif-Tattoo Logo"></div>
</template>

<style scoped>
</style>
