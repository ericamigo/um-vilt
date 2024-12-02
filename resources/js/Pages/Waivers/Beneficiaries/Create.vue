<script setup>
import { Card, CardBody } from '@/Components/Cards'
import { useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'

const props = defineProps({
    waiver: {
        type: Object,
        required: true,
    },
})

const form = useForm({
    student_id: '',
    relationship: '',
})

function submit() {
    form.post(route('waivers.beneficiaries.store', { waiver: props.waiver.id }), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    })
}
</script>

<template>
    <form @submit.prevent="submit">
        <Card>
            <CardBody class="space-y-4">
                <div>
                    <InputLabel value="Student ID" for="student-id" />
                    <TextInput id="student-id" v-model="form.student_id" autofocus class="mt-1 block w-full" />
                    <InputError :message="form.errors.student_id" class="mt-2" />
                </div>
                <div>
                    <InputLabel value="Relationship" for="relationship" />
                    <div class="mt-1 flex gap-4">
                        <div class="grow">
                            <div>
                                <TextInput
                                    id="yerelationshipar"
                                    v-model="form.relationship"
                                    autofocus
                                    class="block w-full"
                                />
                                <InputError :message="form.errors.relationship" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <button type="submit" :disabled="form.processing" class="btn btn-primary">
                                <i class="ri-save-line"></i>
                                <strong>Submit</strong>
                            </button>
                        </div>
                    </div>
                </div>
            </CardBody>
        </Card>
    </form>
</template>
