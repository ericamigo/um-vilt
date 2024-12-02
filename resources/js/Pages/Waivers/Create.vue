<script setup>
import { Card, CardBody } from '@/Components/Cards'
import { Head, Link, useForm } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import SelectInput from '@/Components/SelectInput.vue'
import TextInput from '@/Components/TextInput.vue'

defineProps({
    semesters: Array,
})

const form = useForm({
    year: '',
    semester: '',
})

function submit() {
    form.post(route('waivers.store'))
}
</script>

<template>
    <Head title="Create Waiver" />
    <AuthenticatedLayout>
        <div class="mx-auto max-w-screen-md space-y-6 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h1 class="text-2xl/10 font-extrabold">Create Waiver</h1>
                <div>
                    <Link :href="route('waivers.index')" class="btn btn-light">
                        <i class="ri-arrow-left-line"></i>
                        <strong>Back</strong>
                    </Link>
                </div>
            </div>
            <form @submit.prevent="submit">
                <Card>
                    <CardBody class="space-y-4">
                        <div>
                            <InputLabel value="Year" for="year" />
                            <TextInput id="year" v-model="form.year" autofocus class="mt-1 block w-full" />
                            <InputError :message="form.errors.year" class="mt-2" />
                        </div>
                        <div>
                            <InputLabel value="Semester" for="semester" />
                            <SelectInput id="semester" v-model="form.semester" class="mt-1 block w-full">
                                <option value=""></option>
                                <template v-for="semester in semesters" :key="semester.value">
                                    <option :value="semester.value">
                                        {{ semester.name }}
                                    </option>
                                </template>
                            </SelectInput>
                            <InputError :message="form.errors.semester" class="mt-2" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line"></i>
                                <strong>Submit</strong>
                            </button>
                        </div>
                    </CardBody>
                </Card>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
