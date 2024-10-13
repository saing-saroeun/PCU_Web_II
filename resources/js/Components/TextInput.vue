<script setup>
import { onMounted, ref } from 'vue';

const props = defineProps({
    placeholder: {
        type: String,
        required: false
    }
})

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input class="rounded-md hover:bg-gray-100 outline-none focus:right-1 focus:ring-gray-200" v-model="model"
        ref="input" :placeholder="placeholder" />
</template>
