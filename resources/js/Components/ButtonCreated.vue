<script setup>
import AddIcon from '@/Components/Icon/AddIcon.vue';
import { Link } from '@inertiajs/vue3'
const props = defineProps({
    routeName: String
})
</script>

<template>
    <div>
        <Link :href="route(routeName)" class="flex gap-1 text-white bg-blue-500 rounded-md p-1.5 hover:bg-blue-800">
        <AddIcon :color="white" /> Create
        </Link>
    </div>
</template>

<style></style>