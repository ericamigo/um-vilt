<script setup>
import { Card, CardBody } from '@/Components/Cards'
import { DateTime } from 'luxon'
import { Head, Link } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { useLuxon } from '@/Composables/date'

defineProps({
    waivers: Object,
})
</script>

<template>
    <Head title="Waivers" />
    <AuthenticatedLayout>
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-2xl/10 font-extrabold">Waivers</h1>
                </div>
                <div>
                    <Link :href="route('waivers.create')" class="btn btn-primary">
                        <i class="ri-add-line"></i>
                        <strong>Create</strong>
                    </Link>
                </div>
            </div>
            <Card>
                <template v-for="waiver in waivers.data" :key="waiver.id">
                    <CardBody class="border-t border-neutral-200 first:border-t-0 dark:border-neutral-700">
                        <div class="flex gap-6">
                            <div class="grow">
                                <div>
                                    <Link :href="`/waivers/${waiver.id}`" class="font-bold hover:underline">
                                        {{ waiver.year }} |
                                        {{ waiver.semester.name }}
                                    </Link>
                                </div>
                                <div class="text-sm text-neutral-500">
                                    {{ waiver.beneficiaries_count }}
                                    Beneficiaries
                                </div>
                                <div class="text-sm text-neutral-500">
                                    <span v-tooltip="useLuxon(waiver.created_at).toRelative()">
                                        {{ useLuxon(waiver.created_at).toFormat('ff') }}
                                    </span>
                                </div>
                            </div>
                            <div>
                                {{ waiver.status }}
                            </div>
                        </div>
                    </CardBody>
                </template>
            </Card>
            <div class="flex justify-between">
                <div>
                    Page {{ waivers.meta.current_page }} of
                    {{ waivers.meta.last_page }}
                </div>
                <div class="flex gap-4">
                    <div>per page</div>
                    <template v-for="pp in [4, 6, 8, 10]" :key="pp">
                        <div>
                            <Link
                                :href="
                                    route('waivers.index', {
                                        page: route().params.page,
                                        per_page: pp,
                                    })
                                "
                                :class="{
                                    'text-red-800': route().params.per_page == pp,
                                }"
                                preserve-scroll
                            >
                                {{ pp }}
                            </Link>
                        </div>
                    </template>
                </div>
                <div class="flex gap-4">
                    <Link v-if="waivers.links.prev" :href="waivers.links.prev" preserve-scroll="">Prev</Link>
                    <button v-else type="button" class="disabled:opacity-50" disabled>Prev</button>
                    <Link v-if="waivers.links.next" :href="waivers.links.next" preserve-scroll="">Next</Link>
                    <button v-else type="button" class="disabled:opacity-50" disabled>Next</button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
