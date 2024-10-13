<script setup>
import { ref } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';

const form = ref({
    full_name: '',
    address: '',
    tel_phone: '',
    email: '',
    password: '',
    password_confirmation: '',
    image: null
});

const handleFileUpload = (event) => {
    form.value.image = event.target.files[0];
};

const submit = () => {
    const formData = new FormData();
    formData.append('full_name', form.value.full_name);
    formData.append('address', form.value.address);
    formData.append('tel_phone', form.value.tel_phone);
    formData.append('email', form.value.email);
    formData.append('password', form.value.password);
    formData.append('password_confirmation', form.value.password_confirmation);

    if (form.value.image) {
        formData.append('image', form.value.image);
    }

    // Use axios or your preferred method to send formData to the backend
    // axios.post('/your-endpoint', formData)
    //     .then(response => console.log(response))
    //     .catch(error => console.log(error));
};
</script>

<template>
    <AuthenticatedLayout>

        <Head title="Created Admin" />
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Created Admin
                </h2>
            </div>
        </template>

        <div class="bg-white p-4 rounded-md shadow-md">
            <form @submit.prevent="submit">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="my-2">
                            <InputLabel for="full_name" value="Full Name" />
                            <TextInput v-model="form.full_name" id="full_name" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="username" placeholder="Full name" />
                        </div>

                        <div class="my-2">
                            <InputLabel for="address" value="Address" />
                            <TextInput v-model="form.address" id="address" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="username" placeholder="Address" />
                        </div>

                        <div class="my-2">
                            <InputLabel for="tel_phone" value="Tel Phone" />
                            <TextInput v-model="form.tel_phone" id="tel_phone" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="username" placeholder="Tel phone" />
                        </div>

                        <div class="my-2">
                            <InputLabel for="email" value="Email" />
                            <TextInput v-model="form.email" id="email" type="email" class="mt-1 block w-full" required
                                autofocus autocomplete="username" placeholder="Email" />
                        </div>
                    </div>

                    <div>
                        <div class="my-2">
                            <InputLabel for="password" value="Password" />
                            <TextInput v-model="form.password" id="password" type="password" class="mt-1 block w-full"
                                required autocomplete="current-password" />
                        </div>

                        <div class="my-2">
                            <InputLabel for="password_confirmation" value="Confirm Password" />
                            <TextInput v-model="form.password_confirmation" id="password_confirmation" type="password"
                                class="mt-1 block w-full" required autocomplete="new-password" />
                        </div>

                        <div class="my-2">
                            <InputLabel for="image" value="Add Image" />
                            <input id="image" type="file" class="mt-1 block w-full" @change="handleFileUpload" />
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Create
                                Admin</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<style></style>
