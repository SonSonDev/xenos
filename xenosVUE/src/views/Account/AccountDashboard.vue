<template>
  <section class="account_dashboard">
    <h1>DASHu DASHu DASHBOARD</h1>
    <h2>{{userData}}</h2>
    <button v-on:click="bye">Déconnexion</button>
  </section>
</template>

<script>
export default {
  name:"AccountDashboard",
  data: function(){
    return {
      userData: {}
    }
  },
  methods: {
    getData: function(){
      this.userData=JSON.parse(localStorage.getItem("xenosUserData"))
    },
    bye: function(){
      localStorage.removeItem("xenosUserData");
      location.href = '/account';
    }
  },
  mounted:function(){
    this.getData()
  }
}
</script>

<style lang="scss" scoped>


h1 {
  color: var(--main-white);
}
h2 {
  color: red;
}


.account_dashboard {
  @media(min-width: 768px){
    margin-top: 200px;
  }
}
</style>
