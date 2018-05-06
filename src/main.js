// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import axios from 'axios'
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded'
Vue.prototype.$axios = axios
Vue.use(VueRouter)
Vue.config.productionTip = false


import Homepage from './pages/Homepage'
import Volunteer from './pages/Volunteer'
import Participant from './pages/Participant'
import Spectator from './pages/Spectator'
import Sponsor from './pages/Sponsor'

const routes = [
  { path: '/', component: Homepage },
  { path: '/volunteer', component: Volunteer },
  { path: '/participant', component: Participant },
  { path: '/spectator', component: Spectator },
  { path: '/sponsor', component: Sponsor },
]

const router = new VueRouter({
  mode: 'history',
  routes
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
