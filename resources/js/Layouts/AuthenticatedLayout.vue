<script setup>
import Navigation from "./Partials/Navigation.vue";
</script>

<template>
    <div>
        <div class="min-h-screen">
            <Navigation />
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
