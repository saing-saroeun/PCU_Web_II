<script setup>
    const props = defineProps({
        title: String
    })
</script>

<template>
    <div>
        <h1 class="inline-block rounded-full px-4 py-2 bg-gray-200">{{ title }}</h1>
    </div>
</template>

<style>
    
</style>