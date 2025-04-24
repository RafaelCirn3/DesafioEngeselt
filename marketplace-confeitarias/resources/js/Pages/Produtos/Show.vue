<template>
    <div>
      <h1 class="text-2xl font-bold mb-4">Produto: {{ produto.nome }}</h1>
      <p><strong>Valor:</strong> {{ produto.valor }}</p>
      <p><strong>Descrição:</strong> {{ produto.descricao }}</p>
      <p><strong>Confeitaria:</strong> {{ produto.confeitaria.nome }}</p>
      <inertia-link :href="'/produtos/' + produto.id + '/edit'" class="btn btn-warning">Editar</inertia-link>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      produto: Object,
    },
  }
  </script>
  