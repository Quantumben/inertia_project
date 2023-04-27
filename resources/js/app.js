import './bootstrap';

import { createApp } from "vue";
import AppIndex from "./components/App.vue";

const app = createApp();
app.component('index', AppIndex);
app.mount('#app');
