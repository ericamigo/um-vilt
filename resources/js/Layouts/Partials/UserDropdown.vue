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
                    class="absolute right-0 mt-2 w-56 origin-top-right rounded-xl border border-neutral-200 bg-white dark:border-neutral-700 dark:bg-neutral-800"
                >
                    <div class="grid p-1">
                        <div class="px-4 py-3">
                            <div class="font-bold">
                                {{ $page.props.auth.user.first_name }}
                                {{ $page.props.auth.user.last_name }}
                            </div>
                            <div class="text-xs text-neutral-500">{{ $page.props.auth.user.email }}</div>
                        </div>
                        <div class="-mx-1 py-1">
                            <div class="border-t border-neutral-200 dark:border-neutral-700"></div>
                        </div>
                        <MenuItem v-slot="{ active }">
                            <Link
                                href="#"
                                :class="[
                                    'flex gap-2.5 rounded-lg px-4 py-2 text-left duration-150',
                                    { 'bg-neutral-100 dark:bg-neutral-900': active },
                                ]"
                            >
                                <i class="ri-user-line"></i>
                                <span>Profile</span>
                            </Link>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <Link
                                href="#"
                                :class="[
                                    'flex gap-2.5 rounded-lg px-4 py-2 text-left duration-150',
                                    { 'bg-neutral-100 dark:bg-neutral-900': active },
                                ]"
                            >
                                <i class="ri-shield-user-line"></i>
                                <span>Account</span>
                            </Link>
                        </MenuItem>
                        <div class="-mx-1 py-1">
                            <div class="border-t border-neutral-200 dark:border-neutral-700"></div>
                        </div>
                        <MenuItem v-slot="{ active }">
                            <Link
                                :href="route('logout')"
                                method="post"
                                as="button"
                                type="button"
                                :class="[
                                    'flex gap-2.5 rounded-lg px-4 py-2 text-left duration-150',
                                    { 'bg-neutral-100 dark:bg-neutral-900': active },
                                ]"
                            >
                                <i class="ri-arrow-right-line"></i>
                                <span>Log Out</span>
                            </Link>
                        </MenuItem>
                    </div>
                </MenuItems>
            </transition>
        </Menu>
    </div>
</template>
