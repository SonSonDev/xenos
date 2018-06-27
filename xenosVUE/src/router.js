import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Mission from './views/Mission.vue'
import Rover from './views/Rover.vue'
import Explore from './views/Explore.vue'
import ExplorePlanet from './views/ExplorePlanet.vue'
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
      path: '/rover',
      name: 'rover',
      component: Rover
    },
    {
      path: '/explore',
      name: 'explore',
      component: Explore
    },
    {
      path: '/explore/:planet',
      name: 'explore-planet',
      component: ExplorePlanet
    },
    {
      path: '/account',
      name: 'account',
      component: Account
    }
  ]
})
