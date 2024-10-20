<script setup>
import {ref} from "vue";
import Header from "@/Components/Dentist/Header.vue";
import Sidebar from "@/Components/Dentist/Sidebar.vue";

const isCollapsed = ref(false);

function toggleSidebar() {
    isCollapsed.value = !isCollapsed.value;
}

</script>

<template>
    <div class="admin-layout font-default-sans">
        <Header
            :toggle-sidebar="toggleSidebar"
            :is-collapsed = 'isCollapsed'
        />
        <div class="flex content-screen">
            <Sidebar
                :is-collapsed = 'isCollapsed'
            />
            <div class="text-black content overflow-y-auto p-2 h-full w-full">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>