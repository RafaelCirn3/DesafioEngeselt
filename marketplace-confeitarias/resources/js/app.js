import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import './bootstrap'
// Caminho correto para o DefaultLayout.vue
import DefaultLayout from './Layouts/DefaultLayout.vue'

createInertiaApp({
  resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props }) {
    createApp({ render: () => h(App, props) })
      .component('DefaultLayout', DefaultLayout)  // Registre o layout globalmente
      .mount(el)
  },
})
