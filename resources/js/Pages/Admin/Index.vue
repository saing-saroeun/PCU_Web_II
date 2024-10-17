<script setup>
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
</script>

<template>
  <DefaultLayout>
    <TitlePage title="Admin" />
    <!-- Table -->
    <div class="py-3.5 overflow-x-auto">
      <table class="w-full text-center border rtl:text-right bg-primaryColor text-white">
        <thead>
          <tr class="divide-x">
            <th scope="col" class="p-2">#</th>
            <th scope="col" class="p-2">កែប្រែ</th>
            <th scope="col" class="p-2">ឈ្មោះប្រើប្រាស់</th>
            <th scope="col" class="p-2">ឈ្មោះចូលប្រព័ន្ធ</th>
            <th scope="col" class="p-2">ក្រុមអនុញ្ញាត</th>
            <th scope="col" class="p-2">លេខទូរសព្ទ</th>
            <th scope="col" class="p-2">ចូលប្រើចុងក្រោយ</th>
            <th scope="col" class="p-2">IP ចុងក្រោយ</th>
            <th scope="col" class="p-2">ផ្អាក</th>
            <th scope="col" class="p-2">ស្ថានភាព</th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="(item, index) in 10"
            class="bg-white border-b divide-x hover:bg-gray-700 dark:bg-gray-800"
          >
            <th scope="row" class="font-bold whitespace-nowrap text-white">
              {{ index + 1 }}
            </th>
            <td class="p-2"></td>
            <td class="p-2"></td>
            <td class="p-2">Sub MKT</td>
            <td class="p-2 font-bold">Report</td>
            <td class="p-2">094 4848 44</td>
            <td class="p-2">05/12/2024, 01:21:12 AM</td>
            <td class="p-2">192.168.0.1</td>
            <td class="p-2"></td>
            <td class="p-2 text-green-500">បើក</td>
          </tr>
        </tbody>
      </table>
    </div>
  </DefaultLayout>
</template>

<style></style>
