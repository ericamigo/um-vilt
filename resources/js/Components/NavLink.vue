<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
})

const classes = computed(() =>
    props.active
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-400 dark:border-red-800 text-sm font-medium leading-5 text-neutral-900 dark:text-neutral-100 focus:outline-none focus:border-red-700 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-neutral-500 dark:text-neutral-400 hover:text-neutral-700 dark:hover:text-neutral-300 hover:border-neutral-300 dark:hover:border-neutral-700 focus:outline-none focus:text-neutral-700 dark:focus:text-neutral-300 focus:border-neutral-300 dark:focus:border-neutral-700 transition duration-150 ease-in-out'
)
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
