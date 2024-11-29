<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard"></Head>
    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Dashboard
            </h2>
        </template>

        <Card>
            <template v-for="i in 7" :key="i">
                <CardBody
                    class="border-t border-gray-200 dark:border-gray-700 first:border-t-0"
                >
                    {{ i }}
                </CardBody>
            </template>
        </Card>
    </AuthenticatedLayout>
</template>
