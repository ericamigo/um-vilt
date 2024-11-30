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
                                    class="btn btn-danger px-3"
                                    :disabled="processing"
                                    @click="destroy"
                                    v-tooltip="`Delete`"
                                >
                                    <i class="ri-delete-bin-6-line"></i>
                                </button>
                            </WaiversDestroy>
                        </div>
                        <div>
                            <Link
                                :href="route('waivers.index')"
                                class="btn btn-light"
                            >
                                <i class="ri-arrow-left-line"></i>
                                <strong>Back</strong>
                            </Link>
                        </div>
                    </div>
                </div>

                <div class="flex">
                    <div>
                        <VDropdown :distance="6">
                            <!-- This will be the popover reference (for the events and position) -->
                            <button>Click me</button>

                            <!-- This will be the content of the popover -->
                            <template #popper>
                                <input
                                    class="tooltip-content"
                                    v-model="msg"
                                    placeholder="Tooltip content"
                                />
                                <p>
                                    {{ msg }}
                                </p>

                                <!-- You can put other components too -->
                                <ExampleComponent char="=" />
                            </template>
                        </VDropdown>
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

                <div class="card">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Hic illum mollitia consequuntur neque aliquid tenetur,
                        pariatur maxime ducimus asperiores cum inventore fugiat
                        omnis nemo alias aspernatur dignissimos facere expedita
                        recusandae.
                    </div>
                </div>

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
                    <BeneficiariesCreate
                        v-if="waiver.status === 'new'"
                        :waiver
                    />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
