import { defineStore } from "pinia";
import { computed, ref, onMounted, onUnmounted } from "vue";
import { usePage } from "@inertiajs/vue3";
import localStorage from "../Utils/LocalStorageUtil.js";

export const useMenuSidebarStore = defineStore("menu-sidebar", () => {
    const sidebars = computed(() => usePage().props.sidebars ?? []);
    const showMenu = ref(localStorage.getBooleanValue("showMenu"));

    function toggleMenu() {
        showMenu.value = !showMenu.value;
        localStorage.setValue("showMenu", showMenu.value.toString());
    }

    const width = ref(window.innerWidth);

    const updateWidth = () => {
        width.value = window.innerWidth;
    };

    onMounted(() => {
        window.addEventListener("resize", updateWidth);
    });

    onUnmounted(() => {
        window.removeEventListener("resize", updateWidth);
    });

    const isMobile = computed(() => width.value <= 500);

    return {
        sidebars,
        showMenu,
        toggleMenu,
        isMobile,
    };
});
