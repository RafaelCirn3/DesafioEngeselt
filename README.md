# 🍰 Marketplace de Confeitarias

Este projeto é um desafio técnico de estágio e consiste no desenvolvimento de um **Marketplace de Confeitarias**, utilizando **Laravel**, **Vue.js** e **Inertia.js**. A aplicação permite o cadastro, gerenciamento e visualização de confeitarias e seus produtos, além de exibição em mapa interativo.

---

## ⚙️ Tecnologias Utilizadas

- **Back-end**: Laravel
- **Front-end**: Vue.js
- **Integração**: Inertia.js
- **Banco de Dados**: PostgreSQL
- **Mapa Interativo**: Leaflet.js (diferencial) - a ser feito
- **Testes Automatizados**: PHPUnit / Jest (diferencial) - a ser feito 

---

## 🛠️ Funcionalidades

- Cadastro, edição, exclusão e listagem de confeitarias
- Cadastro de produtos vinculados a uma confeitaria
- Exibição das confeitarias em um mapa interativo (Leaflet.js)
- Visualização de detalhes ao clicar em um marcador
- Upload de múltiplas imagens por produto

---

## 📋 Regras de Negócio

- Produtos devem estar sempre vinculados a uma confeitaria.
- A exclusão de uma confeitaria deve remover todos os seus produtos.
- A localização no mapa deve usar latitude e longitude válidas.
- Campos obrigatórios devem ser validados.

---

## 🧾 Estrutura dos Dados

### Confeitaria

- `nome`: string (obrigatório)
- `latitude`: float (obrigatório)
- `longitude`: float (obrigatório)
- `cep`: string
- `rua`: string
- `numero`: string
- `bairro`: string
- `cidade`: string
- `estado`: string
- `telefone`: string

### Produto

- `nome`: string (obrigatório)
- `valor`: decimal (obrigatório)
- `descricao`: texto
- `imagens`: múltiplos arquivos
- `confeitaria_id`: foreign key (obrigatório)

---

## 🧭 Fluxo de Uso

1. O usuário cadastra uma confeitaria.
2. Adiciona produtos associados à confeitaria.
3. A visualização em mapa mostra as confeitarias com base em suas coordenadas.
4. Ao clicar em um marcador, um resumo da confeitaria é exibido.

---

## 🧪 Testes Automatizados (Diferencial)

- Testes de validação de campos
- Cadastro e exclusão de entidades
- Validação de relacionamento entre produtos e confeitarias
- Verificação da lógica de remoção em cascata
- Testes de exibição do mapa e marcadores

---

## 🗂️ Estrutura do Projeto

```
/app
  /Models
  /Http/Controllers
/resources
  /js/Pages
/database
  /migrations
/tests
```

---

## 🚀 Como Rodar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/rafaelcirn3/marketplace-confeitarias.git
   cd marketplace-confeitarias
   ```

2. Instale as dependências do back-end:
   ```bash
   composer install
   ```

3. Instale as dependências do front-end:
   ```bash
   npm install
   ```

4. Configure o arquivo `.env` com os dados do PostgreSQL e outras variáveis.

5. Rode as migrations:
   ```bash
   php artisan migrate
   ```

6. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan key:generate
   php artisan serve
   ```

7. Compile os assets do front-end:
   ```bash
   npm run dev
   ```

---

## 💻 Requisitos Técnicos

- PHP >= 8.1
- Laravel >= 10
- Composer
- Node.js >= 18
- PostgreSQL

---

## 📜 Boas Práticas

- Utilize nomes de variáveis claros e semânticos
- Comente trechos complexos de código
- Faça commits frequentes e descritivos
- Mantenha o código organizado e modularizado

---

## 👋 Considerações Finais

Se não conseguir implementar todas as funcionalidades, não se preocupe. Demonstre seu progresso com organização, clareza e boa estrutura de código.

Boa sorte no desafio! 🚀
