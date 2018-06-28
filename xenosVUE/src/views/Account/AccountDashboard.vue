<template>
  <section class="account_dashboard">
    <h3 class="account_dashboard-title">Hello <span class="gradientText">{{userData.firstname}} {{userData.lastname}}</span> !</h3>
    <p>{{userData}}</p>

<div class="container">
  <div class="account_dashboard-containerItem">
    <div class="account_dashboard-containerItem-profile">
      <h4 class="account_dashboard-containerItem-profile-title">Profile details</h4>
      <p class="account_dashboard-containerItem-profile-info"><span class="gradientText">First name :</span> {{userData.firstname}}</p>
      <p class="account_dashboard-containerItem-profile-info"><span class="gradientText">Last name :</span> {{userData.lastname}}</p>
      <p class="account_dashboard-containerItem-profile-info"><span class="gradientText">Email :</span> {{userData.email}}</p>
      <p class="account_dashboard-containerItem-profile-info"><span class="gradientText">Password :</span> *********</p>
    </div>
    <div class="account_dashboard-containerItem-scheduled">
      <h4 class="account_dashboard-containerItem-scheduled-title">Scheduled</h4>
    </div>
  </div>
  <div class="account_dashboard-containerItem">
    <div class="account_dashboard-containerItem-live">
      <h4 class="account_dashboard-containerItem-live-title">Live</h4>
      <div class="account_dashboard-containerItem-live-player"></div>
    </div>
    <div class="account_dashboard-containerItem-gallery">
      <h4 class="account_dashboard-containerItem-gallery-title">Gallery</h4>
      <p class="account_dashboard-containerItem-gallery-text">You have no picture yet.</p>
    </div>
  </div>
  <div class="account_dashboard-containerItem">
    <div class="account_dashboard-containerItem-infoGathered">
      <h4 class="account_dashboard-containerItem-infoGathered-title">Information Gathered</h4>
    </div>

  </div>

  </div>

  <button v-on:click="bye">Déconnexion</button>
  <Footer page-background="#333333"></Footer>
  </section>
</template>

<script>
import Footer from "@/components/Footer.vue";

export default {
  name:"AccountDashboard",
  components: {Footer},
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





.account_dashboard {
  margin-top: 58px;

  @media(min-width: 768px){
    margin-top: 200px;

    & .container {
      padding: 0;
      margin: 0 auto;
      width: 750px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }


  }

  &-title {
    color: var(--main-white);
    text-align: center;
  }

  &-containerItem {
    &-profile, &-scheduled, &-live, &-gallery, &-infoGathered {
      color: var(--main-white);
      background-color: var(--secondary-dark);
      border-radius: 4px;
      padding:20px;
      box-sizing: border-box;
      margin-bottom: 20px;
      min-height: 215px;
      &-title {
        margin-bottom: 20px;
      }
    }
    &-profile-info:not(:last-child) {
      margin-bottom: 13px; 
    }
    &-gallery-text {
      color: var(--main-white);
    }
    &-live{
      display: flex;
      flex-direction: column;

      &-player {
        align-self: center;
        width: 219px;
        max-width: 100%;
        height: 134px;
        background: linear-gradient(39.95deg, #FF5F6D 15.19%, #FFC371 84.81%);
        border-radius:4px; 
        box-sizing: border-box;
      }
    }
  }

  @media(min-width: 768px){
    &-containerItem {
      width: 48%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      &-profile, &-scheduled, &-live, &-gallery{
        height: 48%;
      }
      &:last-child {
        width: 100%;
      }
    }
    &-containerItem-live-player {
      height: 120px;
      padding-top: 0;
      // width: initial; 
    }
  }
}
</style>
