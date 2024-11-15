<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import TitlePage from "@/Components/DefaultLayout/TitlePage.vue";
import DatePicker from "@/Components/Dentist/DatePicker.vue";
import SelectGender from "@/Components/Dentist/SelectGender.vue";
import SelectOption from "@/Components/Dentist/SelectOption.vue";
</script>

<template>
    <DefaultLayout>
        <div class="flex justify-between items-center">
            <TitlePage title="Patients / Create" />
        </div>

        <form class="grid grid-cols-2 gap-2">
            <div class="py-2">
                <div class="py-2 px-4 bg-colorTableHead rounded-t-md">
                    <h3 class="text-lg text-colorTextHeader">ព័ត៌មានព្យាបាល</h3>
                </div>

                <div class="flex flex-col gap-2 p-2 bg-white rounded-b-md">
                    <div class="flex flex-col justify-start items-start gap-1">
                        <label>Full Name <span class="text-red-500">*</span></label>
                        <input
                            class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                            type="text" placeholder="ra panha" />
                    </div>

                    <div class="w-full grid grid-cols-2 gap-3">
                        <div class="w-full flex flex-col justify-start items-start gap-1">
                            <label>Birthdate <span class="text-red-500">*</span></label>
                            <DatePicker />
                        </div>

                        <div class="w-full flex flex-col justify-start items-start gap-1">
                            <label>Gender <span class="text-red-500">*</span></label>
                            <SelectGender />
                        </div>
                    </div>

                    <div class="flex flex-col justify-start items-start gap-1">
                        <label>Address <span class="text-red-500">*</span></label>
                        <input
                            class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                            type="text" placeholder="123 Admin St, Phnom Penh" />
                    </div>
                </div>
                <div class="py-2">
                    <div class="py-2 px-4 bg-colorTableHead rounded-t-md">
                        <h3 class="text-lg text-colorTextHeader">ព័ត៌មានទំនាក់ទំនង</h3>
                    </div>
                    <div class="p-2 bg-white rounded-b-md">
                        <div class="flex flex-col justify-start items-start gap-1">
                            <label>Contact No <span class="text-red-500">*</span></label>
                            <input
                                class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                                type="text" placeholder="000 000 000" />
                        </div>

                        <div class="flex flex-col justify-start items-start gap-1">
                            <label>Email</label>
                            <input
                                class="w-full px-3 py-2 border-none rounded-md ring-1 focus:ring-1 ring-gray-300/50 outline-none transition-all duration-300 focus:ring-blue-300 focus:shadow-lg focus:shadow-blue-200/50 placeholder:text-gray-300"
                                type="text" placeholder="rapanha@email.com" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-2">
                <div class="py-2 px-4 bg-colorTableHead rounded-t-md">
                    <h3 class="text-lg text-colorTextHeader">ព័ត៌មានការធានារ៉ាប់រង</h3>
                </div>
                <div class="p-2 bg-white rounded-b-md">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col justify-start items-start gap-1">
                            <label>Insurance <span class="text-red-500">*</span></label>
                            <SelectOption />
                        </div>

                        <div class="flex justify-end items-end">
                            <button
                                class="px-6 rounded-xl text-white bg-[#006BDC] py-2 shadow-lg transform hover:scale-105 active:scale-95 active:shadow-md transition duration-300 ease-in-out"
                                type="submit">
                                រក្សាទុក
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </DefaultLayout>
</template>

<style></style>
