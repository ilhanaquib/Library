<template>
    <AppLayout title="Books">
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Your Books
        </h2>
      </template>
      <div class="flex">
          <books-card :books="books" title="Books You've Read" />
          <books-card :books="books" title="Borrowed Books" />
      </div>
      <div class="flex">
          <books-card :books="books" title="Recommended Books"/>
          <books-card :books="books" title="Top Books"/>
      </div>
    </AppLayout>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';

  import AppLayout from '@/Layouts/AppLayout.vue';
  import BooksCard from '@/Components/BooksCard.vue';
  
  defineProps({
    books: {
      type: Array,
      required: true,
    },
  });
  </script>
  
  <style>
  .scroll-container {
    overflow-x: scroll;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none;
  }

  .scroll-container::-webkit-scrollbar {
    display: none; /* Chrome, Safari, and Opera */
  }
  
  .book-container {
    width: 670px; /* Adjust the width according to your needs */
    display: flex;
    margin-left: 23px;
  }
  
  .card {
    flex: 0 0 auto;
    margin-right: 20px;
    width: 100px; /* Adjust the spacing between books */
    height: 270px;
  }
  </style>
  