<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    })
}
</script>

<template>
    <Head title="Register" />
    <GuestLayout>
        <div class="w-full max-w-sm space-y-10">
            <div class="space-y-2">
                <h1 class="text-2xl/tight font-extrabold">Register</h1>
            </div>

            <form @submit.prevent="submit">
                <div class="space-y-4">
                    <div>
                        <InputLabel value="Name" for="name" />
                        <TextInput
                            type="text"
                            id="name"
                            v-model="form.name"
                            autocomplete="name"
                            autofocus
                            class="block w-full"
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
                            class="block w-full"
                            required
                        />
                        <InputError :message="form.errors.email" class="mt-2" />
                    </div>
                    <div>
                        <InputLabel value="Password" for="password" />
                        <TextInput
                            type="password"
                            id="password"
                            v-model="form.password"
                            autocomplete="new-password"
                            class="block w-full"
                            required
                        />
                        <InputError :message="form.errors.password" class="mt-2" />
                    </div>
                    <div>
                        <InputLabel value="Confirm Password" for="password_confirmation" />
                        <TextInput
                            type="password"
                            id="password_confirmation"
                            v-model="form.password_confirmation"
                            autocomplete="new-password"
                            class="block w-full"
                            required
                        />
                        <InputError :message="form.errors.password_confirmation" class="mt-2" />
                    </div>
                    <div>
                        <button type="submit" :disabled="form.processing" class="btn btn-primary">
                            <i class="ri-user-add-line"></i>
                            <strong>Create an Account</strong>
                        </button>
                    </div>
                </div>
            </form>

            <div class="flex gap-4 text-xs">
                <Link :href="route('login')" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white">
                    Log In
                </Link>
                <Link
                    :href="route('password.request')"
                    class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white"
                >
                    Forgot Password
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
