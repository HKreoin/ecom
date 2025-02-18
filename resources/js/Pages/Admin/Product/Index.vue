<script setup>
import AdminLayout from '../Components/AdminLayout.vue';
import ProductList from './ProductList.vue';

defineProps({
    admin: String,
});
</script>

<template>
    <AdminLayout>
        <ProductLis st></ProductList>
    </AdminLayout>
</template>
