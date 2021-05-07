import { createApp } from 'vue';
import router from './router'
import App from './components/App.vue';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min';

const app = createApp(App);

app.use(router)
app.mount('#app')
// createApp(App).mount('#app');