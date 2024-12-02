<script setup>
import Navigation from './Partials/Navigation.vue'
import Sidebar from './Partials/Sidebar.vue'
</script>

<template>
    <Navigation />
    <Sidebar />
    <main class="p-4 md:p-6 lg:pl-72">
        <slot />
    </main>
</template>
