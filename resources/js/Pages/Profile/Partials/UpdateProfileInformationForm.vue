<script setup>
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { Link, useForm, usePage } from '@inertiajs/vue3'

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
})

const user = usePage().props.auth.user

const form = useForm({
    name: user.name,
    email: user.email,
})
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-neutral-900 dark:text-neutral-100">Profile Information</h2>

            <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-400">
                Update your account's profile information and email address.
            </p>
        </header>

        <form class="mt-6 space-y-6" @submit.prevent="form.patch(route('profile.update'))">
            <div>
                <InputLabel value="Name" for="name" />

                <TextInput
                    type="text"
                    id="name"
                    v-model="form.name"
                    autocomplete="name"
                    autofocus
                    class="mt-1 block w-full"
                    required
                />

                <InputError :message="form.errors.name" class="mt-2" />
            </div>

            <div>
                <InputLabel value="Email" for="email" />

                <TextInput
                    type="email"
                    id="email"
                    v-model="form.email"
                    autocomplete="username"
                    class="mt-1 block w-full"
                    required
                />

                <InputError :message="form.errors.email" class="mt-2" />
            </div>

            <div v-if="mustVerifyEmail && user.email_verified_at === null">
                <p class="mt-2 text-sm text-neutral-800 dark:text-neutral-200">
                    Your email address is unverified.
                    <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button"
                        class="rounded-md text-sm text-neutral-600 underline hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-red-800 focus:ring-offset-2 dark:text-neutral-400 dark:hover:text-neutral-100 dark:focus:ring-offset-neutral-800"
                    >
                        Click here to re-send the verification email.
                    </Link>
                </p>

                <div
                    class="mt-2 text-sm font-medium text-green-600 dark:text-green-400"
                    v-show="status === 'verification-link-sent'"
                >
                    A new verification link has been sent to your email address.
                </div>
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p v-if="form.recentlySuccessful" class="text-sm text-neutral-600 dark:text-neutral-400">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
