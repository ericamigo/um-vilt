<script setup>
import { onMounted, ref } from 'vue'

const model = defineModel({
    type: String,
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
    <select
        ref="input"
        v-model="model"
        class="rounded-lg border-neutral-300 shadow-sm focus:border-red-800 focus:ring-red-800 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 dark:focus:border-red-800 dark:focus:ring-red-800"
    >
        <slot />
    </select>
</template>
