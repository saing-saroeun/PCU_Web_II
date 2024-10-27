<script setup>
import Pagination from "@/Components/Dentist/Pagination.vue";
import SearchOutline from "@/Components/Dentist/Icons/SearchOutline.vue";
import { ref } from "vue";

const prescriptions = [
    { day: "Monday", medicine: "Aspirin", remark: "Take after breakfast" },
    { day: "Tuesday", medicine: "Ibuprofen", remark: "Take with water" },
    { day: "Wednesday", medicine: "Paracetamol", remark: "Take before bed" },
    { day: "Thursday", medicine: "Vitamin C", remark: "Morning dose" },
    { day: "Friday", medicine: "Antibiotic", remark: "Complete full course" },
    { day: "Saturday", medicine: "Antacid", remark: "After meals" },
    { day: "Sunday", medicine: "Omega-3", remark: "Take with food" },
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
            placeholder="ស្វែងរកវេជ្ជបញ្ជា..."
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
                    <th scope="col" class="p-3 text-start">Day</th>
                    <th scope="col" class="p-3 text-start">Medicine</th>
                    <th scope="col" class="p-3 text-start">Remark</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(item, index) in prescriptions"
                    :key="index"
                    class="bg-white border-y-1.5 hover:bg-colorHoverTable"
                >
                    <th scope="row" class="font-bold whitespace-nowrap">
                        {{ index + 1 }}
                    </th>
                    <td class="p-3 text-start">{{ item.day }}</td>
                    <td class="p-3 text-start">
                        {{ item.medicine }}
                    </td>
                    <td class="p-3 text-start">{{ item.remark }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div
        class="bg-colorTableHead rounded-b-md flex justify-between items-center py-2 px-4"
    >
        <h3>វេជ្ជបញ្ជាសរុប ({{ prescriptions.length }})</h3>
        <Pagination :links="links" />
    </div>
</template>

<style></style>
