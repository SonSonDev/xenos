import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Mission from './views/Mission.vue'
import Travel from './views/Travel.vue'
import Product from './views/Product.vue'
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
      path: '/product',
      name: 'product',
      component: Product
    },
    {
      path: '/account',
      name: 'account',
      component: Account
    }
  ]
})
