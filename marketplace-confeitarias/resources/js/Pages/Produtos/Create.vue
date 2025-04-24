<template>
    <div>
      <h1 class="text-2xl font-bold mb-4">Adicionar Produto</h1>
      <form @submit.prevent="submit">
        <div class="mb-4">
          <label for="nome" class="block">Nome</label>
          <input v-model="produto.nome" type="text" id="nome" class="form-input w-full" required />
        </div>
        <div class="mb-4">
          <label for="valor" class="block">Valor</label>
          <input v-model="produto.valor" type="number" id="valor" class="form-input w-full" required />
        </div>
        <div class="mb-4">
          <label for="descricao" class="block">Descrição</label>
          <textarea v-model="produto.descricao" id="descricao" class="form-input w-full"></textarea>
        </div>
        <div class="mb-4">
          <label for="confeitaria_id" class="block">Confeitaria</label>
          <select v-model="produto.confeitaria_id" id="confeitaria_id" class="form-input w-full">
            <option v-for="confeitaria in confeitarias" :key="confeitaria.id" :value="confeitaria.id">{{ confeitaria.nome }}</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      confeitarias: Array,
    },
    data() {
      return {
        produto: {
          nome: '',
          valor: '',
          descricao: '',
          confeitaria_id: '',
        },
      }
    },
    methods: {
      submit() {
        this.$inertia.post('/produtos', this.produto)
      }
    }
  }
  </script>
  