<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";

const currentTab = ref("Profiles");

const tabs = [
  { label: "Profiles" },
  { label: "Appointments" },
  { label: "Prescriptions" },
];

const links = ref([
  { url: null, label: "&laquo; Previous", active: false },
  { url: "http://example.com?page=1", label: "1", active: true },
  { url: "http://example.com?page=2", label: "2", active: false },
  { url: "http://example.com?page=3", label: "3", active: false },
  { url: "http://example.com?page=4", label: "4", active: false },
  { url: "http://example.com?page=5", label: "5", active: false },
  { url: "http://example.com?page=6", label: "&raquo;", active: false },
]);

const form = useForm({
  adminId: null,
});

const deleteAdmin = (id) => {
  if (confirm("Are you sure you want to delete this admin?", id)) {
    form.adminId = id;
    form.delete(route("admin.destroy", id));
  }
};
</script>

<template>
  <DefaultLayout>
    <div class="flex justify-between items-center">
      <TitlePage title="Patient / Detail" />
    </div>

    <div
      class="w-auto h-auto flex justify-start items-center gap-3 bg-colorTableHead p-1.5 rounded-md mt-2"
    >
      <button
        v-for="(tab, index) in tabs"
        :key="index"
        @click="currentTab = tab.label"
        :class="{
          'border-b-1 border- text-colorTextHeader rounded-md py-2 px-1.5 bg-white':
            currentTab === tab.label,
          'text-gray-500': currentTab !== tab.label,
        }"
        class="py-0.5 px-1 hover:text-colorTextHeader focus:outline-none transition duration-300 flex items-center space-x-2"
      >
        <span>{{ tab.label }}</span>
      </button>
    </div>
    <div class="h-full p-2">
      <template v-if="currentTab === 'Profiles'">
        <p>This profile</p>
      </template>

      <template v-if="currentTab === 'Appointments'">
        <p>This Appointment</p>
      </template>

      <template v-if="currentTab === 'Prescriptions'">
        <p>This prescriptions</p>
      </template>
    </div>
  </DefaultLayout>
</template>
