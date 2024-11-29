<script setup>
import { Card, CardBody } from "@/Components/Cards";
import { Head, Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import BeneficiariesCard from "./Beneficiaries/Card.vue";
import BeneficiariesCreate from "./Beneficiaries/Create.vue";

const props = defineProps({
    waiver: Object,
});
</script>

<template>
    <Head title="Waiver" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-screen-md sm:px-6 lg:px-8 space-y-10">
                <div class="flex justify-between">
                    <h1 class="text-3xl">Waiver</h1>
                    <div>
                        <Link :href="route('waivers.index')">Back</Link>
                    </div>
                </div>

                <Card>
                    <CardBody>
                        {{ waiver.id }}
                    </CardBody>
                </Card>

                <div
                    v-if="
                        waiver.beneficiaries.length && waiver.status === 'new'
                    "
                >
                    <Link
                        :href="route('waivers.submit-for-approval', waiver.id)"
                        method="patch"
                        as="button"
                        type="button"
                        preserve-scroll
                        >submit for approval</Link
                    >
                </div>

                <div class="space-y-4">
                    <h4 class="text-lg">Beneficiaries</h4>
                    <BeneficiariesCard :waiver />
                    <BeneficiariesCreate
                        v-if="waiver.status === 'new'"
                        :waiver
                    />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
