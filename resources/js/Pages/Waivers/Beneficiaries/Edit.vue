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
    student_id: props.beneficiary.student_id,
    relationship: props.beneficiary.relationship,
});

function submit() {
    form.patch(
        route("waivers.beneficiaries.update", {
            waiver: props.waiver.id,
            beneficiary: props.beneficiary.ulid,
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
                    <InputLabel for="student-id" value="Student ID" />
                    <TextInput
                        id="student-id"
                        class="mt-1 block w-full"
                        v-model="form.student_id"
                        autofocus
                    />
                    <InputError
                        class="mt-2"
                        :message="form.errors.student_id"
                    />
                </div>
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
                        class="p-4 bg-green-500 font-bold disabled:opacity-50"
                        :disabled="form.processing"
                    >
                        Submit Changes
                    </button>
                </div>
            </CardBody>
        </Card>
    </form>
</template>
