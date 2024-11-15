<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    subIndex: Number,
    title: String,
    href: String,
    active: Boolean
})

const classes = computed(() =>
    props.active
        ? 'bg-gray-300'
        : '',
);
</script>

<template>
    <Link :href="route(href)" :key="subIndex" :class="classes"
        class="menu-item hover:bg-gray-100 rounded-bl-md rounded-tl-md bg-red-500" v-if="href">
    <p class="flex-auto py-[6px] px-3 text-nowrap">
        {{ title }}
    </p>
    </Link>

    <Link href="#" class="menu-item" :class="classes" v-else>
    <p class="flex-auto py-[6px] px-3 text-nowrap hover:bg-gray-100 rounded-bl-md rounded-tl-md bg-red-500">
        {{ title }}
    </p>
    </Link>
</template>

<style scoped></style>