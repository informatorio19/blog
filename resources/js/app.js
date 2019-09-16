require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('cuadro-buscar', require('./components/CuadroComponent.vue').default);



const app = new Vue({
    el: '#app',
});
