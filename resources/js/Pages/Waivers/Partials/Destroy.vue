<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    waiver: {
        type: Object,
        required: true,
    },
});

const form = useForm({});

function destroy() {
    form.delete(route("waivers.destroy", props.waiver.id), {
        preserveScroll: true,
        onBefore: () => confirm("Are you sure you want to delete this waiver?"),
    });
}
</script>

<template>
    <div>
        <slot :destroy="destroy" :processing="form.processing"></slot>
    </div>
</template>
