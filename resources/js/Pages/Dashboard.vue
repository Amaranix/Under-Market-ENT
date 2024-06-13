<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Page d'accueil</h1>
        </template>
        <div class="mt-12">
            <h1 class="text-center">Bienvenue chez Under !</h1>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>
