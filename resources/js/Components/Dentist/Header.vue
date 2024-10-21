<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { ref } from "vue";
import HamburgerIcon from "./Icons/HamburgerIcon.vue";
import SearchOutline from "./Icons/SearchOutline.vue";
import UserIcon from "./Icons/UserIcon.vue";
import LockPasswordIcon from "./Icons/LockPasswordIcon.vue";
import ListSelectBox from "./SelectOptions.vue";
import ArrowDownIcon from "./Icons/ArrowDownIcon.vue";

const timeZone = [
    { label: 'GMT-4 (System Time)' },
    { label: 'GMT+7' },
    { label: 'GMT+8' },
    { label: 'GMT+9' },
    { label: 'GMT+11' },
]

const languages = [
    { label: 'English', image: '/assets/admin/flags/england-flag.png', locale: 'en' },
    { label: 'Khmer', image: '/assets/admin/flags/cambodia-flag.png', locale: 'km' },
    { label: 'Thailand', image: '/assets/admin/flags/thailand-flag.png', locale: 'th' },
    { label: 'Vietnam', image: '/assets/admin/flags/vietnam-flag.png', locale: 'vi' },
];

const selectedLanguage = ref(languages.find(language => language.locale === usePage().props.locale));
const selectedItem = ref(timeZone[0]);

const prop = defineProps({
    isCollapsed: Boolean,
    toggleSidebar: Function,
})

</script>

<template>
    <header class="header-height flex items-center w-full bg-primaryColor text-white">
        <div :class="{ 'sidebar-width': true, 'sidebar-collapsed': isCollapsed }" class="w-full flex-shrink-0 text-center">
        <h1 class="text-2xl font-bold">Dentist</h1>
        </div>
        <div class="flex justify-between items-center w-full gap-3 px-4">
            <div class="inline-flex flex-shrink-0 items-center">
                <button type="button" class="px-1 py-2" @click="toggleSidebar">
                    <HamburgerIcon :size="24" />
                </button>
            </div>
            <div class="flex justify-end items-center w-full gap-3">
                <p class="block">Company</p>
                <Menu as="div" class="relative pt-1" v-slot="{ open }">
                    <MenuButton class="w-auto h-full inline-flex items-center gap-1">
                        <img class="w-10 h-10 object-cover rounded-full"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyW2MAFrFnfa_bT1jSttLbmvfotJcqQyCCGg&s"
                            alt="">
                        <ArrowDownIcon color="white" :class="[
                            open ? 'rotate-180 ' : 'rotate-0',
                            'transition-all',
                        ]" />
                    </MenuButton>

                    <transition enter-active-class="transition duration-100 ease-out"
                        enter-from-class="transform scale-95 opacity-0" enter-to-class="transform scale-100 opacity-100"
                        leave-active-class="transition duration-75 ease-in"
                        leave-from-class="transform scale-100 opacity-100"
                        leave-to-class="transform scale-95 opacity-0">
                        <MenuItems
                            class="absolute z-20 right-0 w-72 origin-top-right rounded-md border border-lightGreyColor bg-white shadow-lg focus:outline-none">
                            <div class="text-center text-black pt-3">
                                <div class="flex justify-center">
                                    <div class="w-20 h-20 rounded-full border-2 border-lightGreyColor">
                                        <img class="w-full h-full object-cover rounded-full"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyW2MAFrFnfa_bT1jSttLbmvfotJcqQyCCGg&s"
                                            alt="">
                                    </div>
                                </div>
                                <p class="text-lg text-primaryColor">Company</p>
                                <hr class="my-3">
                                <MenuItem v-slot="{ active }">
                                <Link :class="[
                                    active ? 'bg-lightGreyColor' : '',
                                    'group flex w-full items-center px-3 py-2 transition-colors',
                                ]">
                                <UserIcon size="20" class="mr-2" />
                                គណនី
                                </Link>
                                </MenuItem>
                                <hr class="my-3">
                                <div class="px-3 pb-3">
                                    <MenuItem>
                                    <Link 
                                        class="group flex justify-center w-full bg-lightGreyColor border border-greyBorderColor text-black rounded-md px-2 py-2 hover:bg-red-500/50 transition-colors">
                                    Sign Out
                                    </Link>
                                    </MenuItem>
                                </div>
                            </div>
                        </MenuItems>
                    </transition>
                </Menu>
            </div>
        </div>
    </header>
</template>

<style scoped></style>