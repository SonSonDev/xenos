<template>
  <section class="account_dashboard">
    <h3 class="account_dashboard-title">My Dashboard</h3>
    

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
      <p v-for="(item, index) in planetDataName" v-if="index<3" :key="index" class="account_dashboard-containerItem-scheduled-data">
        {{schedule[index].day}}/{{schedule[index].month}}/{{schedule[index].year}} - {{item}} - {{schedule[index].hour}}:{{schedule[index].minute}}
      </p>
    </div>
  </div>
  <div class="account_dashboard-containerItem">
    <div class="account_dashboard-containerItem-live">
      <div class="account_dashboard-containerItem-live-top">
        <h4 class="account_dashboard-containerItem-live-title">Live</h4>
        <div class="account_dashboard-containerItem-live-iconList">
          <div class="account_dashboard-containerItem-live-iconItem">
            <span class="jam jam-gamepad-retro"></span>
            <span>Use gamepad</span>
          </div>

          <div class="account_dashboard-containerItem-live-iconItem keyboard">
            <span class="jam jam-keyboard"></span>
            <span>Use keyboard</span>
          </div>

          <div class="account_dashboard-containerItem-live-iconItem VR">
            <svg width="20" height="20" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.07129 3.03571C6.07129 4.71228 4.7124 6.07141 3.03564 6.07141C1.35938 6.07141 0 4.71228 0 3.03571C0 1.35913 1.35938 0 3.03564 0C4.7124 0 6.07129 1.35913 6.07129 3.03571ZM3.03564 2.0238C3.03564 2.58264 2.58252 3.03571 2.02344 3.03571C1.46484 3.03571 1.01172 2.58264 1.01172 2.0238C1.01172 1.46497 1.46484 1.0119 2.02344 1.0119C2.58252 1.0119 3.03564 1.46497 3.03564 2.0238Z" transform="translate(5.3833 5.48962)" fill="#F8F8F8"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 17C3.80566 17 0 13.1945 0 8.5C0 3.80548 3.80566 0 8.5 0C13.1943 0 17 3.80548 17 8.5C17 13.1945 13.1943 17 8.5 17ZM14.0952 11.2784C13.0659 13.4074 10.8901 14.875 8.37207 14.875C4.86084 14.875 2.01465 12.0209 2.01465 8.5C2.01465 4.97906 4.86084 2.125 8.37207 2.125C10.8896 2.125 13.0649 3.59216 14.0947 5.72058C14.52 6.57635 14.7471 7.52649 14.7471 8.5C14.7471 9.47314 14.52 10.4229 14.0952 11.2784Z" fill="#F8F8F8"/>
            </svg>
            <span>Use VR</span>
          </div>

        </div>
      </div>
      
      <div class="account_dashboard-containerItem-live-player">
        <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19.0023 12.9675C19.0988 12.8175 19.1639 12.6497 19.1937 12.4743C19.2236 12.2989 19.2175 12.1193 19.176 11.9462C19.1344 11.7731 19.0582 11.61 18.9519 11.4667C18.8455 11.3233 18.7112 11.2025 18.5568 11.1115L4.91419 2.89771C4.69234 2.76472 4.4379 2.69454 4.17858 2.69482C3.40859 2.69482 2.78572 3.29805 2.78572 4.0429V20.4664C2.78572 20.7183 2.85859 20.9648 2.99609 21.1786C3.40308 21.8104 4.26108 22.0038 4.91419 21.6103L18.5568 13.3978C18.7369 13.2889 18.8909 13.1405 19.0037 12.9662L19.0023 12.9675ZM20.028 15.6868L6.3868 23.8993C4.42745 25.0799 1.84935 24.4984 0.631118 22.6043C0.21924 21.9658 0.000262413 21.2241 0 20.4664L0 4.04427C0 1.80971 1.86998 0 4.17995 0C4.95957 0 5.72406 0.211064 6.3868 0.610044L20.028 8.82385C21.9874 10.0031 22.5882 12.495 21.3686 14.3905C21.0304 14.9161 20.5711 15.36 20.028 15.6868Z" transform="translate(0 0.25531)" fill="black"/>
        </svg>

      </div>
    </div>
    <div class="account_dashboard-containerItem-gallery">
      <h4 class="account_dashboard-containerItem-gallery-title">Gallery</h4>
      <p class="account_dashboard-containerItem-gallery-text">You have no picture yet.</p>
    </div>
  </div>
  <div class="account_dashboard-containerItem account_dashboard-containerItem-last">
    <div class="account_dashboard-containerItem-infoGathered">
      <h4 class="account_dashboard-containerItem-infoGathered-title">Information Gathered</h4>
      <p class="account_dashboard-containerItem-infoGathered-text">You have no information gathered yet.</p>
    </div>

  </div>

  </div>
  <div class="account_dashboard-logoutButtonContainer container">
    <button class="account_dashboard-logoutButton" v-on:click="bye">Log out</button>
  </div>
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
      userData: {},
      scheduleData:[],
      zoneData:[],
      zoneDataName:[],
      planetDataName:[],
      schedule: []
    }
  },
  methods: {
    getData: function(){
      this.userData=JSON.parse(localStorage.getItem("xenosUserData"))
    },
    bye: function(){
      localStorage.removeItem("xenosUserData");
      location.href = '/account';
    },
    getBookingList: function() {
      return fetch(this.$baseUrl + '/api/bookings', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        return data['hydra:member'];
      })
    },
    getZoneList: function() {
      return fetch(this.$baseUrl +'/api/zones', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        return data['hydra:member'];
      })
    },
    getPlanetList: function() {
      return fetch(this.$baseUrl +'/api/planets', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        return data['hydra:member'];
      })
    },
    getBookingData: function(){

      return this.getBookingList()
      .then(function(data) {
        for (var i = 0; i < data.length; i++) {
          for (var j = 0; j < this.userData.bookings.length; j++) {
            if (data[i]["@id"]===this.userData.bookings[j]) {
              this.scheduleData.push(data[i]);
            }
          }
        }
        
        this.getZoneList()
        .then(function(data2){
          for (var i = 0; i < data2.length; i++) {
            for (var j = 0; j < this.scheduleData.length; j++) {
              if (data2[i]["@id"]===this.scheduleData[j]["zoneId"]) {
                this.zoneData.push(data2[i]);
                this.zoneDataName.push(String(data2[i].name));
              }
            }
          }

          this.getPlanetList()
          .then(function(data3){
            for (var i = 0; i < data3.length; i++) {
              for (var j = 0; j < this.zoneData.length; j++) {
                if (data3[i]["@id"]===this.zoneData[j]["planet"]) {
                  this.planetDataName.push(String(data3[i].name));
                }
              }
            }
            return true;
          }.bind(this))
        }.bind(this)) 
      }.bind(this))
    },
    formatData: function(){
      this.schedule=[]
      
      for (var i = 0; i < this.scheduleData.length; i++) {
        var item={}
              
        item.day=new Date(this.scheduleData[i].day).getDate()
        if (String(item.day).length<2) {
          item.day="0"+item.day
        }
        item.month=new Date(this.scheduleData[i].day).getMonth()
        item.month++
        if (String(item.month).length<2) {
          item.month="0"+item.month
        }
        item.year=new Date(this.scheduleData[i].day).getFullYear()
        
        item.hour=new Date(this.scheduleData[i].hour).getHours()
        if (String(item.hour).length<2) {
          item.hour="0"+item.hour
        }
        item.minute=new Date(this.scheduleData[i].hour).getMinutes()
        if (String(item.minute).length<2) {
          item.minute="0"+item.minute
        }
        item.endHour=new Date(this.scheduleData[i].endHour).getHours()
        this.schedule.push(item)
        
      }
            
    }
  },
  mounted:function(){
    this.getData()
    this.getBookingData()
    .then(function(){
      this.formatData()      
    }.bind(this))
  }
}
</script>

