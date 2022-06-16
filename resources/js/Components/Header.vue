<script setup>
import {
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
} from "@headlessui/vue";
import { MenuIcon, XIcon } from "@heroicons/vue/outline";
import { LockClosedIcon } from "@heroicons/vue/solid";
import { computed } from "@vue/reactivity";

const props = defineProps({
    links: Array,
    canRegister: Boolean,
});
const image = computed({
    get() {
        return "/storage/";
    },
});
const primaryLinks = computed({
    get() {
        return props.links.filter((i) => i.title !== "contact");
    },
});
const secondaryLinks = computed({
    get() {
        return props.links.filter((i) => i.title === "contact");
    },
});
</script>

<template>
    <Popover
        class="sticky top-0 bg-white dark:bg-slate-900"
        style="z-index: 2000"
    >
        <div class="mx-auto">
            <div
                class="flex justify-between items-center border-b-2 border-gray-100 dark:border-slate-800 p-2 md:justify-start md:space-x-10"
            >
                <div
                    class="flex justify-start items-center lg:w-0 lg:flex-1 h-12"
                >
                    <a href="/">
                        <span class="sr-only">Lif-Tattoo Logo</span>
                        <img
                            title="Lif Tattoo"
                            class="h-10"
                            :src="image + 'img/lif_tattoo_logo_white.svg'"
                            alt="Lif-Tattoo Logo"
                        />
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <PopoverButton
                        class="bg-white dark:bg-slate-900 rounded-md p-2 inline-flex items-center mx-2 justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-slate-800"
                    >
                        <span class="sr-only">Open menu</span>
                        <MenuIcon class="h-6 w-6" aria-hidden="true" />
                    </PopoverButton>
                </div>
                <PopoverGroup
                    as="nav"
                    class="hidden md:flex space-x-7"
                    v-for="link in links"
                >
                    <a
                        :href="'/' + link.path"
                        class="uppercase tracking-wide text-yellow-100 hover:text-orange-200"
                        :class="{ 'text-orange-200': link.active }"
                    >
                        {{ link.title }}
                    </a>
                </PopoverGroup>
                <div class="hidden md:flex items-center justify-end md:flex-1">
                    <a
                        href="/login"
                        title="Login"
                        class="mr-2 whitespace-nowrap text-gray-800 hover:text-gray-700"
                    >
                        <span class="sr-only">Login</span>
                        <LockClosedIcon class="h-6 w-6" aria-hidden="true" />
                    </a>
                    <a
                        href="#"
                        v-if="canRegister"
                        class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"
                    >
                        Sign up
                    </a>
                </div>
            </div>
        </div>
        <transition
            enter-active-class="duration-200 ease-out"
            enter-from-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100"
            leave-active-class="duration-100 ease-in"
            leave-from-class="opacity-100 scale-100"
            leave-to-class="opacity-0 scale-95"
        >
            <PopoverPanel
                focus
                class="absolute top-0 inset-x-0 transition transform origin-top-right md:hidden"
            >
                <div
                    class="ring-2 shadow-2xl shadow-black ring-slate-800 dark:bg-slate-900 bg-white divide-y-2 divide-gray-50 dark:divide-slate-800"
                >
                    <div class="p-2">
                        <div class="flex items-center justify-between h-12">
                            <div>
                                <img
                                    class="h-10"
                                    :src="
                                        image + 'img/lif_tattoo_logo_white.svg'
                                    "
                                    alt="Lif-Tattoo Logo"
                                />
                            </div>
                            <div class="-mr-2">
                                <PopoverButton
                                    class="bg-white p-2 mx-2 dark:bg-slate-900 rounded-md inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-slate-800"
                                >
                                    <span class="sr-only">Close menu</span>
                                    <XIcon class="h-6 w-6" aria-hidden="true" />
                                </PopoverButton>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="grid py-4 dark:bg-blue-900 dark:bg-opacity-20 gap-y-2 grid-cols-1 px-5"
                            v-for="link in primaryLinks"
                        >
                            <a
                                :href="'/' + link.path"
                                class="uppercase tracking-wide font-semibold text-lg text-gray-300 hover:text-gray-200 disabled:text-black"
                                :class="{
                                    'text-slate-400': link.active,
                                }"
                            >
                                {{ link.title }}
                            </a>
                        </div>
                        <div px-5>
                            <a
                                href="#"
                                v-if="canRegister"
                                class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"
                            >
                                Sign up
                            </a>
                            <p
                                class="border-t grid gap-y-2 grid-cols-1 border-slate-800 text-center text-base py-4 font-medium text-gray-500"
                                v-for="link in secondaryLinks"
                            >
                                <a
                                    :href="'/' + link.path"
                                    class="uppercase tracking-wide text-yellow-100 hover:text-orange-200"
                                >
                                    {{ link.title }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </PopoverPanel>
        </transition>
    </Popover>
</template>

<style scoped></style>
