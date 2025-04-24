<template>
    <div>
      <h1 class="text-2xl font-bold mb-4">Produtos</h1>
      <div class="mb-4">
        <inertia-link href="/produtos/create" class="btn btn-primary">Adicionar Produto</inertia-link>
      </div>
      <table class="table-auto w-full border-collapse border">
        <thead>
          <tr>
            <th class="border p-2">Nome</th>
            <th class="border p-2">Valor</th>
            <th class="border p-2">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="produto in produtos" :key="produto.id">
            <td class="border p-2">{{ produto.nome }}</td>
            <td class="border p-2">{{ produto.valor }}</td>
            <td class="border p-2">
              <inertia-link :href="'/produtos/' + produto.id" class="btn btn-secondary">Visualizar</inertia-link>
              <inertia-link :href="'/produtos/' + produto.id + '/edit'" class="btn btn-warning">Editar</inertia-link>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      produtos: Array,
    },
  }
  </script>
  