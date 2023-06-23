<template>
  <AppLayout title="Collection">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Collection
      </h2>
    </template>

    <div class="flex justify-between">
      <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { defineProps, onMounted } from 'vue';

defineProps({
  collections: {
    type: Array,
    required: true,
  },
});

onMounted(() => {
  console.log(collections.value); // Log the received book object
});
</script>