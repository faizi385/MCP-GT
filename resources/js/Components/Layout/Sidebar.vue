<template>
  <div class="h-full w-64 bg-background border-r border-border flex flex-col mt-4 md:h-screen md:mt-0 lg:mt-4">
    <div class="p-5 flex">
      <img src="/GT.jpg" alt="MCP GT Admin Logo" class="w-32 object-contain" />
    </div>
    <nav class="flex-1 overflow-y-auto py-4 space-y-1 h-full">
      <ul class="space-y-1 px-2">
        <li>
          <Link href="/dashboard" class="text-sm font-medium transition rounded-md inline-flex items-center">
            <span class="ml-4 flex items-center gap-2 bg-blue-100 px-2.5 py-1.5 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              My MCPs
            </span>
          </Link>
        </li>
        <li>
          <Link href="/other"
            class="ml-3 flex items-center px-3 py-2 rounded-md text-sm font-medium text-muted-foreground hover:bg-accent hover:text-accent-foreground transition">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Other Page
          </Link>
        </li>
      </ul>
    </nav>
    <div class="mt-auto ">
      <div class="p-4 mb-12">
        <button
          class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md flex items-center justify-center text-sm font-medium shadow transition-colors">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
          Create an MCP Server
        </button>
      </div>

      <div class="mx-4 px-4 py-2 border border-border mb-8 rounded-lg">
        <div class="flex items-center">
          <div class="w-7 h-7 rounded-full bg-gray-200 flex items-center justify-center">
            <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
          </div>
          <div class="ml-2 overflow-hidden">
            <p class="text-sm font-medium text-gray-900 truncate">Alex Markov</p>
          </div>
          <button class="ml-auto text-gray-400 hover:text-gray-500 focus:outline-none">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>