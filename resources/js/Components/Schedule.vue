<script setup>
import Pagination from "@/Components/Dentist/Pagination.vue";
import SearchOutline from "@/Components/Dentist/Icons/SearchOutline.vue";
import { ref } from "vue";

const schedules = ref([
    {
        day: "Monday",
        start_time: "08:00 AM",
        end_time: "10:00 AM",
        duration: "2 hours",
    },
    {
        day: "Tuesday",
        start_time: "09:30 AM",
        end_time: "11:30 AM",
        duration: "2 hours",
    },
    {
        day: "Wednesday",
        start_time: "01:00 PM",
        end_time: "03:00 PM",
        duration: "2 hours",
    },
    {
        day: "Thursday",
        start_time: "10:00 AM",
        end_time: "12:00 PM",
        duration: "2 hours",
    },
    {
        day: "Friday",
        start_time: "11:00 AM",
        end_time: "01:00 PM",
        duration: "2 hours",
    },
]);

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
                    placeholder="ស្វែងរកកាលវិភាគ..."
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
                    <th scope="col" class="p-3 text-start">Day</th>
                    <th scope="col" class="p-3">Start Time</th>
                    <th scope="col" class="p-3">End Time</th>
                    <th scope="col" class="p-3">Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(item, index) in schedules"
                    :key="index"
                    class="bg-white border-y-1.5 hover:bg-colorHoverTable"
                >
                    <th scope="row" class="font-bold whitespace-nowrap">
                        {{ index + 1 }}
                    </th>
                    <td class="p-3 text-start">{{ item.day }}</td>
                    <td class="p-3">
                        {{ item.start_time }}
                    </td>
                    <td class="p-3">{{ item.end_time }}</td>
                    <td class="p-3">{{ item.duration }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div
        class="bg-colorTableHead rounded-b-md flex justify-between items-center py-2 px-4"
    >
        <h3>កាលវិភាគសរុប ({{ schedules.length }})</h3>
        <Pagination :links="links" />
    </div>
</template>

<style></style>
