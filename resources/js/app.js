// import {createApp} from 'vue/dist/vue.esm-bundler.js'; 
import {createApp} from 'vue'; // instead of line 1 thanks to resolve:alias in vite.config.js

import home from './home.vue'; // home component
import '../css/app.css'; // import styles here instead of vite for efficiency

const app = createApp({})
    .component('home-component', home)
    .mount("#app");