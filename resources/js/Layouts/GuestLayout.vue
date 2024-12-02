<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="flex min-h-dvh flex-col pt-6 sm:pt-0 lg:flex-row">
        <div class="flex items-center justify-center bg-neutral-800 p-10 lg:w-1/2 lg:grow">
            <Link href="/">
                <ApplicationLogo class="h-20 fill-current text-neutral-500" />
            </Link>
        </div>
        <div class="flex w-full items-center justify-center p-4 md:p-6 lg:w-1/2 lg:grow">
            <slot></slot>
        </div>
    </div>
</template>
