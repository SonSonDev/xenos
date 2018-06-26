<template>
  <div class="mission">
    <Header/>
    <MissionTop/>
    <MissionBanner/>
    <MissionTimeline/>
    <!-- <Wave color="#333333"></Wave> -->
    <Footer page-background="#333333"/>
  </div>
</template>

<script>
import Header from '../components/Header.vue';
import MissionTop from "../components/Mission/MissionTop.vue"
import MissionBanner from "../components/Mission/MissionBanner.vue"
import MissionTimeline from "../components/Mission/MissionTimeline.vue"
import Footer from "../components/Footer.vue"
import Wave from "../components/Wave.vue"

export default {
  name: 'Mission',
  components: {
    Header,MissionTop,MissionBanner,MissionTimeline,Footer,Wave
  }
}
</script>

<style lang="scss" scoped>
  .mission {
    background-color: #333333;
    min-height: 100vh;
    position: absolute;
    top:0;
    width: 100%;
  }
  
</style>
