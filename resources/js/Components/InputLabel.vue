<script setup>
defineProps({
    value: {
        type: String,
    },
})
</script>

<template>
    <label class="mb-1 inline-block cursor-pointer text-sm font-medium text-neutral-700 dark:text-neutral-300">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
