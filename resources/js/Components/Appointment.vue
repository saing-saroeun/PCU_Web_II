<script setup>
import Pagination from "@/Components/Dentist/Pagination.vue";
import SearchOutline from "@/Components/Dentist/Icons/SearchOutline.vue";
import { ref } from "vue";

// Fake data for appointments
const appointments = ref([
    {
        patient: "John Doe",
        date: "2024-10-20",
        time: "10:00 AM",
        status: "Confirmed",
    },
    {
        patient: "Jane Smith",
        date: "2024-10-21",
        time: "11:00 AM",
        status: "Pending",
    },
    {
        patient: "Michael Brown",
        date: "2024-10-22",
        time: "2:00 PM",
        status: "Cancelled",
    },
    {
        patient: "Emily Johnson",
        date: "2024-10-23",
        time: "9:00 AM",
        status: "Confirmed",
    },
    {
        patient: "David Wilson",
        date: "2024-10-24",
        time: "1:30 PM",
        status: "Pending",
    },
]);

// Fake data for pagination links
const links = ref([
    { label: "&laquo; Previous", url: null, active: false },
    { label: "1", url: "#", active: true },
    { label: "2", url: "#", active: false },
    { label: "3", url: "#", active: false },
    { label: "&raquo;", url: "#", active: false },
]);
</script>

<template>
    <div>
        <div class="py-2">
            <div class="relative h-10 w-72">
                <input
                    class="w-full px-8 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                    type="search"
                    placeholder="ស្វែងរកការណាត់ជួប..."
                />
                <SearchOutline
                    class="absolute left-2 top-1/2 translate-y-[-50%]"
                    :size="18"
                    color="#C9C9C9"
                />
            </div>
        </div>
        <table class="w-full text-center bg-colorTableHead rounded-md">
            <thead>
                <tr>
                    <th scope="col" class="p-3">#</th>
                    <th scope="col" class="p-3 text-start">Patient</th>
                    <th scope="col" class="p-3">Date</th>
                    <th scope="col" class="p-3">Time</th>
                    <th scope="col" class="p-3">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(item, index) in appointments"
                    :key="index"
                    class="bg-white border-y-1.5 hover:bg-colorHoverTable"
                >
                    <th scope="row" class="font-bold whitespace-nowrap">
                        {{ index + 1 }}
                    </th>
                    <td class="p-3 text-start">{{ item.patient }}</td>
                    <td class="p-3">
                        {{ item.date }}
                    </td>
                    <td class="p-3">{{ item.time }}</td>
                    <td class="p-3">
                        <span
                            v-if="item.status == 'Confirmed'"
                            class="bg-green-600/60 py-1 px-3 rounded-full"
                        >
                            {{ item.status }}
                        </span>
                        <span
                            v-if="item.status == 'Pending'"
                            class="bg-yellow-500/50 py-1 px-3 rounded-full"
                        >
                            {{ item.status }}
                        </span>
                        <span
                            v-if="item.status == 'Cancelled'"
                            class="bg-red-600/60 py-1 px-3 rounded-full"
                        >
                            {{ item.status }}
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div
        class="bg-colorTableHead rounded-b-md flex justify-between items-center py-2 px-4"
    >
        <h3>ការណាត់ជួបសរុប ({{ appointments.length }})</h3>
        <Pagination :links="links" />
    </div>
</template>

<style></style>
