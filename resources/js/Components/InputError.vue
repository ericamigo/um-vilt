<script setup>
defineProps({
    message: {
        type: String,
    },
})
</script>

<template>
    <div v-if="message" class="text-xs text-rose-500" v-text="message"></div>
</template>
