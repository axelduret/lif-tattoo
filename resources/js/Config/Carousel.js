import { computed } from "@vue/reactivity";

export const carouselInterval = computed({
    // The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.
    get() {
        return "10000";
    },
});
export const carouselRide = computed({
    // Autoplays the carousel after the user manually cycles the first item. If "carousel", autoplays the carousel on load.
    get() {
        return "carousel";
    },
});
export const carouselTouch = computed({
    // Whether the carousel should support left/right swipe interactions on touchscreen devices.
    get() {
        return true;
    },
});
export const carouselWrap = computed({
    // 	Whether the carousel should cycle continuously or have hard stops.
    get() {
        return true;
    },
});
export const carouselPause = computed({
    // If set to "hover", pauses the cycling of the carousel on mouseenter and resumes the cycling of the carousel on mouseleave.
    // If set to false, hovering over the carousel won’t pause it. On touch-enabled devices, when set to "hover",
    // cycling will pause on touchend (once the user finished interacting with the carousel) for two intervals, before automatically resuming.
    // This is in addition to the mouse behavior.
    get() {
        return "hover";
    },
});
export const carouselKeyboard = computed({
    // Whether the carousel should react to keyboard events.
    get() {
        return true;
    },
});
