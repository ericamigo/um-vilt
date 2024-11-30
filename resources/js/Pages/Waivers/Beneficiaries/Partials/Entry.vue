<script setup>
import { CardBody } from "@/Components/Cards";
import { onMounted, ref, watch } from "vue";
import { useDateFormatter, useDateToRelative } from "@/Composables/date";
import { useForm } from "@inertiajs/vue3";
import BeneficiariesDestroy from "./Destroy.vue";
import BeneficiariesEdit from "../Edit.vue";

defineProps({
    waiver: {
        type: Object,
        required: true,
    },
    beneficiary: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <CardBody
        class="border-t border-gray-200 dark:border-gray-700 first:border-t-0"
    >
        <div class="flex gap-6">
            <div class="grow">
                <div class="font-bold">
                    {{ beneficiary.student.user.first_name }}
                    {{ beneficiary.student.user.last_name }}
                </div>
                <div
                    class="text-sm text-gray-500"
                    v-text="beneficiary.relationship"
                ></div>

                <div>
                    {{ useDateFormatter("helo") }}
                    {{ useDateToRelative("helo") }}
                </div>
            </div>
            <div v-if="waiver.status === 'new'" class="flex gap-5">
                <div>
                    <button
                        type="button"
                        :class="[
                            'duration-150',
                            {
                                'text-gray-500 hover:text-gray-900 dark:hover:text-white':
                                    !showEdit,
                            },
                        ]"
                        @click="showEdit = !showEdit"
                    >
                        <i class="ri-edit-line"></i>
                    </button>
                </div>
                <BeneficiariesDestroy
                    :waiver
                    :beneficiary
                    v-slot="{ destroy, processing }"
                >
                    <button
                        type="button"
                        @click="destroy"
                        :disabled="processing"
                        class="text-gray-500 hover:text-rose-500 duration-150"
                    >
                        <i class="ri-delete-bin-6-line"></i>
                    </button>
                </BeneficiariesDestroy>
            </div>
        </div>
        <div v-if="showEdit" class="mt-5">
            <BeneficiariesEdit :waiver :beneficiary />
        </div>
    </CardBody>
</template>
