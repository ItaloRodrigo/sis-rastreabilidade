import { createApp } from 'vue'
import { createPinia } from 'pinia'
import piniaPluginPersistedstate from "pinia-plugin-persistedstate";

import App from './App.vue'
import router from './router'

import 'bootstrap/dist/css/bootstrap.css';
import bootstrap from 'bootstrap/dist/js/bootstrap.js';

// import './assets/main.css'
// import Layouts
import BaseLayout from "@/layouts/BaseLayout.vue";
import BaseFullLayout from "@/layouts/BaseFullLayout.vue";

// import Provide
import auth_store from "./stores/auth";

const app = createApp(App)

app.use(bootstrap);
const pinia = createPinia();
pinia.use(piniaPluginPersistedstate);
app.use(pinia)
app.use(router)

app.use({
    install(app, options) {
      app.config.globalProperties.$auth = auth_store();
    },
});

app.component("base-layout",BaseLayout);
app.component("base-fulllayout",BaseFullLayout);

app.mount('#app')
