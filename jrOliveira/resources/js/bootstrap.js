// Importações necessárias
import Vue from 'vue';
import axios from 'axios';

// Configurações iniciais
window.Vue = Vue;
window.axios = axios;

// Defina o token CSRF globalmente para requisições AJAX
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found!');
}

// Mais configurações e inicializações do seu aplicativo
// ...

