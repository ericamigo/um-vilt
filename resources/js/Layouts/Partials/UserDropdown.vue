<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div>
        <Menu as="div" class="relative inline-block text-left">
            <div>
                <MenuButton class="btn btn-light">
                    <i class="ri-user-line"></i>
                    <strong>{{ $page.props.auth.user.first_name }}</strong>
                </MenuButton>
            </div>

            <transition
                enter-active-class="transition duration-100 ease-out"
                enter-from-class="transform scale-95 opacity-0"
                enter-to-class="transform scale-100 opacity-100"
                leave-active-class="transition duration-75 ease-in"
                leave-from-class="transform scale-100 opacity-100"
                leave-to-class="transform scale-95 opacity-0"
            >
                <MenuItems
                    class="absolute right-0 mt-2 w-56 origin-top-right rounded-lg border border-neutral-200 bg-white dark:border-neutral-700 dark:bg-neutral-800"
                >
                    <div class="grid py-2">
                        <MenuItem v-slot="{ active }">
                            <Link href="#" :class="['px-4 py-2 text-left', { 'bg-red-800': active }]">Profile</Link>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <Link href="#" :class="['px-4 py-2 text-left', { 'bg-red-800': active }]">Account</Link>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <Link
                                :href="route('logout')"
                                method="post"
                                as="button"
                                type="button"
                                :class="['px-4 py-2 text-left', { 'bg-red-800': active }]"
                            >
                                Log Out
                            </Link>
                        </MenuItem>
                    </div>
                </MenuItems>
            </transition>
        </Menu>
    </div>
</template>
