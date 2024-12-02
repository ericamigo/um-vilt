<script setup>
import Checkbox from '@/Components/Checkbox.vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    })
}
</script>

<template>
    <Head title="Log In" />
    <GuestLayout>
        <div class="w-full max-w-sm space-y-10">
            <div class="space-y-2">
                <h1 class="text-3xl/tight font-extrabold">Welcome!</h1>
                <p class="text-sm text-neutral-500">Please login to continue</p>
            </div>

            <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
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
                            class="block w-full"
                            required
                        />
                        <InputError :message="form.errors.email" />
                    </div>
                    <div>
                        <InputLabel value="Password" for="password" />
                        <TextInput
                            type="password"
                            id="password"
                            v-model="form.password"
                            autocomplete="current-password"
                            class="block w-full"
                            required
                        />
                        <InputError :message="form.errors.password" />
                    </div>

                    <div>
                        <label class="flex items-center">
                            <Checkbox v-model:checked="form.remember" name="remember" />
                            <span class="ms-2">Remember me</span>
                        </label>
                    </div>

                    <div>
                        <button type="submit" :disabled="form.processing" class="btn btn-primary">
                            <strong>Log In</strong>
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="flex gap-4 text-xs">
                <Link
                    :href="route('password.request')"
                    class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white"
                >
                    Forgot Password
                </Link>
                <Link :href="route('register')" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white">
                    Register
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
