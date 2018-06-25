<template>
  <section class="home_hero">
      <div class="container">
      <div class="home_hero-logoContainer">
        <img src="../../assets/img/full-color-white.png" alt="">
      </div>
      
      <h2 class="home_hero-title">The universe is a pretty big place to explore...</h2>
      <p class="home_hero-sub">But you can help us discover uncharted territories</p>
      <a class="buttonContainer" href="">
        <button class="button home_hero-explorerButton">Become an explorer</button>
      </a>
    </div>
  <HomeWave color="white"></HomeWave>
  </section>
</template>

<script>
import HomeWave from '@/components/Home/HomeWave.vue';

export default {
  name: 'HomeHero',
  components: {
    HomeWave
  }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.home_hero {
  position: relative;
  // clip-path: ellipse(130% 100% at 50% 0%);
  background-image: url("../../assets/img/bg-hero.png"); 
  background-size: cover;
  width: 100%;
  color: #fff;
  box-sizing: border-box;
  padding-top: 40px;
  // padding-bottom:20%;
  @media(min-width:768px){
    // clip-path: ellipse(100% 90% at 50% 0%);

    padding-top:324px;
  }
  
  &-logoContainer {
    width: 95px;
    text-align: center;
    margin: 0 auto 85px;
    @media (min-width: 768px){
      display: none;
    }
    & img {
      width: 100%;
    }
  }



  &-title {
    font-family: "Barlow-Bold";
    font-size: 36px;
    line-height: 43px;
    margin-bottom: 10px;
    @media(min-width:768px){

    }
  }
  &-sub {
    font-family: "Barlow-Regular";
    font-size: 18px;
    line-height: 22px;
    width: 160px;
    margin-bottom: 20px;
    @media(min-width:768px){
      width: inherit;
      margin-bottom: 40px;
      
    }
  }

  &-donateButton {
    @media(min-width:768px){
      display:none;
    }
  }

}

</style>
