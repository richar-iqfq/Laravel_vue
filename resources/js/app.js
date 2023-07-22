// import {createApp} from 'vue/dist/vue.esm-bundler.js'; 
import {createApp} from 'vue'; // instead of line 1 thanks to resolve:alias in vite.config.js

import '../css/app.css'; // import styles here instead of vite for efficiency

const app = createApp({
    data()
        {
            return {
                message : 'Using Vue.js 3 on Laravel',
                value : 0
            }
        },
        methods : 
        {
            increase() {
                this.value ++
            },
            decrease() {
                this.value --
            }

        },
        computed: 
        {
            isButtonDisable() {
                return this.value == 0 ? true : false
            }
        }
}).mount("#app");