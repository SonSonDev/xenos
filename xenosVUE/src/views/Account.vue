<template>
  <div class="account">
    <Header/>


    <!-- router -->
    <AccountLogIn/>

  </div>
</template>

<script>
import Header from "@/components/Header.vue";
import AccountLogIn from "@/components/Account/AccountLogIn.vue";

export default {
  name: 'account',
  components: {
    Header, AccountLogIn
  }
}
</script>
