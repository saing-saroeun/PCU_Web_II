<script setup>
import EditIcon from './Icon/EditIcon.vue'
import DetailIcon from './Icon/DetailIcon.vue'
import DeleteIcon from './Icon/DeleteIcon.vue'

const props = defineProps({
    item: Object,
});

const emits = defineEmits(["edit", "detail", "delete"]);

const onEdit = (item) => {
    emits("edit", item);
};

const onDetail = (item) => {
    emits("detail", item);
};

const onDelete = (item) => {
    emits("delete", item);
};
</script>

<template>
    <div class="flex justify-center items-center">
        <div class="flex gap-2">
            <button @click="onDetail(item)">
                <DetailIcon />
            </button>

            <button @click="onEdit(item)">
                <EditIcon />
            </button>

            <button @click="onDelete(item)">
                <DeleteIcon />
            </button>
        </div>
    </div>
</template>


<style scoped></style>
