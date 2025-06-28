
<template>
    <button
        :class="[
            'inline-flex items-center justify-center rounded-md text-sm font-medium transition',
            variantClasses,
        ]"
        v-bind="$attrs"
    >
        <slot />
    </button>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
    variant: {
        type: String,
        default: "default",
    },
});

const variantClasses = computed(() => {
    switch (props.variant) {
        case "primary":
            return "bg-blue-600 hover:bg-blue-700 text-white py-2 px-2 shadow";
        case "secondary":
            return "bg-gray-100 hover:bg-gray-200 text-black py-2 px-4";
        default:
            return "bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 shadow";
    }
});
</script>
