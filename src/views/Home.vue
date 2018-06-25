<template>
  <div class="home">
    <HomeHero/>
    <HomeMission/>
    <HomeRover/>
    <HomeExplore/>
    <HomeFooter/>
  </div>
</template>

<script>
// @ is an alias to /src
import HomeHero from '../components/Home/HomeHero.vue'
import HomeMission from '../components/Home/HomeMission.vue'
import HomeRover from '../components/Home/HomeRover.vue'
import HomeExplore from '../components/Home/HomeExplore.vue'
import HomeFooter from '../components/Home/HomeFooter.vue'

export default {
  name: 'Home',
  components: {
    HomeHero,HomeMission,HomeRover,HomeExplore, HomeFooter
  }
}

</script>

<style lang="scss" scoped>
  .home {
    position: absolute;
    top:0;
    width: 100%;
    height:300vh;
  }

</style>
