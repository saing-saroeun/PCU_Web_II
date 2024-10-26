<script setup>
import Pagination from "@/Components/Dentist/Pagination.vue";
import SearchOutline from "@/Components/Dentist/Icons/SearchOutline.vue";
import { ref } from "vue";

const treatments = [
    {
        patient: "John Doe",
        date_visit: "2024-10-20",
        no_s: "12345",
        treatment: "Dental Cleaning",
        description: "Routine cleaning and polishing",
        price: "$100",
        remark: "Follow-up in 6 months",
    },
    {
        patient: "Jane Smith",
        date_visit: "2024-10-22",
        no_s: "67890",
        treatment: "Tooth Extraction",
        description: "Upper left molar extraction",
        price: "$150",
        remark: "Avoid solid food for 24 hours",
    },
    {
        patient: "Michael Johnson",
        date_visit: "2024-10-25",
        no_s: "24680",
        treatment: "Root Canal",
        description: "Root canal on lower right molar",
        price: "$300",
        remark: "Prescribed pain relievers",
    },
    {
        patient: "Emily Davis",
        date_visit: "2024-10-26",
        no_s: "13579",
        treatment: "Cavity Filling",
        description: "Composite filling on upper incisor",
        price: "$120",
        remark: "Schedule check-up in 3 months",
    },
    {
        patient: "Chris Wilson",
        date_visit: "2024-10-27",
        no_s: "11223",
        treatment: "Teeth Whitening",
        description: "Professional whitening treatment",
        price: "$200",
        remark: "Avoid dark beverages for 48 hours",
    },
];

const links = ref([
    { label: "&laquo; Previous", url: null, active: false },
    { label: "1", url: "#", active: true },
    { label: "2", url: "#", active: false },
    { label: "3", url: "#", active: false },
    { label: "&raquo;", url: "#", active: false },
]);
</script>

<template>
    <div class="relative h-10 w-72">
        <input
            class="w-full px-8 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
            type="search"
            placeholder="ស្វែងរកការព្យាបាល..."
        />
        <SearchOutline
            class="absolute left-2 top-1/2 translate-y-[-50%]"
            :size="18"
            color="#C9C9C9"
        />
    </div>
    <div class="mt-2">
        <table class="w-full text-center bg-colorTableHead rounded-md">
            <thead>
                <tr>
                    <th scope="col" class="p-3">#</th>
                    <th scope="col" class="p-3 text-start">Patient</th>
                    <th scope="col" class="p-3 text-start">Date Visit</th>
                    <th scope="col" class="p-3 text-start">No./s</th>
                    <th scope="col" class="p-3 text-start">Treatment</th>
                    <th scope="col" class="p-3 text-start">Description</th>
                    <th scope="col" class="p-3 text-start">Price</th>
                    <th scope="col" class="p-3 text-start">Remark</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(item, index) in treatments"
                    :key="index"
                    class="bg-white border-y-1.5 hover:bg-colorHoverTable"
                >
                    <th scope="row" class="font-bold whitespace-nowrap">
                        {{ index + 1 }}
                    </th>
                    <td class="p-3 text-start">{{ item.patient }}</td>
                    <td class="p-3 text-start text-nowrap">
                        {{ item.date_visit }}
                    </td>
                    <td class="p-3 text-start">{{ item.no_s }}</td>
                    <td class="p-3 text-start">{{ item.treatment }}</td>
                    <td class="p-3 text-start">{{ item.description }}</td>
                    <td class="p-3 text-start text-blue-500">
                        {{ item.price }}
                    </td>
                    <td class="p-3 text-start">{{ item.remark }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div
        class="bg-colorTableHead rounded-b-md flex justify-between items-center py-2 px-4"
    >
        <h3>ការព្យាបាលសរុប ({{ treatments.length }})</h3>
        <Pagination :links="links" />
    </div>
</template>

<style></style>
