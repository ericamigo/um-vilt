<script setup>
defineProps({
    status: {
        type: Object,
        required: true,
    },
})
</script>

<template>
    <div class="flex">
        <div
            :class="[
                'select-none rounded-full px-2.5 text-xs/6 font-bold',
                status.color || 'bg-neutral-100 dark:bg-neutral-800',
            ]"
            v-text="status.label"
        ></div>
    </div>
</template>
