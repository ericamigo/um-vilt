<script setup>
import { Card, CardBody } from '@/Components/Cards'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, Link, router, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage(),
    auth = computed(() => page.props.auth)
</script>

<template>
    <Head title="Dashboard"></Head>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <Card>
                    <template v-for="notification in auth.user.notifications" :key="notification.id">
                        <CardBody class="border-t border-neutral-200 first:border-t-0 dark:border-neutral-700">
                            <div class="flex gap-6">
                                <div class="grow">
                                    <Link
                                        :href="route('notifications.show', notification.id)"
                                        :class="{
                                            'font-bold': !notification.read_at,
                                        }"
                                        class="hover:underline"
                                    >
                                        {{ notification.data.subject }}
                                    </Link>
                                    <div
                                        :class="[
                                            'text-sm',
                                            {
                                                'text-neutral-500': notification.read_at,
                                            },
                                        ]"
                                    >
                                        {{ notification.data.description }}
                                    </div>
                                    <div class="text-xs text-neutral-500">
                                        {{ notification.created_at }}
                                    </div>
                                </div>
                                <div>
                                    <Link
                                        :href="route('notifications.update', notification.id)"
                                        method="patch"
                                        as="button"
                                        type="button"
                                        :class="[
                                            'hover:text-white',
                                            {
                                                'text-neutral-500': notification.read_at,
                                            },
                                        ]"
                                    >
                                        <i v-if="notification.read_at" class="ri-circle-line"></i>
                                        <i v-else class="ri-circle-fill"></i>
                                    </Link>
                                </div>
                            </div>
                        </CardBody>
                    </template>
                </Card>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