<style lang="scss" scoped>





.account_dashboard {
  padding-top: 58px;

  @media(min-width: 768px){
    padding-top: 200px;

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
    margin-bottom: 34px;
    @media (min-width: 1280px) {
      display: none;
    }
  }

  &-containerItem {
    height: auto;
    &-profile, &-scheduled, &-live, &-gallery, &-infoGathered {
      color: var(--main-white);
      background-color: var(--secondary-dark);
      border-radius: 4px;
      padding: 20px 20px 30px;
      box-sizing: content-box;
      // box-sizing: border-box;
      margin-bottom: 20px;
      
      height: 100%;
      &-title {
        margin-bottom: 20px;
        
      }
    }
    &-scheduled {
      &-title {
        margin-bottom: 36px;
        position: relative;
        &::after {
          content:"";
          position: absolute;
          background: linear-gradient(39.95deg, #FF5F6D 15.19%, #FFC371 84.81%);
          left:0;
          width: 95%;
          bottom:-16px;
          height: 1px;

        }
      }
      &-data {
        
        color:var(--main-grey);
        position: relative;
        &:not(:last-child){
          margin-bottom: 40px;
        }
        &:not(:last-child)::after {
          content:"";
          width: 100%;
          border: 0.5px dashed var(--main-dark-white);
          position: absolute;
          bottom:-20px;
          left:0;
        }
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
      &-icon {
        &List {
          display: flex;
          @media(min-width: 768px){
            
          }
        }
        &Item {
          display: flex;
          flex-direction: column;
          align-items: center;
          font-family: var(--font-regular);
          margin-right: 35px;
          height: min-content;
          &.keyboard{
            display: none;

            @media(min-width: 1280px){
              display: flex;
            }
          }
          & .jam {
            font-size: 35px;
          }
          & span {
            white-space: nowrap;
            font-size: 12px;
          }
          &.VR {
            justify-content: flex-end;
            height:47px;
            & svg {
              margin-bottom: 5px;  
            }
          }
        }
      }
      &-player {
        align-self: center;
        width: 219px;
        max-width: 100%;
        height: 134px;
        margin-top:35px; 

        background: linear-gradient(39.95deg, #FF5F6D 15.19%, #FFC371 84.81%);
        border-radius:4px; 
        box-sizing: border-box;
        display:flex;
        justify-content:center;
        align-items:center;
        & svg {

        }
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
        height: 50%;
        min-height: 210px;
      }
      &-profile, &-scheduled, &-live, &-gallery, &-infoGathered {
        padding: 25px 25px 30px;

      }
      &-last {
        width: 100%;
      }
      &-live-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        & h4 {
          margin-bottom:0;
        }
      }
      &-live-iconItem {
        margin-right:20px;
        &:last-child {
          margin-right:0;
        }
      }
    }
    &-containerItem-live-player {
      height: 120px;
      padding-top: 0;
      
    }
  }

  @media(min-width: 1280px){

    &-containerItem {
      width: 32%;
    }

    & .container {
      width: 1200px;
    }
  }

  &-logoutButton {
    &Container {
      display: flex;
      flex-direction: column;
    }
      margin-bottom: 160px;
    align-self: center;
    @media (min-width: 1280px) {
      align-self: flex-end;
    }
  }
}
</style>
