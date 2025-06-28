<template>
  <div class="inline-flex items-center gap-2">
    <input
      v-bind="$attrs"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
      class="text-sm px-3 py-2 border border-gray-300 rounded-md focus:outline-none cursor-text"
      readonly
      :size="modelValue.length"
    />
    <button v-if="showCopy" class="p-2 rounded-md transition " @click="copyToClipboard">
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <rect x="3" y="3" width="14" height="14" rx="2" ry="2" stroke="currentColor" />
        <rect x="7" y="7" width="14" height="14" rx="2" ry="2" fill="white" stroke="currentColor" />
      </svg>
    </button>
  </div>
</template>

<script setup>
const props = defineProps({
  modelValue: String,
  showCopy: {
    type: Boolean,
    default: true
  }
})

function copyToClipboard() {
  navigator.clipboard.writeText(props.modelValue)
}
</script>
