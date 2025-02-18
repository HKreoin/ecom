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
        <main class="h-auto p-4 pt-20 md:ml-64">
            <slot />
        </main>
    </div>
</template>
