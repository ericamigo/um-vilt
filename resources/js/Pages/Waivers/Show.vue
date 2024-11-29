<script setup>
import { Card, CardBody } from "@/Components/Cards";
import { Head, Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import BeneficiariesCard from "./Beneficiaries/Card.vue";
import BeneficiariesCreate from "./Beneficiaries/Create.vue";
import WaiversDestroy from "./Partials/Destroy.vue";

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
                    <div class="flex items-center gap-5">
                        <h1 class="text-2xl/10 font-bold">Waiver</h1>
                        <div>
                            <div
                                class="text-sm/6 font-bold"
                                v-text="waiver.status"
                            ></div>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div v-if="waiver.status === 'new'">
                            <WaiversDestroy
                                :waiver
                                v-slot="{ destroy, processing }"
                            >
                                <button
                                    type="button"
                                    class="py-2 px-3 rounded-lg bg-rose-500 text-white flex gap-2.5"
                                    :disabled="processing"
                                    @click="destroy"
                                >
                                    <i class="ri-delete-bin-6-line"></i>
                                </button>
                            </WaiversDestroy>
                        </div>
                        <div>
                            <Link
                                :href="route('waivers.index')"
                                class="py-2 px-4 rounded-lg bg-gray-200 dark:bg-gray-700 flex gap-2.5"
                            >
                                <i class="ri-arrow-left-line"></i>
                                <strong>Back</strong>
                            </Link>
                        </div>
                    </div>
                </div>

                <Card>
                    <CardBody class="space-y-4">
                        <div>
                            <div class="text-xs text-gray-500">Year</div>
                            <div>{{ waiver.year }}</div>
                        </div>
                        <div>
                            <div class="text-xs text-gray-500">Semester</div>
                            <div>{{ waiver.semester.name }}</div>
                        </div>
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
                        class="py-2 px-4 rounded-lg bg-emerald-500 flex gap-2.5"
                        preserve-scroll
                    >
                        <i class="ri-arrow-right-up-fill"></i>
                        <strong>Submit for Approval</strong>
                    </Link>
                </div>

                <div class="space-y-4">
                    <h4 class="text-lg font-bold">Beneficiaries</h4>
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
