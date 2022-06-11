<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Header from "../Components/Header.vue"
import { computed } from "@vue/reactivity"
defineProps({
    test: String,
});
const image = computed({
    get() {
        return "/storage/";
    },
})
</script>

<template>

    <Head title="Présentation" />
    <Header />
    <content>
        <div class="grid p-0 sm:p-4 dark:sm:bg-blue-900 dark:sm:bg-opacity-10">
            <div class="order-2 sm:order-1 flex-wrap md:flex m-0 p-0 sm:m-4 sm:py-4 sm:px-8">
                <div
                    class=" mx-0 w-full sm:max-w-md sm:mx-auto   bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="grid">
                        <div
                            class=" sm:order-1  ring-4 bg-slate-900 pt-6 sm:pt-0 pb-12 sm:pb-6 ring-slate-900 ring-inset">
                            <img class=" md:h-64 h-full w-full object-cover"
                                :src="image + 'img/lif_tattoo_logo_slate_900.jpg'" alt="Lif-Tattoo Logo">
                        </div>
                        <div class="sm:order-2 p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                                <h1>Lif Tattoo</h1>
                            </div>

                            <p class="mt-2 text-slate-500">Depuis 2013, Lif pratique le tatouage.
                                Artiste
                                autodidacte, elle
                                commence par
                                s'entrainer sur elle puis sur quelques proches. Rapidement, elle s'installe dans un
                                premier
                                local
                                afin
                                de pouvoir recevoir plus de clients. Indépendante Lif a fait du tatouage son métier.
                                Aujourd'hui,
                                installée chez Brut aux Pâquis, elle vous reçoit sur rendez-vous pour réaliser vos
                                projets.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 sm:order-2 flex-wrap md:flex m-0 p-0 sm:m-4 sm:py-4 sm:px-8">
                <div class="max-w-md mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                        <div class="md:shrink-0">
                            <img class=" w-full md:h-full md:w-48" :src="image + 'img/info/portrait_lif.jpg'"
                                alt="Lif-Tattoo Logo">
                        </div>
                        <div class=" p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                                <h2>Lif</h2>
                            </div>

                            <p class="mt-2 text-slate-500">Née en 1980 en Turquie, c'est à l’âge de
                                2
                                ans qu'elle s'installe
                                avec ses parents dans le quartier de la Jonction à Genève. Passionnée par le dessin dès
                                son
                                enfance,
                                c'est vers la trentaine qu'elle décide d'en faire son métier. Partagée entre
                                l'illustration,
                                le graffiti et le tatouage, cette artiste pluridisciplinaire a su se faire une place au
                                sein
                                de la
                                scène artistique genevoise.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="md:flex-.5 md:mr-4 flex justify-center "><img class=" rounded-lg max-h-96"
                        :src="image + 'img/info/portrait_lif.jpg'" alt="Lif-Tattoo Logo">
                </div>
                <div class="md:flex-1 md:ml-4 mt-8 md:mt-0">
                    <div class="pb-4">
                        <div>
                            <h2 class="text-gray-300 text-lg font-semibold">
                                Lif</h2>
                        </div>
                        <div>
                            <p class="text-gray-300 text-justify sm:text-left">Née en 1980 en Turquie, c'est à l’âge de
                                2
                                ans qu'elle s'installe
                                avec ses parents dans le quartier de la Jonction à Genève. Passionnée par le dessin dès
                                son
                                enfance,
                                c'est vers la trentaine qu'elle décide d'en faire son métier. Partagée entre
                                l'illustration,
                                le graffiti et le tatouage, cette artiste pluridisciplinaire a su se faire une place au
                                sein
                                de la
                                scène artistique genevoise.</p>
                        </div>
                    </div>
                    <div class="pb-4">
                        <div>
                            <h2 class="text-gray-300 text-lg font-semibold">
                                Presse</h2>
                        </div>
                        <div>
                            <ul class="text-gray-300">
                                <li>Lights Magazine Vol. 1 - 15.02.2018</li>
                                <li>Tribune de Genève - 15.08.2018</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
        </div>
    </content>
</template>

<style scoped>
</style>
