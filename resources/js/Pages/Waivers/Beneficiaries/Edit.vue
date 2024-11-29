<script setup>
import { Card, CardBody } from "@/Components/Cards";
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
    waiver: {
        type: Object,
        required: true,
    },
    beneficiary: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    relationship: props.beneficiary.relationship,
});

function submit() {
    form.patch(
        route("waivers.beneficiaries.update", {
            waiver: props.waiver.id,
            beneficiary: props.beneficiary.id,
        }),
        {
            preserveScroll: true,
        }
    );
}
</script>

<template>
    <form @submit.prevent="submit">
        <Card>
            <CardBody class="space-y-4">
                <div>
                    <InputLabel for="relationship" value="Relationship" />
                    <TextInput
                        id="yerelationshipar"
                        class="mt-1 block w-full"
                        v-model="form.relationship"
                        autofocus
                    />
                    <InputError
                        class="mt-2"
                        :message="form.errors.relationship"
                    />
                </div>
                <div v-if="form.isDirty">
                    <button
                        type="submit"
                        class="py-2 px-4 rounded-lg bg-indigo-500 flex gap-2.5 disabled:opacity-50"
                        :disabled="form.processing"
                    >
                        <i class="ri-save-line"></i>
                        <strong>Submit Changes</strong>
                    </button>
                </div>
            </CardBody>
        </Card>
    </form>
</template>
