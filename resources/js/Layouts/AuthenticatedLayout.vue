<script setup>
import Navigation from './Partials/Navigation.vue'
import Sidebar from './Partials/Sidebar.vue'
</script>

<template>
    <Sidebar />
    <div class="wrapper flex grow flex-col">
        <Navigation />
        <main id="content" class="content grow pt-5" role="content">
            <slot />
        </main>
    </div>
</template>
