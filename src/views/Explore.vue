<template>

  <div class="explore" :class="{scrollEnabled : current!==0}">
    <Header/>
    <div class="explore_main">
      <E0header
        :current="current"
        v-if="current < 4"
      />
      <!-- <transition name="slide-right"> -->
        <router-view
        @selectedPlanet="updatePlanet"
        @selectedZone="updateZone"
        @selectedTime="updateTime"
        @paid="finalStep"
        :planet="planet"
        :zone="zone"
        :time="time"
        class="child-view"></router-view>
      <!-- </transition> -->
    </div>
  </div>
</template>

<script>
import Header from "@/components/Header.vue"
import E0header from "@/components/Explore/E0header.vue"

export default {
  name: 'Explore',
  components: { Header, E0header },
  data: function () {
    return {
      planet: null,
      zone: null,
      time: null,
      current: 0
    }
  },
  created: function () {
    this.updateCurrentStep()
  },
  updated: function () {
    this.updateCurrentStep()
  },
  methods: {
    updatePlanet: function (planet) {
      this.planet = planet
    },
    updateZone: function (zone) {
      this.zone = zone
    },
    updateTime: function (time) {
      this.time = time
    },
    finalStep: function () {
    },
    updateCurrentStep() {
      let count = 0
      count += Object.keys(this.$route.params).length
      if (this.$route.path.includes('confirm')) {
        count += 1
      } else if (this.$route.path.includes('done')) {
        count += 2
      }
      
      // if (path[path.length - 1] !== 'done') {
      //   this.current = path.length - 2
      // } else {
      //   this.current = 4
      // }
      this.current = count
    }
  }
}


</script>


<style lang="scss" scoped>
.explore.scrollEnabled {
  height: auto;
  overflow: auto;
}

.explore {
  height: 100%;
  width: 100%;
  overflow: hidden;
  @media(min-width: 768px){
    padding-top: 101px; 

  }
  &_main {
    height: 100%;
    display: flex;
    flex-direction: column;
    @media (min-width:768px) {
      flex-direction: row;
    }
  }
}
.child-view {
  transition: all .5s cubic-bezier(.55,0,.1,1);
  overflow-x: hidden;
}
.slide-left-enter, .slide-right-leave-active {
  opacity: 0;
  -webkit-transform: translate(30px, 0);
  transform: translate(30px, 0);
}
.slide-left-leave-active, .slide-right-enter {
  opacity: 0;
  -webkit-transform: translate(-30px, 0);
  transform: translate(-30px, 0);
}

</style>

