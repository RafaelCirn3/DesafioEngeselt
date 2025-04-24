<template>
    <DefaultLayout>
      <section class="space-y-6">
        <p class="text-lg">
          Bem-vindo ao <strong>Marketplace de Confeitarias</strong>! Este sistema foi desenvolvido para gerenciar
          o cadastro de confeitarias e seus produtos, além de exibir tudo em um mapa interativo 🍬🗺️.
        </p>
  
        <div>
          <h2 class="text-xl font-semibold">O que você pode fazer:</h2>
          <ul class="list-disc list-inside mt-2 space-y-1">
            <li>📍 Cadastrar novas confeitarias com localização geográfica</li>
            <li>🧁 Gerenciar os produtos de cada confeitaria</li>
            <li>🗺️ Visualizar as confeitarias no mapa</li>
            <li>✏️ Editar e excluir registros conforme necessário</li>
          </ul>
        </div>
  
        <div class="mt-8">
          <Link href="/confeitarias" class="inline-block bg-purple-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-purple-700 transition">
            Acessar Confeitarias
          </Link>
        </div>
      </section>
    </DefaultLayout>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3'
  import DefaultLayout from '@/Layouts/DefaultLayout.vue'
  </script>
  