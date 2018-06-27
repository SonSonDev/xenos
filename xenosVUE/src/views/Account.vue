<template>
  <div class="account">
    <Header/>


    <!-- router -->
    <!-- <AccountLogIn/> -->
    <!-- <transition name="fade"> -->
    <router-view></router-view>
    <!-- </transition> -->
  </div>
</template>

<script>
import Header from "@/components/Header.vue";

export default {
  name: 'account',
  components: {
    Header
  }
}
</script>
