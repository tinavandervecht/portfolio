import Vue from 'vue';
import App from './components/App.vue';
import VueParticles from 'vue-particles';

Vue.use(VueParticles);

new Vue({
    el: '#app',
    render: h => h(App),
});