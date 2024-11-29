<script setup>
import { Card, CardBody } from "@/Components/Cards";
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import SelectInput from "@/Components/SelectInput.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
    semesters: Array,
});

const form = useForm({
    year: "",
    semester: "",
});

function submit() {
    form.post(route("waivers.store"));
}
</script>

<template>
    <Head title="Create Waiver" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-screen-md sm:px-6 lg:px-8">
                <div class="mb-10 flex justify-between">
                    <h1 class="text-3xl">Create Waiver</h1>
                    <div>
                        <Link :href="route('waivers.index')">Back</Link>
                    </div>
                </div>
                <form @submit.prevent="submit">
                    <Card>
                        <CardBody class="space-y-4">
                            <div>
                                <InputLabel for="year" value="Year" />
                                <TextInput
                                    id="year"
                                    class="mt-1 block w-full"
                                    v-model="form.year"
                                    autofocus
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.year"
                                />
                            </div>
                            <div>
                                <InputLabel for="semester" value="Semester" />
                                <SelectInput
                                    id="semester"
                                    class="mt-1 block w-full"
                                    v-model="form.semester"
                                >
                                    <option value=""></option>
                                    <template
                                        v-for="semester in semesters"
                                        :key="semester.value"
                                    >
                                        <option :value="semester.value">
                                            {{ semester.name }}
                                        </option>
                                    </template>
                                </SelectInput>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.semester"
                                />
                            </div>
                            <div>
                                <button
                                    type="submit"
                                    class="p-4 bg-green-500 font-bold"
                                >
                                    Submit
                                </button>
                            </div>
                        </CardBody>
                    </Card>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
