import Vue from 'vue'
import Router from 'vue-router'

import Home from './views/Home.vue'
import Mission from './views/Mission.vue'
import Rover from './views/Rover.vue'

import Explore from './views/Explore.vue'
import Step1 from './views/exploreSteps/step1.vue'
import Step2 from './views/exploreSteps/step2.vue'

import Account from './views/Account.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    { path: '/', component: Home },

    { path: '/mission', component: Mission },

    { path: '/rover', component: Rover },

    { path: '/explore', component: Explore,
      children: [
        { path: '', component: Step1 },
        { path: ':planet', component: Step2 },
      ]},

    { path: '/account', component: Account  }
  ]
})
