<script>
import { Head } from "@inertiajs/inertia-vue3";
import Header from "../Components/Header.vue";
import {
    LocationMarkerIcon,
    MailIcon,
    PhoneIcon,
    AnnotationIcon,
} from "@heroicons/vue/outline";
import {} from "@heroicons/vue/solid";
import {
    LMap,
    LIcon,
    LTileLayer,
    LControlLayers,
    LControlAttribution,
    LMarker,
    LTooltip,
    LPopup,
} from "@vue-leaflet/vue-leaflet";
export default {
    components: {
        Head,
        LMap,
        LIcon,
        LTileLayer,
        LControlAttribution,
        LMarker,
        LTooltip,
        LocationMarkerIcon,
        MailIcon,
        LControlLayers,
        PhoneIcon,
        LPopup,
        Header,
        AnnotationIcon,
    },
    props: {
        page: Object,
        links: Array,
    },
    data() {
        return {
            zoom: 17,
            maxZoom: 19,
            minZoom: 6,
            iconWidth: 25,
            iconHeight: 40,
            url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
            layerType: "base",
            layerName: "OpenStreetMap",
            center: [46.210482, 6.14767],
            latLng: [46.209992, 6.14767],
            popupOptions: { closeButton: false },
            mapOptions: {
                attributionControl: false,
                trackResize: true,
                boxZoom: true,
                scrollWheelZoom: false,
                touchZoom: true,
                gestureHandling: false,
            },
        };
    },
    computed: {
        image: () => {
            return "/storage/";
        },
        iconUrl() {
            return this.image + "icon/marker.svg";
        },
    },
    methods: {
        openPopup() {
            const map = this.$refs.myMap.leafletObject;
            const popup = `<article><div><div style="width:275px" class="flex justify-content items-start"><section id="popup-image"><img class=" py-1 w-32" src="${this.image}img/contact/shop.jpg" alt="Arcade"></section><section id="popup-text" class="pl-8 pt-6 nowrap"><div class="uppercase text-indigo-500 text-sm font-medium"><h5 id="location-title">Lif Tattoo &<br/>Art Gallery</h5></div><div class=" text-slate-500"><ul><li><div class="mt-4"><div class="block">6, rue Sismondi.</div><div class="block">1201 Genève</div></div></li><li><div class="font-semibold mt-4">079 711 80 42</div></li></ul></div></section></div></div></article>`;
            this.$nextTick(() => {
                map.openPopup(popup, this.latLng, this.popupOptions);
            });
        },
    },
};
</script>

