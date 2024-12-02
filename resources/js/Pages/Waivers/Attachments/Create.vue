<script setup>
import { useForm } from '@inertiajs/vue3'
import FileInput from '@/Components/FileInput.vue'
import InputError from '@/Components/InputError.vue'

const props = defineProps({
    waiver: {
        type: Object,
        required: true,
    },
})

const form = useForm({
    attachment: '',
})

function submit() {
    form.post(route('waivers.attachments.store', { waiver: props.waiver.id }), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset()
            if (document.querySelector('#attachment')) {
                document.querySelector('#attachment').value = ''
            }
        },
    })
}
</script>

<template>
    <form @submit.prevent="submit">
        <div>
            <div class="mt-1 flex gap-4">
                <div class="grow">
                    <div>
                        <FileInput
                            type="file"
                            id="attachment"
                            class="block w-full border border-neutral-200 dark:border-neutral-700"
                            @input="form.attachment = $event.target.files[0]"
                        />
                        <InputError :message="form.errors.attachment" class="mt-2" />
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
    </form>
</template>
