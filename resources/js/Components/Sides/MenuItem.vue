<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    index: Number,
    title: String,
    href: String,
    items: Array,
    active: Boolean,
    activeIndex: Number,
});

const emit = defineEmits(["update:activeIndex"]);

const isActive = computed(() => props.activeIndex === props.index);

const toggleSubMenu = () => {
    emit("update:activeIndex", isActive.value ? null : props.index);
};
</script>

<template>
    <ul>
        <li class="my-0.5">
            <div v-if="items?.length" @click="toggleSubMenu"
                :class="{ 'bg-lightBlueHover': active || activeIndex === index }">
                <slot name="icon"></slot>
                <p>{{ title }}</p>
            </div>
            <div v-else>
                <Link :href="href" :class="{ 'bg-lightBlueHover': active }">
                <slot name="icon"></slot>
                <p>{{ title }}</p>
                </Link>
            </div>
            <transition name="expand-collapse" @enter="enter" @leave="leave">
                <ul v-show="activeIndex === index">
                    <template v-for="(item, subIndex) in items">
                        <SubMenuItem :title="item.title" :href="item.href" :active="item.active" />
                    </template>
                </ul>
            </transition>
        </li>
    </ul>
</template>

<style scoped></style>
