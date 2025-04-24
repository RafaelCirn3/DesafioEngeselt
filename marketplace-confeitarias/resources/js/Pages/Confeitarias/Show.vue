<template>
    <DefaultLayout>
      <h1 class="text-2xl font-bold mb-6">Detalhes da Confeitaria</h1>
  
      <div class="space-y-2">
        <p><strong>Nome:</strong> {{ confeitaria.nome }}</p>
        <p><strong>Latitude:</strong> {{ confeitaria.latitude }}</p>
        <p><strong>Longitude:</strong> {{ confeitaria.longitude }}</p>
        <p><strong>CEP:</strong> {{ confeitaria.cep || '—' }}</p>
        <p><strong>Rua:</strong> {{ confeitaria.rua || '—' }}</p>
        <p><strong>Número:</strong> {{ confeitaria.numero || '—' }}</p>
        <p><strong>Bairro:</strong> {{ confeitaria.bairro || '—' }}</p>
        <p><strong>Cidade:</strong> {{ confeitaria.cidade || '—' }}</p>
        <p><strong>Estado:</strong> {{ confeitaria.estado || '—' }}</p>
        <p><strong>Telefone:</strong> {{ confeitaria.telefone || '—' }}</p>
      </div>
  
      <div class="mt-6 flex gap-4">
        <Link :href="`/confeitarias/${confeitaria.id}/edit`" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
          Editar
        </Link>
        <Link href="/confeitarias" class="text-gray-600 hover:underline">Voltar à Lista</Link>
      </div>
    </DefaultLayout>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3'
  import DefaultLayout from '@/Layouts/DefaultLayout.vue'
  
  const props = defineProps({
    confeitaria: Object
  })
  </script>
  