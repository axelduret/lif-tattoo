<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Header from "../Components/Header.vue"
import { computed } from "@vue/reactivity"
const image = computed({
    get() {
        return "/storage/";
    },
})
</script>

<template>

    <Head title="Présentation" />
    <Header />
    <div class="p-4 sm:p-8">
        <div class="flex-wrap md:flex p-4 sm:py-4 sm:px-8">
            <div class="md:flex-.5 md:mr-4 flex justify-center"><img class="rounded-lg max-h-96"
                    :src="image + 'img/info/portrait_lif.jpg'" alt="Lif-Tattoo Logo"></div>
            <div class="md:flex-1 md:ml-4 mt-8 md:mt-0">
                <div class="pb-2">
                    <div>
                        <h1 class="text-gray-300 text-lg font-semibold">
                            Lif Tattoo</h1>
                    </div>
                    <div>
                        <p class="text-gray-300 text-justify sm:text-left">Depuis 2013, Lif pratique le tatouage.
                            Artiste
                            autodidacte, elle
                            commence par
                            s'entrainer sur elle puis sur quelques proches. Rapidement, elle s'installe dans un premier
                            local
                            afin
                            de pouvoir recevoir plus de clients. Indépendante Lif a fait du tatouage son métier.
                            Aujourd'hui,
                            installée chez Brut aux Pâquis, elle vous reçoit sur rendez-vous pour réaliser vos projets.
                        </p>
                    </div>
                </div>
                <div class="pb-2">
                    <div>
                        <h1 class="text-gray-300 text-lg font-semibold">
                            Lif</h1>
                    </div>
                    <div>
                        <p class="text-gray-300 text-justify sm:text-left">Née en 1980 en Turquie, c'est à l’âge de 2
                            ans qu'elle s'installe
                            avec ses parents dans le quartier de la Jonction à Genève. Passionnée par le dessin dès son
                            enfance,
                            c'est vers la trentaine qu'elle décide d'en faire son métier. Partagée entre l'illustration,
                            le graffiti et le tatouage, cette artiste pluridisciplinaire a su se faire une place au sein
                            de la
                            scène artistique genevoise.</p>
                    </div>
                </div>
                <div class="pb-2">
                    <div>
                        <h1 class="text-gray-300 text-lg font-semibold">
                            Presse</h1>
                    </div>
                    <div>
                        <ul class="text-gray-300">
                            <li>Lights Magazine Vol. 1 - 15.02.2018</li>
                            <li>Tribune de Genève - 15.08.2018</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>
