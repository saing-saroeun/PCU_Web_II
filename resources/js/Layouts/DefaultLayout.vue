<script setup>
import Header from '@/Components/Header.vue';
</script>

<template>
    <div class="flex h-screen overflow-hidden">
        <Header />
        <div>
            <slot />
        </div>
    </div>
</template>

<style></style>