<template>
  <div class="account">
    <Header/>


    <!-- router -->
    <!-- <AccountLogIn/> -->
    <router-view></router-view>

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
