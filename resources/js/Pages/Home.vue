<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Header from "../Components/Header.vue";
import { computed } from "@vue/reactivity";
defineProps({
    page: Array,
    title: String,
    links: Array,
});
const image = computed({
    get() {
        return "/storage/";
    },
});
</script>

<template>
    <Head :title="title" />
    <Header :links="links" />
    <main id="info-page">
        <div class="grid p-0 sm:px-4 sm:py-2 md:py-3 bg-blue-900 bg-opacity-10">
            <article id="introduction" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <div class="grid">
                        <section
                            id="introduction-image"
                            class="hidden sm:block ring-4 bg-slate-900 pt-6 sm:pt-0 pb-12 sm:pb-6 ring-slate-900 ring-inset"
                        >
                            <img
                                class="md:h-64 h-full md:w-full"
                                :src="
                                    image + 'img/lif_tattoo_logo_slate_900.jpg'
                                "
                                alt="Lif-Tattoo Logo"
                            />
                        </section>
                        <section id="introduction-text" class="p-8">
                            <div
                                class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"
                            >
                                <h1 id="introduction-title">Lif Tattoo</h1>
                            </div>

                            <div class="mt-2 text-slate-500">
                                Depuis 2013, Lif pratique le tatouage. Artiste
                                autodidacte, elle commence par s'entrainer sur
                                elle puis sur quelques proches. Rapidement, elle
                                s'installe dans un premier local afin de pouvoir
                                recevoir plus de clients. Indépendante Lif a
                                fait du tatouage son métier. Aujourd'hui,
                                installée chez Brut aux Pâquis, elle vous reçoit
                                sur rendez-vous pour réaliser vos projets.
                            </div>
                        </section>
                    </div>
                </div>
            </article>
            <article id="biography" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <div class="md:flex">
                        <section id="biography-image" class="md:shrink-0">
                            <img
                                class="w-full md:h-full md:w-48"
                                :src="image + 'img/info/portrait_lif.jpg'"
                                alt="Portrait"
                            />
                        </section>
                        <section id="biography-text" class="p-8">
                            <div
                                class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"
                            >
                                <h2 id="biography-title">Lif</h2>
                            </div>

                            <div class="mt-2 text-slate-500">
                                Née en 1980 en Turquie, c'est à l’âge de 2 ans
                                qu'elle s'installe avec ses parents dans le
                                quartier de la Jonction à Genève. Passionnée par
                                le dessin dès son enfance, c'est vers la
                                trentaine qu'elle décide d'en faire son métier.
                                Partagée entre l'illustration, le graffiti et le
                                tatouage, cette artiste pluridisciplinaire a su
                                se faire une place au sein de la scène
                                artistique genevoise.
                            </div>
                        </section>
                    </div>
                </div>
            </article>
            <article id="press" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <div class="grid">
                        <section id="press-image" class="flex justify-center">
                            <div class="md:shrink-0">
                                <img
                                    class="h-full w-full md:w-44 object-cover"
                                    :src="image + 'img/info/tattoo_01.jpg'"
                                    alt="Tattoo"
                                />
                            </div>
                            <div class="md:shrink-0">
                                <img
                                    class="h-full w-full md:w-44 object-cover"
                                    :src="image + 'img/info/tattoo_02.jpg'"
                                    alt="Tattoo"
                                />
                            </div>
                            <div class="md:shrink-0">
                                <img
                                    class="h-full w-full md:w-44 object-cover"
                                    :src="image + 'img/info/tattoo_03.jpg'"
                                    alt="Tattoo"
                                />
                            </div>
                            <div class="md:shrink-0">
                                <img
                                    class="h-full w-full md:w-44 object-cover"
                                    :src="image + 'img/info/tattoo_04.jpg'"
                                    alt="Tattoo"
                                />
                            </div>
                        </section>
                        <section id="press-text" class="p-8">
                            <div
                                class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"
                            >
                                <h3 id="press-title">Presse</h3>
                            </div>
                            <div class="mt-2 text-slate-500">
                                <ul>
                                    <li>Lights Magazine Vol. 1 - 15.02.2018</li>
                                    <li>Tribune de Genève - 15.08.2018</li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </article>
        </div>
    </main>
</template>

<style scoped></style>
