import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Mission from './views/Mission.vue'
import Travel from './views/Travel.vue'
import Explore from './views/Explore.vue'
import Account from './views/Account.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/mission',
      name: 'mission',
      component: Mission
    },
    {
      path: '/travel',
      name: 'travel',
      component: Travel
    },
    {
      path: '/explore',
      name: 'explore',
      component: Explore
    },
    {
      path: '/account',
      name: 'account',
      component: Account
    }
  ]
})
