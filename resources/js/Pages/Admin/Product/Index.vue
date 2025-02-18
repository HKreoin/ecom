<script setup>
import AdminLayout from '../Components/AdminLayout.vue';
import ProductList from './ProductList.vue';

defineProps({
    admin: String,
});
</script>

<template>
    <AdminLayout>
        <ProductList></ProductList>
    </AdminLayout>
</template>
