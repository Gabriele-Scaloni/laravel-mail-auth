require('./bootstrap');

window.Vue = require('vue');
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('videogames-component', require('./components/VideogamesComponent.vue').default);

document.addEventListener("DOMContentLoaded", function() {
    const app = new Vue({
        el: '#app',
    });
});