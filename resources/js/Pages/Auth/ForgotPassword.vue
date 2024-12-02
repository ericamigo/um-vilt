<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

defineProps({
    status: {
        type: String,
    },
})

const form = useForm({
    email: '',
})

const submit = () => {
    form.post(route('password.email'))
}
</script>

<template>
    <Head title="Forgot Password" />
    <GuestLayout>
        <div class="w-full max-w-sm space-y-10">
            <div class="space-y-2">
                <h1 class="text-2xl/tight font-extrabold">Forgot Password</h1>
                <p class="text-sm text-neutral-500">
                    Just let us know your email address and we will email you a password reset link that will allow you
                    to choose a new one.
                </p>
            </div>

            <div v-if="status" class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <div class="space-y-4">
                    <div>
                        <InputLabel value="Email" for="email" />
                        <TextInput
                            type="email"
                            id="email"
                            v-model="form.email"
                            autocomplete="username"
                            autofocus
                            class="mt-1 block w-full"
                            required
                        />

                        <InputError :message="form.errors.email" class="mt-2" />
                    </div>
                    <div class="grid">
                        <button type="submit" :disabled="form.processing" class="btn btn-primary justify-center">
                            <i class="ri-mail-send-line"></i>
                            <strong>Email Password Reset Link</strong>
                        </button>
                    </div>
                </div>
            </form>
            <div class="flex gap-4 text-xs">
                <Link :href="route('login')" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white">
                    Log In
                </Link>
                <Link :href="route('register')" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white">
                    Register
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
