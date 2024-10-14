<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    title: String,
    href: String,
    active: Boolean,
});
</script>

<template>
    <Link :href="href" :class="{ 'text-amber-200': active }">
    <p class="py-1 px-2 text-sm">{{ title }}</p>
    </Link>
</template>

<style scoped></style>
