<script setup>
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <DefaultLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12 flex justify-between items-center gap-4">
            <div class="w-full">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        You're logged in!
                    </div>
                </div>
            </div>

            <a href="https://www.youtube.com/" target="_blank">Youtube</a>
            <div class="w-full">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        You're logged in!
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </DefaultLayout>
</template>
