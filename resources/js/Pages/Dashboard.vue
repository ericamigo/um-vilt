<script setup>
import { Card, CardBody } from '@/Components/Cards'
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
</script>

<template>
    <Head title="Dashboard"></Head>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-200">Dashboard</h2>
        </template>

        <Card>
            <template v-for="i in 7" :key="i">
                <CardBody class="border-t border-neutral-200 first:border-t-0 dark:border-neutral-700">
                    {{ i }}
                </CardBody>
            </template>
        </Card>
    </AuthenticatedLayout>
</template>
