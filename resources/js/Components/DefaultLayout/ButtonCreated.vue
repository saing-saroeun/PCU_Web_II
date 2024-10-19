<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    redirect: String,
    routeName: String
});
</script>

<template>
    <Link :href="route(routeName)">
    <div
        class="px-6 rounded-xl text-white bg-[#006BDC] py-2 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
        {{ redirect }}
    </div>
    </Link>
</template>

<style></style>