<template>
    <!-- TODO: Add leaflet gesture handling -->
    <Head :title="page.title" />
    <Header :links="links" />
    <main id="contact-page">
        <div class="grid p-0 sm:px-4 sm:py-2 md:py-3 bg-blue-900 bg-opacity-10">
            <article id=" address" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <div class="md:flex">
                        <section id="address-image" class="md:shrink-0">
                            <img
                                class="w-full md:h-full md:w-48"
                                :src="image + 'img/contact/shop.jpg'"
                                alt="Arcade"
                            />
                        </section>
                        <section id="address-text" class="p-8">
                            <div
                                class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"
                            >
                                <h1 id="biography-title">
                                    Lif Tattoo & Art Gallery
                                </h1>
                            </div>

                            <div class="mt-2 text-slate-500">
                                <ul>
                                    <li>Exclusivement sur rendez-vous.</li>
                                    <li>
                                        <div
                                            class="flex justify-start items-center mt-4"
                                        >
                                            <span class="sr-only"
                                                >Addresse</span
                                            >
                                            <LocationMarkerIcon
                                                class="h-4 w-4 mr-2"
                                                aria-hidden="true"
                                            />6, rue Sismondi. 1201 Genève
                                            (Pâquis)
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex justify-start items-center"
                                        >
                                            <span class="sr-only">Email</span>
                                            <MailIcon
                                                class="h-4 w-4 mr-2"
                                                aria-hidden="true"
                                            />contact@lif-tattoo.com
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex justify-start items-center"
                                        >
                                            <span class="sr-only"
                                                >Téléphone</span
                                            >
                                            <PhoneIcon
                                                class="h-4 w-4 mr-2"
                                                aria-hidden="true"
                                            />079 711 80 42
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </article>
            <article id="form" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <section
                        id="form-title"
                        class="px-4 py-5 sm:px-6 sm:border-t-0 border-t sm:border-b border-b-0 bg-slate-100"
                    >
                        <div class="flex justify-start items-center">
                            <div
                                class="font-thin text-slate-500 opacity-80 pl-2"
                            >
                                <span class="sr-only">Message</span>
                                <AnnotationIcon
                                    class="h-7 w-7 ml-4 mr-8"
                                    aria-hidden="true"
                                />
                            </div>
                            <div class="pl-6 pr-4 border-l-2">
                                <h2
                                    class="tracking-wide text-lg leading-6 font-semibold text-slate-500"
                                >
                                    Formulaire de contact
                                </h2>
                                <div
                                    class="mt-1 max-w-2xl text-sm text-slate-600 inline sm:block"
                                >
                                    Veuillez remplir les champs indiqués
                                    ci-dessous.
                                </div>
                                <div
                                    class="mt-1 max-w-2xl text-sm text-slate-600 inline sm:block"
                                >
                                    Je vous répondrai dans les meilleurs délais.
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="form-content">
                        <form action="#" method="POST">
                            <div
                                class="shadow sm:rounded-b-md sm:overflow-hidden"
                            >
                                <div class="px-4 pt-5 pb-4 bg-white space-y-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label
                                                for="company-website"
                                                class="text-sm text-slate-500 font-semibold"
                                            >
                                                Email
                                            </label>
                                            <div
                                                class="mt-1 flex rounded-md shadow-sm"
                                            >
                                                <span
                                                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"
                                                >
                                                    @
                                                </span>
                                                <input
                                                    type="email"
                                                    name="email"
                                                    id="email"
                                                    class="focus:ring-slate-500 focus:border-slate-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                    placeholder="nom@exemple.ch"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label
                                            for="message"
                                            class="text-sm text-slate-500 font-semibold"
                                        >
                                            Message
                                        </label>
                                        <div class="mt-1">
                                            <textarea
                                                id="message"
                                                name="message"
                                                rows="10"
                                                class="shadow-sm focus:ring-slate-500 focus:border-slate-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                placeholder="Votre texte ici ..."
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-4 bg-white pt-2 pb-5 border-b sm:border-b-0 text-right"
                                >
                                    <button
                                        type="submit"
                                        class="w-full sm:w-48 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-400 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400"
                                    >
                                        Envoyer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </article>
            <article id="map-section" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto bg-slate-100 sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <section id="map-content" class="">
                        <div
                            style="height: 75vh; width: 100%"
                            class="p-4 bg-white space-y-6"
                        >
                            <l-map
                                ref="myMap"
                                @ready="openPopup()"
                                :options="mapOptions"
                                v-model:zoom="zoom"
                                v-model:maxZoom="maxZoom"
                                v-model:minZoom="minZoom"
                                :center="center"
                            >
                                <l-tile-layer
                                    :layer-type="layerType"
                                    :name="layerName"
                                    :url="url"
                                >
                                </l-tile-layer>
                                <l-control-attribution
                                    position="bottomright"
                                    prefix="<a href='https://clairveillance.ch' target='_blank'>Clairveillance 2022 &copy</a>"
                                />
                                <l-marker
                                    :lat-lng="latLng"
                                    @click="openPopup()"
                                >
                                    <l-icon
                                        :icon-url="iconUrl"
                                        :icon-size="iconSize"
                                    />
                                </l-marker>
                            </l-map>
                        </div>
                    </section>
                </div>
            </article>
        </div>
    </main>
</template>
<style scoped></style>
