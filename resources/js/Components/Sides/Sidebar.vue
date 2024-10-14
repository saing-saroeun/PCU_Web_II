<script setup>
import { computed, ref } from "vue";
import { useMenuSidebarStore } from "../../Stores/MenuSidebar.js";
import MenuItem from "./MenuItem.vue";

const props = defineProps({
    isCollapsed: Boolean,
});

const store = useMenuSidebarStore();
const sidebars = computed(() => store.sidebars);
const activeIndex = ref(sidebars.value.findIndex((item) => item.active));

const updateActiveIndex = (index) => {
    activeIndex.value = index;
};
</script>

<template>
    <aside :class="{ 'sidebar-width': true, 'sidebar-collapsed': isCollapsed }"
        class="sidebar flex-shrink-0 h-full bg-primaryColor text-white overflow-y-auto pb-5 shadow-lg z-30">
        <template v-for="(item, index) in sidebars">
            <MenuItem :index="index" :title="item.title" :href="item.href" :items="item.child" :active="item.active"
                :activeIndex="activeIndex" @update:activeIndex="updateActiveIndex">
            <template v-slot:icon>
                <span v-html="item.icon"></span>
            </template>
            </MenuItem>
        </template>
    </aside>
</template>

<style scoped></style>
