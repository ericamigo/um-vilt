<script setup>
import { CardBody } from '@/Components/Cards'
import { ref } from 'vue'
import { useDateFormatter, useDateToRelative } from '@/Composables/date'
import AttachmentsCreate from '../Attachments/Create.vue'
import AttachmentsEntry from '../Attachments/Entry.vue'
import BeneficiariesDestroy from './Destroy.vue'
import BeneficiariesEdit from '../Edit.vue'

defineProps({
    waiver: {
        type: Object,
        required: true,
    },
    beneficiary: {
        type: Object,
        required: true,
    },
})

const showUpload = ref(false)
</script>

<template>
    <CardBody class="border-t border-neutral-200 first:border-t-0 dark:border-neutral-700">
        <div class="flex gap-6">
            <div class="grow">
                <div class="font-bold">
                    {{ beneficiary.student.user.first_name }}
                    {{ beneficiary.student.user.last_name }}
                </div>
                <div class="text-sm text-neutral-500" v-text="beneficiary.relationship"></div>

                <div>
                    {{ useDateFormatter('helo') }}
                    {{ useDateToRelative('helo') }}
                </div>
            </div>
            <div v-if="waiver.status === 'new'" class="flex gap-3">
                <div>
                    <button
                        type="button"
                        :class="[
                            'px-1 duration-150',
                            {
                                'text-neutral-500 hover:text-neutral-900 dark:hover:text-white': !showUpload,
                            },
                        ]"
                        @click="showUpload = !showUpload"
                        v-tooltip="`Upload`"
                    >
                        <i class="ri-attachment-line"></i>
                        <span v-if="beneficiary.attachments.length" class="pl-2.5">
                            {{ beneficiary.attachments.length }}
                        </span>
                    </button>
                </div>
                <BeneficiariesEdit :beneficiary :waiver v-slot="{ openDialog }">
                    <button
                        type="button"
                        class="px-1 text-neutral-500 duration-150 hover:text-neutral-900 dark:hover:text-white"
                        @click="openDialog"
                        v-tooltip="`Edit`"
                    >
                        <i class="ri-edit-line"></i>
                    </button>
                </BeneficiariesEdit>
                <BeneficiariesDestroy :beneficiary :waiver v-slot="{ destroy, processing }">
                    <button
                        type="button"
                        :disabled="processing"
                        class="px-1 text-neutral-500 duration-150 hover:text-rose-500"
                        @click="destroy"
                        v-tooltip="`Delete`"
                    >
                        <i class="ri-delete-bin-6-line"></i>
                    </button>
                </BeneficiariesDestroy>
            </div>
        </div>
        <div v-if="showUpload" class="mt-4 space-y-4">
            <div>
                <template v-for="attachment in beneficiary.attachments" :key="attachment.id">
                    <AttachmentsEntry :attachment :beneficiary />
                </template>
            </div>
            <AttachmentsCreate :beneficiary />
        </div>
    </CardBody>
</template>
