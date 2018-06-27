import Vue from 'vue'
import Router from 'vue-router'

import Home from './views/Home.vue'
import Mission from './views/Mission.vue'
import Rover from './views/Rover.vue'

import Explore from './views/Explore.vue'
import Step1 from './views/exploreSteps/step1.vue'
import Step2 from './views/exploreSteps/step2.vue'

import Account from './views/Account.vue'
import AccountSignIn from './views/Account/AccountSignIn.vue'
import AccountSignUp from './views/Account/AccountSignUp.vue'
import AccountDashboard from './views/Account/AccountDashboard.vue'

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
      {
        path: '/account',
        name: 'account',
        component: Account,
        children: [
          {
            path: 'signin',
            name: 'account-signin',
            component: AccountSignIn
          },
          {
            path: 'signup',
            name: 'account-signUp',
            component: AccountSignUp
          },
          {
            path: 'dashboard',
            name: 'account-dashboard',
            component: AccountDashboard
          }
        ]
      }
  ]
})
