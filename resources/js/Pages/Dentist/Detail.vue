<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
import Appointment from "@/Components/Appointment.vue";
import Schedule from "@/Components/Schedule.vue";
import Prescription from "@/Components/Prescription.vue";
import Treatment from "@/Components/Treatment.vue";

const currentTab = ref("ការណាត់ជួប");

const tabs = [
    { label: "ការណាត់ជួប" },
    { label: "កាលវិភាគ" },
    { label: "វេជ្ជបញ្ជា" },
    { label: "ការព្យាបាល" },
];

const profiles = [
    {
        img: "https://i.pinimg.com/736x/7a/d3/9b/7ad39b7a6bd36922675c0ff7d5c7132b.jpg",
        name: "John Doe",
        email: "johndoe@example.com",
        gender: "Male",
        dob: "1990-05-15",
        contact: "+1 234 567 890",
        address: "123 Main St, Springfield, USA",
        degree: "B.Sc. Computer Science",
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
            <TitlePage title="Detist / Detail" />
        </div>

        <div class="w-full flex justify-start items-start gap-2 mt-2">
            <div class="w-30">
                <div class="py-2.5 px-4 bg-colorTableHead rounded-t-md">
                    <h3 class="text-lg text-colorTextHeader">ប្រវត្តិរូប</h3>
                </div>
                <div
                    class="p-2 bg-white rounded-b-md"
                    v-for="(item, index) in profiles"
                    :key="index"
                >
                    <div class="flex flex-col justify-center items-center">
                        <img
                            :src="item.img"
                            alt="Admin Image"
                            class="w-28 h-28 object-cover rounded-full"
                        />
                        <h1 class="text-base font-bold">{{ item.name }}</h1>
                    </div>
                    <hr class="border-1.5 border-gray-100 my-1.5" />
                    <div class="flex flex-col gap-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Gender</span>
                            <span
                                class="py-1 px-4 rounded-xl bg-gray-100/50 hover:bg-gray-100"
                                >{{ item.gender }}</span
                            >
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Birthdate</span>
                            <span
                                class="py-1 px-4 rounded-xl bg-gray-100/50 hover:bg-gray-100"
                                >{{ item.dob }}</span
                            >
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Phone</span>
                            <span
                                class="py-1 px-4 rounded-xl bg-gray-100/50 hover:bg-gray-100"
                                >{{ item.contact }}</span
                            >
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Email</span>
                            <span
                                class="py-1 px-4 rounded-xl bg-gray-100/50 hover:bg-gray-100"
                                >{{ item.email }}</span
                            >
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Address</span>
                            <span
                                class="py-1 px-4 rounded-xl bg-gray-100/50 hover:bg-gray-100"
                                >{{ item.dob }}</span
                            >
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Degree</span>
                            <span
                                class="py-1 px-4 rounded-xl bg-gray-100/50 hover:bg-gray-100"
                                >{{ item.degree }}</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-70">
                <div
                    class="h-auto inline-flex justify-start items-center gap-3 bg-gray-200/80 p-1.5 rounded-md"
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
                <div class="h-auto py-2">
                    <template v-if="currentTab === 'ការណាត់ជួប'">
                        <Appointment />
                    </template>
                    <template v-if="currentTab === 'កាលវិភាគ'">
                        <Schedule />
                    </template>
                    <template v-if="currentTab === 'វេជ្ជបញ្ជា'">
                        <Prescription />
                    </template>
                    <template v-if="currentTab === 'ការព្យាបាល'">
                        <Treatment />
                    </template>
                </div>
            </div>
        </div>
    </DefaultLayout>
</template>
