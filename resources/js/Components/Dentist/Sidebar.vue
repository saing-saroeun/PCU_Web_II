<script setup>
import MenuItem from "./MenuItem.vue";
import NotificationIcon from "./Icons/NotificationIcon.vue";
import ReportIcon from "./Icons/ReportIcon.vue";
import RiskIcon from "./Icons/RiskIcon.vue";
import StockIcon from "./Icons/StockIcon.vue";
import PaymentIcon from "./Icons/PaymentIcon.vue";
import SettingIcon from "./Icons/SettingIcon.vue";
import MemberIcon from "./Icons/MemberIcon.vue";
import DashboardIcon from "./Icons/DashboardIcon.vue";

const menuTickets = [
    // { title: '1.1. សំបុត្ររង់ចាំទាំងអស់' },
    // { title: '1.2. សំបុត្រ Cockfight' },
];

const menuMembers = [
    // { title: '2.1. Super Master' },
    // { title: '2.2. បញ្ជីសមាជិក' },
];

const menuSubAccounts = [
    // { title: '3.1. បញ្ជី Sub Account', href: "" },
    // { title: '3.2. ការកំណត់សិទ្ធិ', href: "" },
];

const menuReports = [
    // { title: '4.1. Game Win Loss' },
    // { title: '4.2. Win Loss Simple' },
    // { title: '4.3. Win Loss' },
];

const menuRisks = [
    // { title: '5.1. Monitored Account' },
    // { title: '5.2. បញ្ជី IP' },
];
const menuSettings = [
    // { title: '6.1. សិទ្ធិប្រើប្រាស់' },
    // { title: '6.2. ការកំណត់សិទ្ធិ', href: "" },
];

const prop = defineProps({
    isCollapsed: Boolean,
})

</script>

<template>
    <aside :class="{ 'sidebar-width': true, 'sidebar-collapsed': isCollapsed }"
        class="flex-shrink-0 h-full bg-primaryColor text-white overflow-y-auto">
        <MenuItem :index="1" title="Dashboard" :href="route('dashboard.index')">
        <template v-slot:icon>
            <DashboardIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="2" title="សេចក្ដីជូនដំណឹង">
        <template v-slot:icon>
            <NotificationIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="3" title="គ្រប់គ្រងស្តុកសំបុត្រ" :items="menuTickets">
        <template v-slot:icon>
            <StockIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="4" title="គ្រប់គ្រងសមាជិក" :items="menuMembers">
        <template v-slot:icon>
            <MemberIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="5" title="គណនីខាងក្រោម" :items="menuSubAccounts">
        <template v-slot:icon>
            <StockIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="6" title="របាយការណ៍" :items="menuReports">
        <template v-slot:icon>
            <ReportIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="7" title="គ្រប់គ្រងហានិភ័យ" :items="menuRisks">
        <template v-slot:icon>
            <RiskIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="8" title="ការទូទាត់" href="#">
        <template v-slot:icon>
            <PaymentIcon fill="white" />
        </template>
        </MenuItem>
        <MenuItem :index="9" title="ការកំណត់" :items="menuSettings">
        <template v-slot:icon>
            <SettingIcon fill="white" />
        </template>
        </MenuItem>
    </aside>
</template>

<style scoped></style>