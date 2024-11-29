<script setup>
import { CardBody } from "@/Components/Cards";
import { ref } from "vue";
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

const showEdit = ref(false);
</script>

<template>
    <CardBody
        class="border-t border-gray-200 dark:border-gray-700 first:border-t-0"
    >
        <div class="flex gap-6">
            <div class="grow">
                {{ beneficiary }}
            </div>
            <div v-if="waiver.status === 'new'" class="flex gap-5">
                <div>
                    <button type="button" @click="showEdit = !showEdit">
                        edit
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
                    >
                        delete
                    </button>
                </BeneficiariesDestroy>
            </div>
        </div>
        <div v-if="showEdit" class="mt-5">
            <BeneficiariesEdit :waiver :beneficiary />
        </div>
    </CardBody>
</template>
