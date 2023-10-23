<template>
  <Head title="About us"/>

  <AppLayout>
    <template #header>
      About us
    </template>

    <div class="p-4 bg-white rounded-lg shadow-xs">
      Sample static text page
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
