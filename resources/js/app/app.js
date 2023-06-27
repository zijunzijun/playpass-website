require('./bootstrap');

import {createApp} from 'vue';
import Attractions from '../../views/website/attraction/_components/Attractions';
import Checkout from '../../views/website/checkout/_components/Checkout';

let domExist = document.getElementById('vue-app');
if (domExist) {
    let app = createApp({
        components: {
            Attractions,
            Checkout,
        }
    });

    app.mount('#vue-app');
}