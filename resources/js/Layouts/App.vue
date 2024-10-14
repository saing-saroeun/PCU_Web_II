<script setup>
import { computed } from "vue";
import Header from "../Components/Header.vue";
import Sidebar from "../Components/Sides/Sidebar.vue";
import { useMenuSidebarStore } from "../Stores/MenuSidebar.js";

const menuStore = useMenuSidebarStore();
const isCollapsed = computed(() => !menuStore.showMenu);
</script>

<template>
    <div class="container-fluid">
        <Header :toggle-sidebar="menuStore.toggleMenu" :is-collapsed="isCollapsed" />
        <div class="flex content-screen w-full overflow-hidden">
            <Sidebar :is-collapsed="isCollapsed" />
            <div class="content overflow-y-auto p-2 md:p-3 h-full w-full">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
