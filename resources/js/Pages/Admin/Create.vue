<script setup>
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
</script>

<template>
  <DefaultLayout>
    <div class="flex justify-between items-center">
      <TitlePage title="Admin / Create" />
    </div>

    <div class="py-2">
      <div class="py-2 px-4 bg-colorTableHead rounded-t-md">
        <h3 class="text-lg text-colorTextHeader">ព័ត៌មានអ្នកគ្រប់គ្រង</h3>
      </div>

      <form class="p-3 bg-white w-full grid grid-cols-2 gap-3 rounded-b-md">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col justify-start items-start gap-1">
            <label>Full Name <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text"
              placeholder="ra panha"
            />
          </div>
          <div class="flex flex-col justify-start items-start gap-1">
            <label>Address <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text"
              placeholder="123 Admin St, Phnom Penh"
            />
          </div>
          <div class="flex flex-col justify-start items-start gap-1">
            <label>Contact No <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text"
              placeholder="000 000 000"
            />
          </div>
          <div class="flex flex-col justify-start items-start gap-1">
            <label>Email <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text"
              placeholder="rapanha@email.com"
            />
          </div>
        </div>

        <div class="flex flex-col gap-2">
          <div class="flex flex-col justify-start items-start gap-1">
            <label>Password <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text"
              placeholder="********"
            />
          </div>
          <div class="flex flex-col justify-start items-start gap-1">
            <label>Password Confirmation <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text"
              placeholder="********"
            />
          </div>
          <div class="flex flex-col justify-start items-start gap-1">
            <label>Image</label>
            <input type="file" placeholder="" />
          </div>

          <div class="flex justify-end items-end">
            <button
              class="px-6 rounded-xl text-white bg-[#006BDC] py-2 shadow-lg transform hover:scale-105 active:scale-95 active:shadow-md transition duration-300 ease-in-out"
              type="submit"
            >
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </DefaultLayout>
</template>

<style></style>
