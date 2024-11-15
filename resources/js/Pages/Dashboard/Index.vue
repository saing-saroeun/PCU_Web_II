<script setup>
import { Link } from '@inertiajs/vue3';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import TitleHeader from '@/Components/DefaultLayout/TitlePage.vue';
import PatientIcon from '@/Components/Dentist/Icons/PatientIcon.vue';
import AppointmentIcon from '@/Components/Dentist/Icons/AppointmentIcon.vue';
</script>

<template>
  <DefaultLayout>
    <TitleHeader title="Dashboard" />

    <div class="grid grid-cols-4 gap-3 mt-3">
      <Link href="#" class="bg-white rounded-md text-center h-24 relative center-in-flex justify-start px-4">
      <div class="flex flex-col">
        Patients
        <div class="flex justify-start items-start gap-2">
          <div class="w-10 h-10 flex justify-center items-center rounded-full bg-gray-100">
            <PatientIcon color="blue" />
          </div>
          <p class="font-bold text-2xl text-black">32</p>
        </div>
      </div>
      </Link>

      <Link href="#" class="bg-white rounded-md text-center h-24 relative center-in-flex justify-start px-4">
      <div class="flex flex-col">
        Confirmed Appointments
        <div class="flex justify-start items-start gap-2">
          <div class="w-10 h-10 flex justify-center items-center rounded-full bg-gray-100">
            <AppointmentIcon color="blue" size="20" />
          </div>
          <p class="font-bold text-2xl text-black">10</p>
        </div>
      </div>
      </Link>

      <Link href="#" class="bg-white rounded-md text-center h-24 relative center-in-flex justify-start px-4">
      <div class="flex flex-col">
        Prescriptions
        <div class="flex justify-start items-start gap-2">
          <div class="w-10 h-10 flex justify-center items-center rounded-full bg-gray-100">
            <AppointmentIcon color="blue" size="20" />
          </div>
          <p class="font-bold text-2xl text-black">4</p>
        </div>
      </div>
      </Link>
    </div>
  </DefaultLayout>
</template>

<style></style>
