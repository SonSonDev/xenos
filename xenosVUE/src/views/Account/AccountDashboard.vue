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
        </div>
      </div>
      
      <div class="account_dashboard-containerItem-live-player"></div>
    </div>
    <div class="account_dashboard-containerItem-gallery">
      <h4 class="account_dashboard-containerItem-gallery-title">Gallery</h4>
      <p class="account_dashboard-containerItem-gallery-text">You have no picture yet.</p>
    </div>
  </div>
  <div class="account_dashboard-containerItem account_dashboard-containerItem-last">
    <div class="account_dashboard-containerItem-infoGathered">
      <h4 class="account_dashboard-containerItem-infoGathered-title">Information Gathered</h4>
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
      schedule: [
        "20/01/2080 - Uranus - 11:00",
        "20/01/2080 - Uranus - 11:00",
        "20/01/2080 - Uranus - 11:00"
      ]
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
      return fetch('http://127.0.0.1:8000/api/bookings', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        return data['hydra:member'];
      })
    },
    getZoneList: function() {
      return fetch('http://127.0.0.1:8000/api/zones', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        return data['hydra:member'];
      })
    },
    getPlanetList: function() {
      return fetch('http://127.0.0.1:8000/api/planets', {
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
      padding:20px 20px 30px;
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
        padding: 25px 20px 30px;
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
      &-profile, &-scheduled, &-live, &-gallery{
        
      }
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
