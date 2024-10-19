<script setup>
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
import ButtonCreated from "@/Components/DefaultLayout/ButtonCreated.vue";
</script>

<template>
  <DefaultLayout>
    <div class="flex justify-between items-center">
      <TitlePage title="Admin" />
      <ButtonCreated routeName="admin.create" redirect="Create" />
    </div>
  </DefaultLayout>
</template>

<style></style>
