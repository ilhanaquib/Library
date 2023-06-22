<template>
    <div class="flex justify-between">
        <div class="py-12">
          <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div>
                <h1 class="font-bold text-xl border border-b py-5 px-5">{{ title }}</h1>
              </div>
              <div class="scroll-container py-5">
                <div class="book-container">
                  <div v-for="book in books" :key="book.id" class="card">
                    <img :src="book.image" :alt="book.title" class="book-image">
                    <p>{{ book.title }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  defineProps({
    books: {
      type: Array,
      required: true,
    },

    title: {
    type: String,
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