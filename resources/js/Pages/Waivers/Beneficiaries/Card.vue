<script setup>
import { Card, CardBody } from '@/Components/Cards'
import { computed } from 'vue'
import BeneficiariesEntry from './Partials/Entry.vue'

const props = defineProps({
    waiver: {
        type: Object,
        required: true,
    },
})

const beneficiaries = computed(() => props.waiver.beneficiaries)
</script>

<template>
    <Card>
        <template v-for="beneficiary in beneficiaries" :key="beneficiary.id">
            <BeneficiariesEntry :beneficiary :waiver />
        </template>
        <CardBody v-if="beneficiaries.length === 0">No beneficiaries found</CardBody>
    </Card>
</template>
