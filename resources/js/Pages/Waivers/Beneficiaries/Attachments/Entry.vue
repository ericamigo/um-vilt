<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    beneficiary: {
        type: Object,
        required: true,
    },
    attachment: {
        type: Object,
        required: true,
    },
})

const form = useForm({})

function destroy() {
    form.delete(
        route('beneficiaries.attachments.destroy', {
            beneficiary: props.beneficiary.id,
            attachment: props.attachment.ulid,
        }),
        {
            preserveScroll: true,
            onBefore: () => confirm('Are you sure you want to delete this attachment?'),
        }
    )
}
</script>

<template>
    <div class="-mx-3 flex gap-4 rounded-lg p-3 duration-150 hover:bg-neutral-100 dark:hover:bg-neutral-800">
        <div class="grow">
            <div>{{ attachment.file_name }}</div>
            <div class="text-xs text-neutral-500">
                {{ attachment.path }}
            </div>
        </div>
        <div class="flex gap-2">
            <div>
                <a
                    :href="
                        route('beneficiaries.attachments.destroy', {
                            beneficiary: beneficiary.id,
                            attachment: attachment.ulid,
                        })
                    "
                    class="inline-block px-1 text-neutral-500 outline-none duration-150 hover:text-neutral-900 dark:hover:text-white"
                >
                    <i class="ri-file-download-line"></i>
                </a>
            </div>
            <div>
                <button
                    type="button"
                    :disabled="form.processing"
                    class="px-1 text-neutral-500 outline-none duration-150 hover:text-rose-500"
                    @click="destroy"
                >
                    <i class="ri-delete-bin-6-line"></i>
                </button>
            </div>
        </div>
    </div>
</template>
