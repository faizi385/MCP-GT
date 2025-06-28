<template>
  <div class="min-h-screen flex flex-col md:flex-row text-gray-900 relative h-full">
    <hr class="mb-6 mt-3 border-t border-gray-200" />

    <Sidebar
      :class="[
        'top-0 left-0 z-50 md:z-auto w-94 h-full bg-white border-r border-border transition-transform duration-200 ease-in-out',
        isSidebarVisible ? 'fixed translate-x-0' : 'fixed -translate-x-full',
        'md:translate-x-0 md:relative'
      ]"
    />

    <div
      v-if="isSidebarVisible"
      @click="isSidebarVisible = false"
      class="fixed inset-0 bg-black bg-opacity-40 z-40 md:hidden"
    />

    <div class="flex-1 flex flex-col overflow-hidden h-full">
      <hr class="my-2 mt-4 border-t border-gray-200" />
      <header class="bg-white border-b border-gray-200 px-4 md:px-6 py-3 h-8 flex items-center justify-between">
        <button @click="isSidebarVisible = !isSidebarVisible" class="md:hidden text-gray-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <Breadcrumb :items="breadcrumbs" />
        <Topbar />
      </header>

      <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-white border-r border-border h-full">
        <slot />
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import Sidebar from './Sidebar.vue'
import Topbar from './Topbar.vue'
import Breadcrumb from './Breadcrumb.vue'

const isSidebarVisible = ref(false)

const breadcrumbs = [
  { text: 'My MCPs', href: '/' },
  { text: 'My MCP Server', href: '#' }
];

</script>
