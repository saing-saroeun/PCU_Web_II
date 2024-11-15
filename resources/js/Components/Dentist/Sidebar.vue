<script setup>
import { ref } from "vue";
import MenuItem from "./MenuItem.vue";
import RiskIcon from "./Icons/RiskIcon.vue";
import StockIcon from "./Icons/StockIcon.vue";
import MemberIcon from "./Icons/MemberIcon.vue";
import ReportIcon from "./Icons/ReportIcon.vue";
import SettingIcon from "./Icons/SettingIcon.vue";
import PaymentIcon from "./Icons/PaymentIcon.vue";
import PatientIcon from "./Icons/PatientIcon.vue";
import DashboardIcon from "./Icons/DashboardIcon.vue";
import AppointmentIcon from './Icons/AppointmentIcon.vue'

const menuAppointments = ref([
    { title: '1. Dentists', href: "dentist.appointments", active: 'dentist.appointments' },
    { title: '2. Patients', href: "patient.appointments", active: 'patient.appointments' },
]);

// const menuSchedules = [
//     { title: '1. Patients', },
// ];

// const menuReports = [
//     { title: '1. Patients', href: 'dentist.records' },
// ];

const prop = defineProps({
    isCollapsed: Boolean,
})
</script>

<template>
    <aside :class="{ 'sidebar-width': true, 'sidebar-collapsed': isCollapsed }"
        class="flex-shrink-0 h-full bg-white text-black overflow-y-auto">

        <MenuItem :index="1" title="Dashboard" :href="route('dashboard.index')"
            :active="route().current('dashboard.index')">
        <template v-slot:icon>
            <DashboardIcon fill="black" />
        </template>
        </MenuItem>

        <MenuItem :index="2" title="Admin" :href="route('admin.index')" :active="route().current('admin.index')">
        <template v-slot:icon>
            <RiskIcon fill="black" />
        </template>
        </MenuItem>

        <MenuItem :index="3" title="Dentist Management" :href="route('dentist.index')"
            :active="route().current('dentist.index')">
        <template v-slot:icon>
            <MemberIcon fill="black" />
        </template>
        </MenuItem>

        <MenuItem :index="4" title="Patients Management" :href="route('patient.index')"
            :active="route().current('patient.index')">
        <template v-slot:icon>
            <PatientIcon fill="black" />
        </template>
        </MenuItem>

        <!-- <MenuItem :index="5" title="Schedules" :items="menuSchedules">
        <template v-slot:icon>
            <StockIcon fill="black" />
        </template>
        </MenuItem> -->

        <MenuItem :index="6" title="Appointment Lists" :items="menuAppointments">
        <template v-slot:icon>
            <AppointmentIcon fill="black" />
        </template>
        </MenuItem>

        <!-- <MenuItem :index="7" title="Reports" :items="menuReports">
        <template v-slot:icon>
            <ReportIcon fill="black" />
        </template>
        </MenuItem>

        <MenuItem :index="8" title="Payments" href="#">
        <template v-slot:icon>
            <PaymentIcon fill="black" />
        </template>
        </MenuItem>

        <MenuItem :index="9" title="Settings" :items="menuSettings">
        <template v-slot:icon>
            <SettingIcon fill="black" />
        </template>
        </MenuItem> -->
    </aside>
</template>

<style scoped></style>