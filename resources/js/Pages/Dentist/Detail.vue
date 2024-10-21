<script setup>
import { ref } from "vue";
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
import { useForm } from "@inertiajs/vue3";
import DefaultLayout from "@/Layouts/Dentist/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";

const categories = ref({
    Profiles: [
        {
            id: 1,
            title: 'Does drinking coffee make you smarter?',
            date: '5h ago',
            commentCount: 5,
            shareCount: 2,
        },
        {
            id: 2,
            title: "So you've bought coffee... now what?",
            date: '2h ago',
            commentCount: 3,
            shareCount: 2,
        },
    ],
    Appointments: [
        {
            id: 1,
            title: 'Is tech making coffee better or worse?',
            date: 'Jan 7',
            commentCount: 29,
            shareCount: 16,
        },
        {
            id: 2,
            title: 'The most innovative things happening in coffee',
            date: 'Mar 19',
            commentCount: 24,
            shareCount: 12,
        },
    ],
    Schedule: [
        {
            id: 1,
            title: 'Ask Me Anything: 10 answers to your questions about coffee',
            date: '2d ago',
            commentCount: 9,
            shareCount: 5,
        },
        {
            id: 2,
            title: "The worst advice we've ever heard about coffee",
            date: '4d ago',
            commentCount: 1,
            shareCount: 2,
        },
    ],
    Prescriptions: [
        {
            id: 1,
            title: 'Ask Me Anything: 10 answers to your questions about coffee',
            date: '2d ago',
            commentCount: 9,
            shareCount: 5,
        },
        {
            id: 2,
            title: "The worst advice we've ever heard about coffee",
            date: '4d ago',
            commentCount: 1,
            shareCount: 2,
        },
    ],
    Treatment: [
        {
            id: 1,
            title: 'Ask Me Anything: 10 answers to your questions about coffee',
            date: '2d ago',
            commentCount: 9,
            shareCount: 5,
        },
        {
            id: 2,
            title: "The worst advice we've ever heard about coffee",
            date: '4d ago',
            commentCount: 1,
            shareCount: 2,
        },
    ],
})

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
            <TitlePage title="Dentist / Detail" />
        </div>

        <div class="w-full py-2">
            <TabGroup>
                <TabList class="inline-block space-x-1 rounded-md bg-colorTableHead p-1">
                    <Tab v-for="category in Object.keys(categories)" as="template" :key="category"
                        v-slot="{ selected }">
                        <button :class="[
                            'w-36 rounded-md py-2.5 text-sm font-medium leading-5',
                            'ring-white/60 ring-offset-blue-400 focus:outline-none',
                            selected
                                ? 'bg-white text-blue-700 shadow'
                                : 'text-black hover:bg-white/[0.12] hover:text-colorTextHeader',
                        ]">
                            {{ category }}
                        </button>
                    </Tab>
                </TabList>

                <TabPanels class="mt-2">
                    <TabPanel v-for="(posts, idx) in Object.values(categories)" :key="idx" :class="[
                        'rounded-md bg-white p-3',
                        'ring-white/60 ring-offset-2 ring-offset-blue-400 focus:outline-none focus:ring-2',
                    ]">
                        <ul>
                            <li v-for="post in posts" :key="post.id" class="relative rounded-md p-3 hover:bg-gray-100">
                                <h3 class="text-sm font-medium leading-5">
                                    {{ post.title }}
                                </h3>

                                <ul class="mt-1 flex space-x-1 text-xs font-normal leading-4 text-gray-500">
                                    <li>{{ post.date }}</li>
                                    <li>&middot;</li>
                                    <li>{{ post.commentCount }} comments</li>
                                    <li>&middot;</li>
                                    <li>{{ post.shareCount }} shares</li>
                                </ul>

                                <a href="#" :class="[
                                    'absolute inset-0 rounded-md',
                                    'ring-blue-400 focus:z-10 focus:outline-none focus:ring-2',
                                ]" />
                            </li>
                        </ul>
                    </TabPanel>
                </TabPanels>
            </TabGroup>
        </div>
    </DefaultLayout>
</template>
