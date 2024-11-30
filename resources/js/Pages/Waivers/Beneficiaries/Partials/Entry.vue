<script setup>
import { CardBody } from "@/Components/Cards";
import { onMounted, ref, watch } from "vue";
import { useDateFormatter, useDateToRelative } from "@/Composables/date";
import { useForm } from "@inertiajs/vue3";
import BeneficiariesDestroy from "./Destroy.vue";
import BeneficiariesEdit from "../Edit.vue";
import {
    Dialog,
    DialogPanel,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";

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

const showEdit = ref(false);
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
            <div v-if="waiver.status === 'new'" class="flex gap-3">
                <div>
                    <button
                        type="button"
                        :class="[
                            'duration-150 px-1',
                            {
                                'text-gray-500 hover:text-gray-900 dark:hover:text-white':
                                    !showEdit,
                            },
                        ]"
                        v-tooltip="`Edit`"
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
                        v-tooltip="`Delete`"
                        class="text-gray-500 px-1 hover:text-rose-500 duration-150"
                    >
                        <i class="ri-delete-bin-6-line"></i>
                    </button>
                </BeneficiariesDestroy>
            </div>
        </div>

        <TransitionRoot appear :show="showEdit" as="template">
            <Dialog
                as="div"
                :open="showEdit"
                @close="showEdit = !showEdit"
                class="relative z-10"
            >
                <TransitionChild
                    as="template"
                    enter="duration-300 ease-out"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="duration-200 ease-in"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                >
                    <div class="fixed inset-0 bg-black/60 backdrop-blur" />
                </TransitionChild>

                <div class="fixed inset-0 overflow-y-auto">
                    <div
                        class="flex min-h-full items-center justify-center p-4 text-center"
                    >
                        <TransitionChild
                            as="template"
                            enter="duration-300 ease-out"
                            enter-from="opacity-0 scale-95"
                            enter-to="opacity-100 scale-100"
                            leave="duration-200 ease-in"
                            leave-from="opacity-100 scale-100"
                            leave-to="opacity-0 scale-95"
                        >
                            <DialogPanel
                                class="w-full max-w-md transform overflow-hidden rounded-2xl align-middle shadow-xl transition-all"
                            >
                                <BeneficiariesEdit :waiver :beneficiary />
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>
    </CardBody>
</template>
