<template>
  <div class="mission">
    <Header/>
    <MissionTop/>
    <MissionBanner/>
    <MissionScience/>
    <MissionTimeline/>
    <Footer page-background="#333333"/>
  </div>
</template>

<script>
import Header from '../components/Header.vue';
import MissionTop from "../components/Mission/MissionTop.vue"
import MissionBanner from "../components/Mission/MissionBanner.vue"
import MissionScience from "../components/Mission/MissionScience.vue"
import MissionTimeline from "../components/Mission/MissionTimeline.vue"
import Wave from "../components/Wave.vue"
import Footer from "../components/Footer.vue"

export default {
  name: 'Mission',
  components: {
    Header,MissionTop,MissionBanner,MissionScience,MissionTimeline,Footer,Wave
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
