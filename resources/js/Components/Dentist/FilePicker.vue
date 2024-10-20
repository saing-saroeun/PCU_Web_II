<script setup>
import { computed, ref } from "vue";
// import ImageView from "@/ImageView.vue";

const props = defineProps({
    multiple: Boolean,
    images: Array,
    isProfile: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(["updateFile"]);

const images = props.multiple
    ? ref(props.images ?? [])
    : props.images
        ? ref([props.images])
        : ref([]);
const files = ref([]);

async function readURL(event) {
    const files = event.target.files;
    if (!files) {
        return;
    }

    for (const file of files) {
        const reader = new FileReader();
        await reader.readAsDataURL(file);

        reader.onload = function (e) {
            const newFile = {
                file: file,
                path: e.target.result,
                name: file.name,
            };

            if (props.multiple) {
                images.value.push(newFile);
            }

            if (!props.multiple) {
                images.value = [newFile];
            }

            emit("updateFile", images.value);
        };
    }
}

function removeFile(index) {
    const dt = new DataTransfer();
    const tempFiles = files.value.files;
    for (let i = 0; i < tempFiles.length; i++) {
        const file = tempFiles[i];
        if (index !== i) {
            dt.items.add(file);
        }
    }

    files.value.files = dt.files;
    images.value.splice(index, 1);

    emit("updateFile", images.value);
}

const displayImage = computed(() => {
    return images.value.filter((item) => item?.path);
});
</script>

<template>
    <div v-if="isProfile">
        <div class="block">
            <div v-if="images.length">
                <div v-for="(image, index) in images" :key="index" class="w-44 h-44 mx-auto relative">
                    <div class="bg-white rounded-full border border-gray-300 w-full h-full overflow-hidden relative">
                        <img class="w-full h-full object-cover" :src="image?.path ?? image" alt="Profile Image" />
                        <p class="text-xs p-1 text-center truncate">{{ image?.name }}</p>
                        <button @click="removeFile(index)"
                            class="absolute top-0 right-0 text-red-500 bg-white rounded-full p-1">
                            <i class="fa-solid fa-circle-xmark text-lg"></i>
                        </button>
                    </div>
                </div>
            </div>
            <img v-else class="w-44 h-44 rounded-full border border-gray-300 object-cover mx-auto"
                src="/assets/images/profile-place-holder.png" alt="Profile Placeholder" />
            <div class="mt-3">
                <input class="hidden" type="file" ref="files" accept=".jpg, .jpeg" @change="readURL"
                    :multiple="multiple" />
                <label class="block cursor-pointer border border-gray-300 rounded-md py-2 px-4 text-center">
                    <i class="fa-solid fa-camera"></i>
                    <span class="ml-1 text-sm">ជ្រើសរើសរូបភាព</span>
                </label>
            </div>
        </div>
    </div>
    <!-- <div class="grid grid-cols-4 gap-3" v-else>
        <div v-for="(image, index) in images" :key="index" class="relative">
            <div class="bg-white border border-gray-300 w-24 h-24 rounded overflow-hidden relative">
                <ImageView :src="image?.path ?? image" class="w-full h-full object-cover" />
                <p class="text-xs p-1 text-center truncate">{{ image?.name }}</p>
                <button @click="removeFile(index)"
                    class="absolute top-0 right-0 text-red-500 bg-white rounded-full p-1">
                    <i class="fa-solid fa-circle-xmark text-lg"></i>
                </button>
            </div>
        </div>
        <div>
            <label
                class="border border-gray-300 rounded-md py-2 px-4 text-center cursor-pointer h-full w-24 flex items-center justify-center">
                <input class="hidden" type="file" ref="files" accept=".png, .jpg, .jpeg" @change="readURL"
                    :multiple="multiple" />
                <i class="fa-solid fa-cloud-arrow-up text-gray-400 text-xl"></i>
                <p class="text-xs mt-2 text-gray-400">ជ្រើសរើសរូបភាព</p>
            </label>
        </div>
    </div> -->
</template>

<style>
/* Custom styles if needed */
</style>
