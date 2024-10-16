<script setup>
import {
    Listbox,
    ListboxButton,
    ListboxOptions,
    ListboxOption,
} from '@headlessui/vue'
import ArrowDownIcon from './Icons/ArrowDownIcon.vue';
import CheckIcon from './Icons/CheckIcon.vue';


const prop = defineProps({
    items: {
        type: Array,
        required: true
    },
    top: {
        type: Boolean,
        default: false
    }
})

const selectModel = defineModel();

</script>

<template>
    <Listbox v-model="selectModel" v-slot="{ open }">
        <div class="relative h-10">
            <ListboxButton
                class="relative w-full h-full cursor-default rounded-md bg-white border border-greyBorderColor text-black pl-3 pr-10 text-left focus:outline-none focus-visible:border-indigo-500 sm:text-sm">
                <p class="block truncate text-base">{{ selectModel.label }}</p>
                <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                    <ArrowDownIcon :class="[
                        open ? 'rotate-180 ' : 'rotate-0',
                        'transition-all',
                    ]" />
                </span>
            </ListboxButton>

            <transition leave-active-class="transition duration-100 ease-in" leave-from-class="opacity-100"
                leave-to-class="opacity-0">
                <ListboxOptions :class="{ 'bottom-12': top }"
                    class="absolute mt-1 max-h-60 z-20 w-full overflow-auto rounded-md bg-white py-2 text-base shadow-lg ring-1 ring-black/5 focus:outline-none sm:text-sm">
                    <ListboxOption v-slot="{ active, selected }" v-for="zone in items" :key="zone.label" :value="zone"
                        as="template">
                        <li :class="[
                            active ? 'bg-lightGreyColor text-primaryColor' : 'text-gray-900',
                            'relative cursor-default select-none py-2 pl-10 pr-4',
                        ]">
                            <span :class="[
                                selected ? 'font-medium text-primaryColor' : 'font-normal',
                                'block truncate',
                            ]">{{ zone.label }}</span>
                            <span v-if="selected"
                                class="absolute inset-y-0 left-0 flex items-center pl-3 text-amber-600">
                                <CheckIcon />
                            </span>
                        </li>
                    </ListboxOption>
                </ListboxOptions>
            </transition>
        </div>
    </Listbox>
</template>