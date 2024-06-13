<template>
    <Head title="Page d'accueil" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Page d'accueil</h1>
        </template>
        <div class="py-12">
            <h1 class="text-center">Bienvenue chez Under!</h1>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>
