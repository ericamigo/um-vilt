<script setup>
import { onMounted, ref } from 'vue'

const model = defineModel({
    type: [String, Number],
    required: true,
})

const input = ref(null)

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus()
    }
})

defineExpose({ focus: () => input.value.focus() })
</script>

<template>
    <input
        ref="input"
        v-model="model"
        class="relative h-10 cursor-pointer rounded-lg border border-neutral-300 px-3 py-[7px] shadow-sm focus:cursor-default focus:border-red-800 focus:outline-none focus:ring-1 focus:ring-red-800 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 dark:file:border-neutral-700 dark:file:bg-neutral-950 dark:focus:border-red-800 dark:focus:ring-red-800"
    />
</template>
