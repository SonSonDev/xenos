<template>
  <div class="home">
    <Header/>
    <HomeHero/>
    <HomeMission/>
    <HomeRover/>
    <HomeExplore/>
    <HomeTwitch/>
    <!-- <Wave color="#333333"></Wave> -->
    <Footer page-background="white"/>
  </div>
</template>

<script>
// @ is an alias to /src
import Header from '../components/Header.vue';
import HomeHero from '../components/Home/HomeHero.vue';
import HomeMission from '../components/Home/HomeMission.vue';
import HomeRover from '../components/Home/HomeRover.vue';
import HomeExplore from '../components/Home/HomeExplore.vue';
import HomeTwitch from '../components/Home/HomeTwitch.vue';
import Wave from '../components/Wave.vue';
import Footer from '../components/Footer.vue';

export default {
  name: 'Home',
  components: {
    Header,HomeHero,HomeMission,HomeRover,HomeExplore,HomeTwitch,Footer,Wave
  }
}

</script>

<style lang="scss" scoped>

  .home {
    background-color: white;
    background-image: url(../assets/img/bg-pattern01.svg);
    position: absolute;
    top:0;
    width: 100%;
    --header-color: var(--main-dark-white);
    --header-item-color:var(--main-dark);
    @media(min-width:768px){
      --header-item-color: #ffffff;
    }
  }

  .container {
    @media (min-width: 1440px) {
      padding-left: 200px;
      padding-right: 200px;
    }
  }

</style>
