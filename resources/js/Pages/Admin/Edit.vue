<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";

const props = defineProps({
  admin: Object,
});

const form = ref({
  full_name: props.admin?.full_name || "",
  address: props.admin?.address || "",
  tel_phone: props.admin?.tel_phone || "",
  email: props.admin?.email || "",
  password: "",
  password_confirmation: "",
  image: null,
  existingImage: props.admin?.image || null,
});

const handleFileChange = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.image = file;
    form.value.existingImage = URL.createObjectURL(file); // Preview new image
  }
};

const submitForm = (event) => {
  event.preventDefault();

  const formData = new FormData();
  formData.append("full_name", form.value.full_name);
  formData.append("address", form.value.address);
  formData.append("contact_no", form.value.tel_phone);
  formData.append("email", form.value.email);

  if (form.value.password) {
    formData.append("password", form.value.password);
    formData.append("password_confirmation", form.value.password_confirmation);
  }

  if (form.value.image) {
    formData.append("image", form.value.image);
  }

  router.post(route("admin.update", props.admin.id), formData, {
    onSuccess: () => alert("Admin updated successfully!"),
    onError: () => alert("An error occurred while updating the admin."),
  });
};
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

      <form @submit="submitForm" class="p-3 bg-white w-full grid grid-cols-2 gap-3 rounded-b-md">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col justify-start items-start gap-1">
            <label for="full_name">Full Name <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text" id="full_name" v-model="form.full_name" placeholder="ra panha" />
          </div>

          <div class="flex flex-col justify-start items-start gap-1">
            <label for="address">Address <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text" id="address" v-model="form.address" placeholder="123 Admin St, Phnom Penh" />
          </div>

          <div class="flex flex-col justify-start items-start gap-1">
            <label for="tel_phone">Contact No <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text" id="tel_phone" v-model="form.tel_phone" placeholder="000 000 000" />
          </div>

          <div class="flex flex-col justify-start items-start gap-1">
            <label for="email">Email <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text" id="email" v-model="form.email" placeholder="rapanha@email.com" />
          </div>
        </div>

        <div class="flex flex-col gap-2">
          <div class="flex flex-col justify-start items-start gap-1">
            <label for="password">Password <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text" id="password" v-model="form.password" placeholder="********" />
          </div>

          <div class="flex flex-col justify-start items-start gap-1">
            <label for="password_confirmation">Password Confirmation <span class="text-red-500">*</span></label>
            <input
              class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
              type="text" id="password_confirmation" v-model="form.password_confirmation" placeholder="********" />
          </div>

          <div class="flex flex-col justify-start items-start gap-1">
            <label for="image">Image</label>
            <input type="file" @change="handleFileChange" />

            <div v-if="form.existingImage" class="mt-2">
              <img :src="form.existingImage" alt="Admin Image" class="w-32 h-32 object-cover rounded-md border" />
            </div>
          </div>

          <div class="flex justify-end items-end">
            <button
              class="px-6 rounded-xl text-white bg-[#006BDC] py-2 shadow-lg transform hover:scale-105 active:scale-95 active:shadow-md transition duration-300 ease-in-out"
              type="submit">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </DefaultLayout>
</template>

<style></style>
