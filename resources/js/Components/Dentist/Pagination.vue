<script setup>
import { Link, router } from "@inertiajs/vue3";

const props = defineProps({
    links: Array,
});

function cleanLabelPagination(label) {
    label = label.replace("pagination.previous", "« ");
    label = label.replace("pagination.next", " »");

    return label;
}

function navigate(url) {
    const page = getParameterByName("page", url);
    const queryArray = queryConvert();
    const newQuery = queryArray.concat({ page: page });
    const serializeParam = serialize(newQuery);
    const newUrl =
        window.location.origin +
        window.location.pathname +
        "?" +
        serializeParam;

    router.get(newUrl, {}, { preserveScroll: true });
}

function queryConvert() {
    let queryStr = window.location.search,
        queryArr = queryStr.replace("?", "").split("&"),
        queryParams = [];

    for (let q = 0, qArrLength = queryArr.length; q < qArrLength; q++) {
        const qArr = queryArr[q].split("=");
        const key = qArr[0];
        if (key === "page") {
            continue;
        }
        const value = qArr[1];
        const obj = {};
        if (key && value) {
            obj[key] = value;
            queryParams.push(obj);
        }
    }

    return queryParams;
}

function getParameterByName(name, url) {
    name = name.replace(/[\[\]]/g, "\\$&");
    let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function serialize(obj) {
    const str = [];
    for (const p of obj) {
        const key = Object.keys(p)[0];
        const value = p[key];
        str.push(encodeURIComponent(key) + "=" + encodeURIComponent(value));
    }

    return str.join("&");
}
</script>

<template>
    <ul class="flex justify-end space-x-2 text-sm">
        <li v-for="link in links" :key="link.url" class="flex">
            <Link v-if="link.url"
                class="flex items-center justify-center w-9 h-9 rounded-full border border-gray-300 hover:bg-blue-100 transition-all duration-300"
                :class="link.active ? 'bg-blue-500 text-white' : 'text-gray-700'" @click.prevent="navigate(link.url)"
                v-html="cleanLabelPagination(link.label)" href="#" />
        </li>
    </ul>
</template>

<style scoped>
</style>
