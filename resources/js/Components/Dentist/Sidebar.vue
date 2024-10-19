<script setup>
import MenuItem from "./MenuItem.vue";
import NotificationIcon from "./Icons/NotificationIcon.vue";
import ReportIcon from "./Icons/ReportIcon.vue";
import RiskIcon from "./Icons/RiskIcon.vue";
import StockIcon from "./Icons/StockIcon.vue";
import PaymentIcon from "./Icons/PaymentIcon.vue";
import SettingIcon from "./Icons/SettingIcon.vue";
import MemberIcon from "./Icons/MemberIcon.vue";
import PatientIcon from "./Icons/PatientIcon.vue";
import DashboardIcon from "./Icons/DashboardIcon.vue";
import AppointmentIcon from './Icons/AppointmentIcon.vue'

const menuPatient = [
    { title: '1.1. Registration' },
    { title: '1.2. Records' },
    { title: '1.3. Appointment Scheduling' },
];

const menuDetists = [
    { title: '2.1. Dentist Profiles' },
    { title: '2.2. Schedule Management' },
];

const menuAppointments = [
    { title: '3.1. Rescheduling', href: "" },
    { title: '3.2. ការកំណត់សិទ្ធិ', href: "" },
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
        class="flex-shrink-0 h-full bg-white text-black overflow-y-auto">
        <MenuItem :index="1" title="Dashboard" :href="route('dashboard.index')">
        <template v-slot:icon>
            <DashboardIcon fill="black" />
        </template>
        </MenuItem>
        <MenuItem :index="6" title="Admin" :href="route('admin.index')">
        <template v-slot:icon>
            <RiskIcon fill="black" />
        </template>
        </MenuItem>

        <MenuItem :index="3" title="Dentist Management" :items="menuDetist">
        <template v-slot:icon>
            <MemberIcon fill="black" />
        </template>
        </MenuItem>
        <MenuItem :index="2" title="Patients Management" :items="menuPatient">
        <template v-slot:icon>
            <PatientIcon fill="black" />
        </template>
        </MenuItem>
        <MenuItem :index="4" title="Schedules">
        <template v-slot:icon>
            <StockIcon fill="black" />
        </template>
        </MenuItem>
        <MenuItem :index="5" title="Appointment Lists" :items="menuAppointments">
        <template v-slot:icon>
            <AppointmentIcon fill="black" />
        </template>
        </MenuItem>
        <MenuItem :index="6" title="Reports" :items="menuReport">
        <template v-slot:icon>
            <ReportIcon fill="black" />
        </template>
        </MenuItem>
        <MenuItem :index="7" title="Payments" href="#">
        <template v-slot:icon>
            <PaymentIcon fill="black" />
        </template>
        </MenuItem>
        <MenuItem :index="8" title="Settings" :items="menuSettings">
        <template v-slot:icon>
            <SettingIcon fill="black" />
        </template>
        </MenuItem>
    </aside>
</template>

<style scoped></style>