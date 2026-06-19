import '../css/app.css';
import 'bootstrap';

import { createApp } from 'vue';
import SearchBar from './components/SearchBar.vue';

const app = createApp({});
app.component('search-bar', SearchBar);
app.mount('#vue-app');




