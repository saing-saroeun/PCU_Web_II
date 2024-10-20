<script setup>
import { ref, watch } from "vue";
import VueDatePicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'

const props = defineProps({
    date: Date || String,
    placeholder: {
        type: String,
        default: 'Date',
    },
    yearRange: {
        type: Array,
    },
    minDate: {
        type: Date,
        default: null,
    },
    maxDate: {
        type: Date,
        default: null,
    },
    clearable: {
        type: Boolean,
        default: true,
    },
    format: {
        type: String,
        default: 'dd/MM/yyyy',
    },
});

const emit = defineEmits(['update:model-value']);

const date = ref(props.date ? Date.parse(props.date.toString()) : null);

watch(date, (newValue) => {
    emit('update:model-value', newValue);
});

</script>

<template>
    <div class="h-10">
        <VueDatePicker inputClassName="form-control date-picker text-center" v-model="date" :enableTimePicker="false"
            :placeholder="placeholder" :hideInputIcon="false" :autoApply="true" :closeOnAutoApply="false"
            :yearRange="yearRange" :min-date="minDate" :max-date="maxDate" :clearable="clearable" :format="format" />
    </div>
</template>

<style>
.dp__input_wrap {
    width: 100%;
}
</style>