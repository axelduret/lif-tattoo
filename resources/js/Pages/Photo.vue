<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Header from "../Components/Header.vue";
import { computed } from "@vue/reactivity";
import "tw-elements";
import { carouselConfig } from "../Config/carouselConfig";
const props = defineProps({
    page: Object,
    links: Object,
    imagesCollection: Array,
});
const storage = computed({
    get() {
        return "/storage/img/info/";
    },
});
const filteredCollection = computed({
    get() {
        return props.imagesCollection.filter((i) => i.id !== 0);
    },
});
</script>

<template>
    <Head :title="page.title" />
    <Header :links="links" />
    <main id="photo-page">
        <div
            class="grid p-0 sm:px-4 sm:py-2 md:py-3 bg-blue-900 bg-opacity-10"
            style="height: calc(100vh - 66px); overflow: hidden"
        >
            <article id="photo-carousel" class="m-0 p-0 sm:py-2 md:py-4">
                <div
                    class="mx-0 md:mx-auto bg-white sm:rounded-xl shadow-md overflow-hidden md:max-w-2xl"
                >
                    <div class="grid">
                        <section id="photo-carousel-content" class="">
                            <div
                                id="photo-carousel-items"
                                class="carousel slide relative"
                                :data-bs-interval="carouselConfig.interval"
                                :data-bs-ride="carouselConfig.ride"
                                :data-bs-touch="carouselConfig.touch"
                                :data-bs-wrap="carouselConfig.wrap"
                                :data-bs-keyboard="carouselConfig.keyboard"
                                :data-bs-pause="carouselConfig.pause"
                            >
                                <div
                                    class="carousel-inner relative overflow-hidden"
                                >
                                    <div class="carousel-item active">
                                        <img
                                            :src="
                                                storage +
                                                imagesCollection[0].path
                                            "
                                            class="relative right-44 sm:right-0 w-full sm:w-auto"
                                            :alt="imagesCollection[0].name"
                                        />
                                        <div
                                            class="carousel-caption block absolute text-center"
                                        >
                                            <h5 class="text-xl">
                                                {{ imagesCollection[0].name }}
                                            </h5>
                                            <!-- <p>{{ image.description }}</p> -->
                                        </div>
                                    </div>
                                    <div
                                        v-for="image in filteredCollection"
                                        :key="image.id"
                                        class="carousel-item"
                                    >
                                        <img
                                            :src="storage + image.path"
                                            class="relative right-44 sm:right-0 w-full sm:w-auto"
                                            :alt="image.name"
                                        />
                                        <div
                                            class="carousel-caption block absolute text-center"
                                        >
                                            <h5 class="text-xl">
                                                {{ image.name }}
                                            </h5>
                                            <!-- <p>{{ image.description }}</p> -->
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                                    type="button"
                                    data-bs-target="#photo-carousel-items"
                                    data-bs-slide="prev"
                                >
                                    <span
                                        class="carousel-control-prev-icon inline-block bg-no-repeat"
                                        aria-hidden="true"
                                    ></span>
                                    <span class="visually-hidden"
                                        >Previous</span
                                    >
                                </button>
                                <button
                                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                                    type="button"
                                    data-bs-target="#photo-carousel-items"
                                    data-bs-slide="next"
                                >
                                    <span
                                        class="carousel-control-next-icon inline-block bg-no-repeat"
                                        aria-hidden="true"
                                    ></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </section>
                    </div>
                </div>
            </article>
        </div>
    </main>
</template>

<style scoped></style>
