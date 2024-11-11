<script setup>
import { ref, watch } from "vue";
import { Link, useForm } from "@inertiajs/vue3";
import { debounce } from "lodash";
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
import ButtonCreated from "@/Components/DefaultLayout/ButtonCreated.vue";
import SearchOutline from "@/Components/Dentist/Icons/SearchOutline.vue";
import EditIcon from "@/Components/Dentist/Icons/EditIcon.vue";
import DeleteIcon from "@/Components/Dentist/Icons/DeleteIcon.vue";
import Pagination from "@/Components/Dentist/Pagination.vue";

const props = defineProps({
    admins: Array,
})

const search = ref(props.search);

const deleteAdmin = (id) => {
    if (confirm("Are you sure you want to delete this admin?", id)) {
        form.adminId = id;
        form.delete(route("admin.destroy", id));
    }
};

const sampleLinks = [
    { url: '?page=1', label: '1', active: true },
    { url: '?page=2', label: '2', active: false },
    { url: '?page=3', label: '3', active: false },
    { url: '?page=4', label: '4', active: false },
    { url: '?page=2', label: 'pagination.next', active: false }
];
</script>

<template>
    <DefaultLayout>
        <div class="flex justify-between items-center">
            <TitlePage title="អ្នកគ្រប់គ្រង" />
            <ButtonCreated routeName="admin.create" redirect="បង្កើត" />
        </div>

        <div class="py-2">
            <div class="relative h-10 w-72">
                <input id="search"
                    class="w-full px-8 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                    type="search" placeholder="ស្វែងរកអ្នកគ្រប់គ្រង..." />
                <SearchOutline class="absolute left-2 top-1/2 translate-y-[-50%]" :size="18" color="#C9C9C9" />
            </div>
        </div>

        <div>
            <table class="w-full text-center bg-colorTableHead rounded-md">
                <thead>
                    <tr>
                        <th scope="col" class="p-3">#</th>
                        <th scope="col" class="p-3 text-nowrap">រូបភាព</th>
                        <th scope="col" class="p-3 text-start">ឈ្មោះ</th>
                        <th scope="col" class="p-3 text-start">អាសយដ្ឋាន</th>
                        <th scope="col" class="p-3 text-start">លេខទំនាក់ទំនង</th>
                        <th scope="col" class="p-3 text-start">អ៊ីមែល</th>
                        <th scope="col" class="p-3">ស្ថានភាព</th>
                        <th scope="col" class="p-3">សកម្មភាព</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(admin, index) in admins" :key="index"
                        class="bg-white border-y-1.5 hover:bg-colorHoverTable">
                        <th scope="row" class="font-bold whitespace-nowrap">
                            {{ index + 1 }}
                        </th>
                        <td class="p-3">
                            <img :src="admin.image" alt="Admin Image" class="w-10 h-10 object-cover rounded-full" />
                        </td>
                        <td class="p-3 text-black text-start">{{ admin.full_name }}</td>
                        <td class="p-3 text-black text-start">{{ admin.address }}</td>
                        <td class="p-3 text-black text-start">{{ admin.tel_phone }}</td>
                        <td class="p-3 text-black text-start">{{ admin.email }}</td>
                        <td class="p-3 text-black">
                            <span v-if="admin.status == 'active'" class="px-2 py-1 bg-green-200 rounded-full">{{
                                admin.status }}</span>
                            <span v-if="admin.status == 'inactive'" class="px-2 py-1 bg-red-200 rounded-full">{{
                                admin.status }}</span>
                        </td>
                        <td class="p-3">
                            <div class="flex gap-1 items-center justify-center">
                                <Link>
                                <EditIcon :size="20" class="hover:scale-110" />
                                </Link>
                                <button @click="deleteAdmin(admin.id)">
                                    <DeleteIcon :size="20" class="hover:scale-110" />
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-colorTableHead rounded-b-md flex justify-between items-center py-2 px-4">
            <h3>អ្នកគ្រប់គ្រងសរុប ({{ admins.length }})</h3>

            <Pagination :links="sampleLinks" />
        </div>
    </DefaultLayout>
</template>
