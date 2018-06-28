<template>
  <div class="account">
    <Header/>
    <router-view></router-view>
  </div>
</template>

<script>
import Header from "@/components/Header.vue";

export default {
  name: 'account',
  components: {
    Header
  },
  methods: {
    getUser: function() {
      return fetch('http://127.0.0.1:8000/api/users', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        return data['hydra:member'];
      })
    },
    checkConnection: function(){
      if (localStorage.getItem("xenosUserData")) {
        var localData = JSON.parse(localStorage.getItem("xenosUserData"));
  
        this.getUser().then(function(data){
          for (var i = 0; i < data.length; i++) {
            if (data[i].email===localData.email && data[i].password===localData.password) {
              localStorage.setItem("xenosUserData", JSON.stringify(data[i]))
              if (!location.href.includes('/account/dashboard') && location.href.includes('/account')) {
                this.$router.push('/account/dashboard')
              }
              return true;
            }
          }
          return false;
        }.bind(this))
        .then(result => {
          if(!result){
            localStorage.removeItem("xenosUserData");
            this.$router.push('/account/signin')
          }
        })
      } else {
        if(!location.href.includes('/account/signin') && !location.href.includes('/account/signup') && location.href.includes('/account')){
          this.$router.push('/account/signin')
        }
      }
      
    }
  },
  mounted: function(){
    this.checkConnection();
  },
  updated: function(){
    this.checkConnection();
  }
}

</script>

<style lang="scss" scoped>
  .account {
    @media (min-width: 768px) {
      
    background-image: url("../assets/img/bg-pattern01.svg");
    background-repeat: no-repeat;
    background-size: contain;
    }
  }
</style>
