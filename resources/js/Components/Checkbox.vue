<script setup>
import { computed } from 'vue'

const emit = defineEmits(['update:checked'])

const props = defineProps({
    checked: {
        type: [Array, Boolean],
        required: true,
    },
    value: {
        default: null,
    },
})

const proxyChecked = computed({
    get() {
        return props.checked
    },

    set(val) {
        emit('update:checked', val)
    },
})
</script>

<template>
    <input
        type="checkbox"
        v-model="proxyChecked"
        :value="value"
        class="rounded border-neutral-300 text-red-800 shadow-sm focus:ring-red-800 dark:border-neutral-700 dark:bg-neutral-900 dark:focus:ring-red-800 dark:focus:ring-offset-neutral-800"
    />
</template>
