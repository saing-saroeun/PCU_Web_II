<script setup>
import { ref } from "vue";
import { Link, useForm } from "@inertiajs/vue3";
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
import ButtonCreated from "@/Components/DefaultLayout/ButtonCreated.vue";
import SearchOutline from "@/Components/Dentist/Icons/SearchOutline.vue";
import EditIcon from "@/Components/Dentist/Icons/EditIcon.vue";
import DeleteIcon from "@/Components/Dentist/Icons/DeleteIcon.vue";
import Pagination from "@/Components/Dentist/Pagination.vue";

const admins = ref([
  {
    id: 1,
    img: "https://i.pinimg.com/736x/02/6c/40/026c400b20b775e4c0428974663af0e5.jpg",
    name: "John Doe",
    displayName: "Admin JD",
    address: "123 Admin St, Phnom Penh",
    contact: "012 345 678",
    email: "john@example.com",
    status: "Active",
  },
  {
    id: 2,
    img: "https://i.pinimg.com/736x/ca/a7/1f/caa71f88293ef2dd6901e32ac4bc566a.jpg",
    name: "Jane Smith",
    displayName: "Admin JS",
    address: "456 Admin Ave, Siem Reap",
    contact: "011 234 567",
    email: "jane@example.com",
    status: "Inactive",
  },
  {
    id: 3,
    img: "https://i.pinimg.com/736x/68/ae/33/68ae332372b9850b9961e31aac6855be.jpg",
    name: "Samrith Sok",
    displayName: "Admin SS",
    address: "789 Admin Blvd, Sihanoukville",
    contact: "092 111 222",
    email: "samrith@example.com",
    status: "Active",
  },
]);

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
      <TitlePage title="Admin" />
      <ButtonCreated routeName="admin.create" redirect="Create" />
    </div>

    <div class="py-2">
      <div class="relative h-10 w-72">
        <input
          class="w-full px-8 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
          type="search" placeholder="Search Admin..." />
        <SearchOutline class="absolute left-2 top-1/2 translate-y-[-50%]" :size="18" color="#C9C9C9" />
      </div>
    </div>

    <div>
      <table class="w-full text-center bg-colorTableHead rounded-md">
        <thead>
          <tr>
            <th scope="col" class="p-3">#</th>
            <th scope="col" class="p-3">រូបភាព</th>
            <th scope="col" class="p-3">ឈ្មោះ</th>
            <th scope="col" class="p-3">ឈ្មោះបង្ហាញ</th>
            <th scope="col" class="p-3">អាសយដ្ឋាន</th>
            <th scope="col" class="p-3">លេខទំនាក់ទំនង</th>
            <th scope="col" class="p-3">អ៊ីមែល</th>
            <th scope="col" class="p-3">ស្ថានភាព</th>
            <th scope="col" class="p-3">សកម្មភាព</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(admin, index) in admins" :key="admin.id" class="bg-white border-y-1.5 hover:bg-colorHoverTable">
            <th scope="row" class="font-bold whitespace-nowrap">
              {{ index + 1 }}
            </th>
            <td class="p-3">
              <img :src="admin.img" alt="Admin Image" class="w-10 h-10 object-cover rounded-full" />
            </td>
            <td class="p-3 text-black">{{ admin.name }}</td>
            <td class="p-3 text-black">{{ admin.displayName }}</td>
            <td class="p-3 text-black">{{ admin.address }}</td>
            <td class="p-3 text-black">{{ admin.contact }}</td>
            <td class="p-3 text-black">{{ admin.email }}</td>
            <td class="p-3 text-black">
              <span v-if="admin.status == 'Active'" class="px-2 py-1 bg-green-200 rounded-full">{{ admin.status
                }}</span>
              <span v-else class="px-2 py-1 bg-red-200 rounded-full">{{
                admin.status
                }}</span>
            </td>
            <td class="p-3">
              <div class="flex gap-1 items-center justify-center">
                <Link>
                <EditIcon :size="20" />
                </Link>
                <button @click="deleteAdmin(admin.id)">
                  <DeleteIcon :size="20" />
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div class="bg-colorTableHead rounded-b-md flex justify-between items-center py-2 px-4">
      <h3>អ្នកគ្រប់គ្រងសរុប (3)</h3>

      <Pagination :links="links" />
    </div>
  </DefaultLayout>
</template>
