require('./bootstrap');

import {createApp} from 'vue';
import Attractions from '../../views/website/attraction/_components/Attractions';

let domExist = document.getElementById('vue-app');
if (domExist) {
    let app = createApp({
        components: {
            Attractions
        }
    });

    app.mount('#vue-app');
}