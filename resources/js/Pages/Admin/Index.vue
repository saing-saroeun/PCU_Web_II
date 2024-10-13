<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Action from '@/Components/Action.vue';
import ButtonCreated from '@/Components/ButtonCreated.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    admins: Object
})

const tables = ref([
    { img: 'https://i.pinimg.com/564x/7f/9e/8b/7f9e8ba542e180a6200750f84a61f21a.jpg', full_name: 'Ra Panha', address: 'KTP', phone: '089 123 444', email: 'panha@email.com', status: 'Active' },
    { img: 'https://i.pinimg.com/564x/7f/9e/8b/7f9e8ba542e180a6200750f84a61f21a.jpg', full_name: 'Samrith', address: 'PP', phone: '088 765 432', email: 'samrith@email.com', status: 'Inactive' }
]);

const handleEdit = (item) => {
    console.log('Edit', item);
};

const handleDetail = (item) => {
    console.log('Detail', item);
};

const handleDelete = (item) => {
    console.log('Delete', item);
};
</script>

<template>
    <AuthenticatedLayout>

        <Head title="Admin" />
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Admin
                </h2>

                <ButtonCreated routeName="admin.create" />
            </div>
        </template>

        <div class="bg-white p-4 rounded-md shadow-md">
            <table class="w-full table-fixed ">
                <thead>
                    <tr class="bg-gray-100 text-gray-500">
                        <th class="px-4 py-3 text-left">Image</th>
                        <th class="px-4 py-3 text-left">Full Name</th>
                        <th class="px-4 py-3 text-left ">Address</th>
                        <th class="px-4 py-3 text-left">Tel Phone</th>
                        <th class="px-4 py-3 text-left">Email</th>
                        <th class="px-4 py-3 text-center">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(table, index) in admins" :key="index" class="hover:bg-gray-50 text-gray-700">
                        <td class="px-4 py-3">
                            <div class="w-12 h-12 overflow-hidden rounded-full border border-gray-300">
                                <img :src="table.image" alt="User image" class="object-cover w-full h-full">
                            </div>
                        </td>
                        <td class="px-4 py-3">{{ table.full_name }}</td>
                        <td class="px-4 py-3">{{ table.address }}</td>
                        <td class="px-4 py-3">{{ table.tel_phone }}</td>
                        <td class="px-4 py-3">{{ table.email }}</td>
                        <td class="px-4 py-3 text-center">
                            <span :class="table.status === 'Active' ? 'bg-blue-500' : 'bg-red-500'"
                                class="px-1.5 text-sm text-white rounded-md">
                                {{ table.status }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <Action :item="table" @edit="handleEdit" @detail="handleDetail" @delete="handleDelete" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </AuthenticatedLayout>
</template>

<style></style>
