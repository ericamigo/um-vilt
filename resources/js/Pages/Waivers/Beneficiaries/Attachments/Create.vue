<script setup>
import { Card, CardBody } from "@/Components/Cards";
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
    beneficiary: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    attachment: "",
});

function submit() {
    form.post(
        route("beneficiaries.attachments.store", {
            beneficiary: props.beneficiary.id,
        }),
        {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        }
    );
}
</script>

<template>
    <form @submit.prevent="submit">
        <Card>
            <CardBody>
                <div>
                    <InputLabel for="attachment" value="Attachment" />
                    <div class="flex gap-4 mt-1">
                        <div class="grow">
                            <div>
                                <TextInput
                                    type="file"
                                    id="attachment"
                                    class="block w-full"
                                    @input="
                                        form.attachment = $event.target.files[0]
                                    "
                                    autofocus
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.attachment"
                                />
                            </div>
                        </div>
                        <div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                :disabled="form.processing"
                            >
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
