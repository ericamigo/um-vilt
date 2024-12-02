<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    waiver: {
        type: Object,
        required: true,
    },
    beneficiary: {
        type: Object,
        required: true,
    },
})

const form = useForm({})

function destroy() {
    form.delete(
        route('waivers.beneficiaries.destroy', {
            waiver: props.waiver.id,
            beneficiary: props.beneficiary.id,
        }),
        {
            preserveScroll: true,
            onBefore: () => confirm('Are you sure you want to delete this b?'),
        }
    )
}
</script>

<template>
    <div>
        <slot :destroy="destroy" :processing="form.processing"></slot>
    </div>
</template>
