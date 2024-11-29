<script setup>
import { Card, CardBody } from "@/Components/Cards";
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    waiver: Object,
});
</script>

<template>
    <Head title=" Waiver" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-screen-md sm:px-6 lg:px-8">
                <div class="mb-10 flex justify-between">
                    <h1 class="text-3xl">Waiver</h1>
                    <div>
                        <Link :href="route('waivers.index')">Back</Link>
                    </div>
                </div>

                <Card>
                    <CardBody>
                        {{ waiver }}
                    </CardBody>
                </Card>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
