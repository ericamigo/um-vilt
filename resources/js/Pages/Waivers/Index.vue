<script setup>
import { Card, CardBody } from "@/Components/Cards";
import { Head, Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    waivers: Array,
});
</script>

<template>
    <Head title="Waivers" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-10 flex justify-between">
                    <h1 class="text-3xl">Waivers</h1>
                    <div>
                        <Link :href="route('waivers.create')">Create</Link>
                    </div>
                </div>
                <Card>
                    <template v-for="waiver in waivers.data" :key="waiver.id">
                        <CardBody
                            class="border-t border-gray-200 dark:border-gray-700 first:border-t-0"
                        >
                            <div class="flex gap-6">
                                <div class="grow">
                                    <div>
                                        <Link
                                            :href="`/waivers/${waiver.id}`"
                                            class="font-bold hover:underline"
                                        >
                                            {{ waiver.year }} |
                                            {{ waiver.semester.name }}
                                        </Link>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ waiver.beneficiaries_count }}
                                        Beneficiaries
                                    </div>
                                </div>
                                <div>
                                    {{ waiver.status }}
                                </div>
                            </div>
                        </CardBody>
                    </template>
                </Card>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
