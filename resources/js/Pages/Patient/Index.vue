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

const patients = [
    {
        id: 1,
        name: 'ជា សុផាន',
        dob: '1990-05-12',
        gender: 'ប្រុស',
        insurance: 'មាន',
        contact_no: '0123456789',
        img: 'https://via.placeholder.com/100x100.png?text=Admin+1',
    },
    {
        id: 2,
        name: 'ស៊ីន សុមុនី',
        dob: '1985-08-23',
        gender: 'ស្រី',
        insurance: 'មិនមាន',
        contact_no: '0987654321',
        img: 'https://via.placeholder.com/100x100.png?text=Admin+2',
    },
    {
        id: 3,
        name: 'ជាតិ មុន្នី',
        dob: '1993-12-04',
        gender: 'ប្រុស',
        insurance: 'មាន',
        contact_no: '0876543210',
        img: 'https://via.placeholder.com/100x100.png?text=Admin+3',
    },
    {
        id: 4,
        name: 'ចេង មាស',
        dob: '1998-02-14',
        gender: 'ស្រី',
        insurance: 'មាន',
        contact_no: '0678943210',
        img: 'https://via.placeholder.com/100x100.png?text=Admin+4',
    },
    {
        id: 5,
        name: 'ហេង វិជ្ជា',
        dob: '1991-07-20',
        gender: 'ប្រុស',
        insurance: 'មិនមាន',
        contact_no: '0776543219',
        img: 'https://via.placeholder.com/100x100.png?text=Admin+5',
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
            <TitlePage title="អ្នកព្យាបាល" />
            <ButtonCreated routeName="patient.create" redirect="បង្កើត" />
        </div>

        <div class="py-2">
            <div class="relative h-10 w-72">
                <input
                    class="w-full px-8 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                    type="search" placeholder="ស្វែងរកអ្នកព្យាបាល..." />
                <SearchOutline class="absolute left-2 top-1/2 translate-y-[-50%]" :size="18" color="#C9C9C9" />
            </div>
        </div>

        <div>
            <table class="w-full text-center bg-colorTableHead rounded-md">
                <thead>
                    <tr>
                        <th scope="col" class="p-3">#</th>
                        <th scope="col" class="p-3">ឈ្មោះ</th>
                        <th scope="col" class="p-3">ថ្ងៃខែឆ្នាំកំណើត</th>
                        <th scope="col" class="p-3">ភេទ</th>
                        <th scope="col" class="p-3">លេខទំនាក់ទំនង</th>
                        <th scope="col" class="p-3">ការធានារ៉ាប់រង</th>
                        <th scope="col" class="p-3">សកម្មភាព</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(admin, index) in patients" :key="admin.id"
                        class="bg-white border-y-1.5 hover:bg-colorHoverTable">
                        <th scope="row" class="font-bold whitespace-nowrap">
                            {{ index + 1 }}
                        </th>
                        <td class="p-3 text-black">{{ admin.name }}</td>
                        <td class="p-3 text-black">{{ admin.dob }}</td>
                        <td class="p-3 text-black">{{ admin.gender }}</td>
                        <td class="p-3 text-black">{{ admin.contact_no }}</td>
                        <td class="p-3 text-black">{{ admin.insurance }}</td>
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
            <h3>អ្នកជំងឺសរុប ({{ patients.length }})</h3>

            <Pagination :links="links" />
        </div>
    </DefaultLayout>
</template>
