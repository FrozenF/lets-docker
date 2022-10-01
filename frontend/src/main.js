import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

// Import CSS
import 'bootstrap/dist/css/bootstrap.css'
import 'jquery/dist/jquery.min'
import 'bootstrap/dist/js/bootstrap.min'

import PokemonIndex from './components/pokemon/PokemonIndex'

Vue.config.productionTip = false

const router = new VueRouter({
  routes: [
    {
      path: '/',
      name: 'pokemon',
      component: PokemonIndex
    },
  ],
  mode: 'history'
})

new Vue({
  el: '#app',
  router,
  render: h => h(App),
})
