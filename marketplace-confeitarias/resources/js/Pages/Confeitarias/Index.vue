<template>
    <DefaultLayout>
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Confeitarias</h1>
        <Link href="/confeitarias/create" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
          Nova Confeitaria
        </Link>
      </div>
  
      <div v-if="confeitarias.length" class="space-y-2">
        <div
          v-for="confeitaria in confeitarias"
          :key="confeitaria.id"
          class="p-4 border rounded-md shadow-sm flex justify-between items-center"
        >
          <div>
            <h2 class="font-semibold text-lg">{{ confeitaria.nome }}</h2>
            <p class="text-sm text-gray-600">📍 {{ confeitaria.cidade || '-' }}, {{ confeitaria.estado || '-' }}</p>
          </div>
          <div class="flex gap-2">
            <Link :href="`/confeitarias/${confeitaria.id}`" class="text-blue-600 hover:underline">Ver</Link>
            <Link :href="`/confeitarias/${confeitaria.id}/edit`" class="text-yellow-600 hover:underline">Editar</Link>
            <button @click="deleteConfeitaria(confeitaria.id)" class="text-red-600 hover:underline">Excluir</button>
          </div>
        </div>
      </div>
      <div v-else>
        <p class="text-gray-500">Nenhuma confeitaria cadastrada ainda.</p>
      </div>
    </DefaultLayout>
  </template>
  
  <script setup>
  import { Link, router } from '@inertiajs/vue3'
  import DefaultLayout from '@/Layouts/DefaultLayout.vue'
  
  const props = defineProps({
    confeitarias: Array,
  })
  
  const deleteConfeitaria = (id) => {
    if (confirm('Deseja realmente excluir esta confeitaria?')) {
      router.delete(`/confeitarias/${id}`)
    }
  }
  </script>
  