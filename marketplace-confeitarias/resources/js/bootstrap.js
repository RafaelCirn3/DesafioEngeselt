import _ from 'lodash'
window._ = _

import axios from 'axios'
window.axios = axios

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

// Habilita envio do cookie XSRF-TOKEN junto nas requisições
axios.defaults.withCredentials = true

const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token
} else {
    console.error('CSRF token not found!')
}