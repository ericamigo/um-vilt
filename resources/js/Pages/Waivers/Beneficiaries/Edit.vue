<script setup>
import { useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'
import { Dialog, DialogPanel, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { ref } from 'vue'

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

const showDialog = ref(false),
    form = useForm({
        relationship: props.beneficiary.relationship,
    })

function submit() {
    form.patch(
        route('waivers.beneficiaries.update', {
            waiver: props.waiver.id,
            beneficiary: props.beneficiary.id,
        }),
        {
            preserveScroll: true,
            preserveState: true,
            onSuccess: () => closeDialog(),
        }
    )
}

function openDialog() {
    showDialog.value = true
}

function closeDialog() {
    showDialog.value = false
}
</script>

<template>
    <div>
        <slot :openDialog="openDialog"></slot>
        <teleport to="body">
            <TransitionRoot as="template" :show="showDialog" appear>
                <Dialog as="div" :open="showDialog" class="relative z-10" @close="closeDialog">
                    <TransitionChild
                        as="template"
                        enter="duration-150 ease-out"
                        enter-from="opacity-0"
                        enter-to="opacity-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100"
                        leave-to="opacity-0"
                    >
                        <div class="fixed inset-0 bg-black/60 backdrop-blur" />
                    </TransitionChild>
                    <div class="fixed inset-0 overflow-y-auto">
                        <div class="flex min-h-full items-center justify-center p-4">
                            <TransitionChild
                                as="template"
                                enter="duration-150 ease-out"
                                enter-from="opacity-0 scale-95"
                                enter-to="opacity-100 scale-100"
                                leave="duration-200 ease-in"
                                leave-from="opacity-100 scale-100"
                                leave-to="opacity-0 scale-95"
                            >
                                <DialogPanel
                                    class="w-full max-w-screen-sm transform space-y-6 overflow-hidden rounded-2xl border border-neutral-200 bg-white p-4 shadow-xl transition-all dark:border-neutral-700 dark:bg-neutral-900 md:p-6"
                                >
                                    <div class="flex justify-between">
                                        <h1 class="text-2xl/10 font-extrabold">Edit Beneficiary</h1>
                                        <div></div>
                                    </div>
                                    <form @submit.prevent="submit">
                                        <div class="space-y-4">
                                            <div>
                                                <InputLabel value="Relationship" for="relationship" />
                                                <TextInput
                                                    id="yerelationshipar"
                                                    v-model="form.relationship"
                                                    autofocus
                                                    class="mt-1 block w-full"
                                                />
                                                <InputError :message="form.errors.relationship" class="mt-2" />
                                            </div>
                                            <div>
                                                <button
                                                    type="submit"
                                                    :disabled="form.processing"
                                                    class="flex gap-2.5 rounded-lg bg-red-800 px-4 py-2 disabled:opacity-50"
                                                >
                                                    <i class="ri-save-line"></i>
                                                    <strong>Submit Changes</strong>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </DialogPanel>
                            </TransitionChild>
                        </div>
                    </div>
                </Dialog>
            </TransitionRoot>
        </teleport>
    </div>
</template>
