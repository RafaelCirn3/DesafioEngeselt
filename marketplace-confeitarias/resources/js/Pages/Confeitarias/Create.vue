<template>
    <DefaultLayout>
      <h1 class="text-2xl font-bold mb-4">Nova Confeitaria</h1>
  
      <form @submit.prevent="submit" class="space-y-4">
        <div>
          <label class="block font-medium">Nome *</label>
          <input v-model="form.nome" type="text" class="border p-2 w-full" />
          <div v-if="form.errors.nome" class="text-red-500 text-sm">{{ form.errors.nome }}</div>
        </div>
  
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block font-medium">Latitude *</label>
            <input v-model="form.latitude" type="number" step="any" class="border p-2 w-full" />
            <div v-if="form.errors.latitude" class="text-red-500 text-sm">{{ form.errors.latitude }}</div>
          </div>
          <div>
            <label class="block font-medium">Longitude *</label>
            <input v-model="form.longitude" type="number" step="any" class="border p-2 w-full" />
            <div v-if="form.errors.longitude" class="text-red-500 text-sm">{{ form.errors.longitude }}</div>
          </div>
        </div>
  
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block font-medium">CEP</label>
            <input v-model="form.cep" type="text" class="border p-2 w-full" />
          </div>
          <div>
            <label class="block font-medium">Telefone</label>
            <input v-model="form.telefone" type="text" class="border p-2 w-full" />
          </div>
        </div>
  
        <div class="grid grid-cols-3 gap-4">
          <div>
            <label class="block font-medium">Rua</label>
            <input v-model="form.rua" type="text" class="border p-2 w-full" />
          </div>
          <div>
            <label class="block font-medium">Número</label>
            <input v-model="form.numero" type="text" class="border p-2 w-full" />
          </div>
          <div>
            <label class="block font-medium">Bairro</label>
            <input v-model="form.bairro" type="text" class="border p-2 w-full" />
          </div>
        </div>
  
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block font-medium">Cidade</label>
            <input v-model="form.cidade" type="text" class="border p-2 w-full" />
          </div>
          <div>
            <label class="block font-medium">Estado</label>
            <input v-model="form.estado" type="text" class="border p-2 w-full" />
          </div>
        </div>
  
        <div class="flex gap-4 mt-6">
          <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</button>
          <Link href="/confeitarias" class="text-gray-600 hover:underline">Cancelar</Link>
        </div>
      </form>
    </DefaultLayout>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  import DefaultLayout from '@/Layouts/DefaultLayout.vue'
  
  const form = useForm({
    nome: '',
    latitude: '',
    longitude: '',
    cep: '',
    rua: '',
    numero: '',
    bairro: '',
    cidade: '',
    estado: '',
    telefone: '',
  })
  
  const submit = () => {
    form.post('/confeitarias')
  }
  </script>
  