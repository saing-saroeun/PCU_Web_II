<script setup>
import { ref } from "vue";
import { Link, useForm } from "@inertiajs/vue3";
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
import ButtonCreated from "@/Components/DefaultLayout/ButtonCreated.vue";
import SearchOutline from "@/Components/Dentist/Icons/SearchOutline.vue";
import EditIcon from "@/Components/Dentist/Icons/EditIcon.vue";
import DeleteIcon from "@/Components/Dentist/Icons/DeleteIcon.vue";
import DetailIcon from "@/Components/Dentist/Icons/DetailIcon.vue";
import Pagination from "@/Components/Dentist/Pagination.vue";

const admins = [
  {
    id: 1,
        img: "https://i.pinimg.com/736x/ac/c5/30/acc5307842149c8d3818f37bd902f4de.jpg",
    name: "John Doe",
    displayName: "Specialist",
    gender: "Male",
    contact: "0123456789",
    email: "john.doe@example.com",
    status: "Active",
  },
  {
    id: 2,
      img: "https://i.pinimg.com/enabled/564x/04/c8/b9/04c8b9214951b3d17f406e262f217d0f.jpg",
    name: "Jane Smith",
    displayName: "General Dentist",
    gender: "Female",
    contact: "0987654321",
    email: "jane.smith@example.com",
    status: "Inactive",
  },
  {
    id: 3,
      img: "https://i.pinimg.com/736x/7a/d3/9b/7ad39b7a6bd36922675c0ff7d5c7132b.jpg",
    name: "Sokha Kim",
    displayName: "Orthodontist",
    gender: "Male",
    contact: "011223344",
    email: "sokha.kim@example.com",
    status: "Active",
  },
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
            <TitlePage title="Dentist" />
            <ButtonCreated routeName="dentist.create" redirect="Create" />
        </div>

        <div class="py-2">
            <div class="relative h-10 w-72">
                <input
                    class="w-full px-8 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                    type="search" placeholder="Search Dentist..." />
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
                        <th scope="col" class="p-3">ឯកទេស</th>
                        <th scope="col" class="p-3">ភេទ</th>
                        <th scope="col" class="p-3">លេខទំនាក់ទំនង</th>
                        <th scope="col" class="p-3">អ៊ីមែល</th>
                        <th scope="col" class="p-3">ស្ថានភាព</th>
                        <th scope="col" class="p-3">សកម្មភាព</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(admin, index) in admins" :key="admin.id"
                        class="bg-white border-y-1.5 hover:bg-colorHoverTable">
                        <th scope="row" class="font-bold whitespace-nowrap">
                            {{ index + 1 }}
                        </th>
                        <td class="p-3">
                            <img :src="admin.img" alt="Admin Image" class="w-10 h-10 object-cover rounded-full" />
                        </td>
                        <td class="p-3 text-black">{{ admin.name }}</td>
                        <td class="p-3 text-black">{{ admin.displayName }}</td>
                        <td class="p-3 text-black">{{ admin.gender }}</td>
                        <td class="p-3 text-black">{{ admin.contact }}</td>
                        <td class="p-3 text-black">{{ admin.email }}</td>
                        <td class="p-3 text-black">
                            <span v-if="admin.status == 'Active'" class="px-2 py-1 bg-green-200 rounded-full">{{
                                admin.status }}</span>
                            <span v-else class="px-2 py-1 bg-red-200 rounded-full">{{
                                admin.status
                                }}</span>
                        </td>
                        <td class="p-3">
                            <div class="flex gap-1 items-center justify-center">
                                <Link>
                                <DetailIcon :size="20" />
                                </Link>
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
            <h3>ពេទ្យធ្មេញសរុប (3)</h3>

            <Pagination :links="links" />
        </div>
    </DefaultLayout>
</template>
