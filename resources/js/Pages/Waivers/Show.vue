<script setup>
import { Card, CardBody } from '@/Components/Cards'
import { Head, Link } from '@inertiajs/vue3'
import AttachmentsCreate from './Attachments/Create.vue'
import AttachmentsEntry from './Attachments/Entry.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import BeneficiariesCard from './Beneficiaries/Card.vue'
import BeneficiariesCreate from './Beneficiaries/Create.vue'
import StatusBadge from '@/Components/Badges/Status.vue'
import WaiversDestroy from './Partials/Destroy.vue'

const props = defineProps({
    waiver: Object,
})
</script>

<template>
    <Head title="Waiver" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-screen-md space-y-10 sm:px-6 lg:px-8">
                <div class="flex justify-between">
                    <div class="flex items-center gap-5">
                        <h1 class="text-2xl/10 font-extrabold">Waiver</h1>
                        <div>
                            <StatusBadge :status="{ label: waiver.status }" />
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div v-if="waiver.status === 'new'">
                            <WaiversDestroy :waiver v-slot="{ destroy, processing }">
                                <button
                                    type="button"
                                    :disabled="processing"
                                    class="btn btn-danger px-3"
                                    @click="destroy"
                                    v-tooltip="`Delete`"
                                >
                                    <i class="ri-delete-bin-6-line"></i>
                                </button>
                            </WaiversDestroy>
                        </div>
                        <div>
                            <Link :href="route('waivers.index')" class="btn btn-light">
                                <i class="ri-arrow-left-line"></i>
                                <strong>Back</strong>
                            </Link>
                        </div>
                    </div>
                </div>

                <Card>
                    <CardBody class="space-y-4">
                        <div>
                            <div class="text-xs text-neutral-500">Year</div>
                            <div>{{ waiver.year }}</div>
                        </div>
                        <div>
                            <div class="text-xs text-neutral-500">Semester</div>
                            <div>{{ waiver.semester.name }}</div>
                        </div>
                    </CardBody>
                    <CardBody class="border-t border-neutral-200 dark:border-neutral-700">
                        <div class="mb-4">
                            <h4 class="text-lg font-extrabold">Attachments</h4>
                        </div>
                        <div v-if="waiver.attachments" class="-mb-3">
                            <template v-for="(attachment, index) in waiver.attachments" :key="attachment.id">
                                <AttachmentsEntry :attachment :waiver />
                            </template>
                        </div>
                        <AttachmentsCreate :waiver class="mt-6" />
                    </CardBody>
                </Card>

                <div v-if="waiver.beneficiaries.length && waiver.status === 'new'">
                    <Link
                        :href="route('waivers.submit-for-approval', waiver.id)"
                        method="patch"
                        as="button"
                        type="button"
                        class="btn btn-success"
                        preserve-scroll
                    >
                        <i class="ri-arrow-right-up-fill"></i>
                        <strong>Submit for Approval</strong>
                    </Link>
                </div>

                <div class="space-y-4">
                    <h4 class="text-lg font-bold">Beneficiaries</h4>
                    <BeneficiariesCard :waiver />
                    <BeneficiariesCreate v-if="waiver.status === 'new'" :waiver />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
