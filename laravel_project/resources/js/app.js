import './bootstrap';

import { createApp } from 'vue';

import app from './components/app.vue';

createApp(app).mount('#app');

import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();