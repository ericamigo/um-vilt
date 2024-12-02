<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
import { useDark, useToggle } from '@vueuse/core'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import Dropdown from '@/Components/Dropdown.vue'
import DropdownLink from '@/Components/DropdownLink.vue'
import NavLink from '@/Components/NavLink.vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import UserDropdown from './UserDropdown.vue'

const showingNavigationDropdown = ref(false),
    isDark = useDark(),
    toggleDark = useToggle(isDark)
</script>

<template>
    <nav class="sticky top-0 z-[100] border-b border-neutral-100 bg-white dark:border-neutral-700 dark:bg-neutral-800">
        <div class="flex justify-between p-4 md:px-6">
            <div>
                <Link :href="route('dashboard')">
                    <ApplicationLogo class="block h-10 w-auto fill-current text-neutral-500" />
                </Link>
            </div>
            <div>
                <UserDropdown />
            </div>
        </div>
    </nav>
</template>
