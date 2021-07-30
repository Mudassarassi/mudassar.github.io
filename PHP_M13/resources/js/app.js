require('./bootstrap');

require('alpinejs');

import {createApp} from 'vue';
import quadresComponent from './components/quadresComponent';
import botigasComponent from './components/botigasComponent';
import contentComponent from './components/contentComponent';

createApp({
    components:{
        contentComponent,


    }

}).mount('#app');


