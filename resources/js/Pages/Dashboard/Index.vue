<script setup>
import DefaultLayout from '@/Layouts/Dentist/DefaultLayout.vue';
import TitleHeader from '@/Components/DefaultLayout/TitlePage.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <DefaultLayout>
    <TitleHeader title="Dashboard" />

    <div class="grid grid-cols-5 gap-3 mt-3">
      <Link href="#" class="bg-primaryColor rounded-md text-center h-32 relative center-in-flex justify-center">
      <div class="block">
        Super Master
        <p class="font-bold text-2xl text-white">32</p>
      </div>
      </Link>
      <Link href="#" class="bg-primaryColor rounded-md text-center h-32 relative center-in-flex justify-center">
      <div class="block">
        Super Master
        <p class="font-bold text-2xl text-white">32</p>
      </div>
      </Link>
      <Link href="#" class="bg-primaryColor rounded-md text-center h-32 relative center-in-flex justify-center">
      <div class="block">
        Super Master
        <p class="font-bold text-2xl text-white">32</p>
      </div>
      </Link>
    </div>
  </DefaultLayout>
</template>

<style></style>
