<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <aside class="fixed bottom-0 left-0 top-[73px] flex w-64 flex-col">
        <div class="grow gap-px overflow-y-auto px-3 py-4 md:py-6">
            <Link
                :href="route('dashboard')"
                :class="[
                    'flex items-center gap-2.5 rounded-lg px-3 py-2 duration-150',
                    route().current('dashboard') ? 'bg-red-800' : 'hover:bg-neutral-100 dark:hover:bg-neutral-800',
                ]"
            >
                <i class="ri-dashboard-line"></i>
                <strong>Dashboard</strong>
            </Link>
            <div class="py-2"></div>
            <Link
                :href="route('waivers.index')"
                :class="[
                    'flex items-center gap-2.5 rounded-lg px-3 py-2 duration-150',
                    route().current('waivers.*') ? 'bg-red-800' : 'hover:bg-neutral-100 dark:hover:bg-neutral-800',
                ]"
            >
                <i class="ri-file-edit-line"></i>
                <strong>Waivers</strong>
            </Link>
            <Link
                :href="`#`"
                :class="[
                    'flex items-center gap-2.5 rounded-lg px-3 py-2 duration-150',
                    false ? 'bg-red-800' : 'hover:bg-neutral-100 dark:hover:bg-neutral-800',
                ]"
            >
                <i class="ri-file-text-line"></i>
                <strong>Leave Applications</strong>
            </Link>
        </div>
    </aside>
</template>
