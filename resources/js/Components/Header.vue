<script setup>
import { Link, router, usePage } from "@inertiajs/vue3";
import HamburgerIcon from "./Icon/HamburgerIcon.vue";
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
import UserIcon from "./Icon/UserIcon.vue";
import LockPasswordIcon from "./Icon/LockPasswordIcon.vue";
import ArrowDownIcon from "./Icon/ArrowDownIcon.vue";
import HeaderLogo from "./Icon/HeaderLogo.vue";
import { computed } from "vue";

const props = defineProps({
    isCollapsed: Boolean,
    toggleSidebar: Function,
});
</script>

<template>
    <header class="header-height flex items-center w-full bg-primaryColor text-white">
        <div class="flex justify-between items-center w-full gap-3 px-3 md:px-4">
            <div class="inline-flex items-center">
                <HeaderLogo class="px-2" css-class="h-10" />
                <button type="button" class="px-1 py-2" @click="toggleSidebar">
                    <HamburgerIcon :size="24" />
                </button>
            </div>
            <div class="flex justify-end items-center w-full gap-3">
                <div class="hidden lg:block w-64">
                    <!-- <Search /> -->
                </div>

                <Menu as="div" class="relative pt-1" v-slot="{ open }">
                    <MenuButton class="w-auto h-full inline-flex items-center gap-1">
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
                            class="absolute z-40 right-0 w-72 origin-top-right rounded-md border border-lightGreyColor bg-white shadow-lg focus:outline-none">
                            <div class="text-center text-black pt-3">
                                <div class="flex justify-center">

                                </div>
                                <p class="text-lg text-primaryColor">

                                </p>
                                <hr class="my-3" />
                                <MenuItem v-slot="{ active }">
                                <Link :class="[
                                    active ? 'bg-lightGreyColor' : '',
                                    'group flex w-full items-center px-3 py-2 transition-colors',
                                ]">
                                <UserIcon size="20" class="mr-2" />

                                </Link>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                <Link :class="[
                                    active ? 'bg-lightGreyColor' : '',
                                    'group flex w-full items-center px-3 py-2 transition-colors',
                                ]">
                                <LockPasswordIcon size="20" class="mr-2" />

                                </Link>
                                </MenuItem>
                                <hr class="my-3" />
                                <div class="px-3 pb-3">
                                    <MenuItem role="button" @click="
                                       
                                        " class="cursor-pointer">

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
