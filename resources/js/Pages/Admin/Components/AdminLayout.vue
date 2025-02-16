<script setup>
import { onMounted } from 'vue';
import { initFlowbite } from 'flowbite';
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue';

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <div class="bg-gray-50 antialiased dark:bg-gray-900">
        <!-- Navbar -->
        <Navbar />
        <!-- Sidebar -->
        <Sidebar />
        <!-- Main -->
        <slot />
    </div>
</template>
