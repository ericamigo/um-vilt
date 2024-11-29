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
});

const form = useForm({
    student_id: "",
    relationship: "",
});

function submit() {
    form.post(
        route("waivers.beneficiaries.store", { waiver: props.waiver.id }),
        {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        },
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
                <div>
                    <button
                        type="submit"
                        class="py-2 px-4 rounded-lg bg-indigo-500 flex gap-2.5 disabled:opacity-50"
                        :disabled="form.processing"
                    >
                        <i class="ri-save-line"></i>
                        <strong>Submit</strong>
                    </button>
                </div>
            </CardBody>
        </Card>
    </form>
</template>
