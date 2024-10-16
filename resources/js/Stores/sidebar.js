import { useStorage } from '@vueuse/core' // localStorage
import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useSidebarStore = defineStore('sidebar', () => {
  const isSidebarOpen = ref(false) // declear variable
  const selected = useStorage('selected', ref('eCommerce')) // declear variable
  const page = useStorage('page', ref('Dashboard')) // declear variable

  // Create Fun Toggle use show/hide
  function toggleSidebar() {
    isSidebarOpen.value = !isSidebarOpen.value
  }

  return { isSidebarOpen, toggleSidebar, selected, page }
})
